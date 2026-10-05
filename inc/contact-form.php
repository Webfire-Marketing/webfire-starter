<?php
/**
 * Verarbeitung des Kontaktformular-Blocks (webfire/kontaktformular).
 *
 * Ablauf: Formular -> admin-post.php -> Prüfung -> wp_mail() -> Redirect auf die Danke-Seite.
 * Die Danke-Seite ist Absicht: Sie macht Anfragen in Analytics als eigenes Ziel messbar.
 *
 * Spam-Schutz ohne Captcha: Nonce, Honeypot-Feld und Mindest-Ausfüllzeit.
 * Es werden keine Anfragen in der Datenbank gespeichert.
 *
 * @package WebfireStarter
 */

declare( strict_types=1 );

namespace WebfireStarter\ContactForm;

defined( 'ABSPATH' ) || exit;

const ACTION       = 'webfire_contact';
const MIN_SECONDS  = 3;
const MAX_MESSAGE  = 5000;

add_action( 'admin_post_nopriv_' . ACTION, __NAMESPACE__ . '\\handle' );
add_action( 'admin_post_' . ACTION, __NAMESPACE__ . '\\handle' );

/**
 * Nimmt das Formular entgegen, prüft es und verschickt die Mail.
 */
function handle(): void {
	$back = wp_get_referer() ?: home_url( '/' );

	if ( ! isset( $_POST['_wfnonce'] ) || ! wp_verify_nonce( sanitize_key( wp_unslash( $_POST['_wfnonce'] ) ), ACTION ) ) {
		redirect_with_status( $back, 'expired' );
	}

	// Honeypot: Menschen sehen dieses Feld nicht und lassen es leer.
	if ( ! empty( $_POST['website'] ) ) {
		redirect_with_status( resolve_thank_you_url(), 'ok' ); // Bots bekommen kein Signal, dass sie erkannt wurden.
	}

	// Zeitfalle: Wer das Formular in unter drei Sekunden abschickt, ist sehr wahrscheinlich kein Mensch.
	$started = isset( $_POST['_wfstart'] ) ? (int) $_POST['_wfstart'] : 0;
	if ( $started <= 0 || ( time() - $started ) < MIN_SECONDS ) {
		redirect_with_status( $back, 'error' );
	}

	$data = array(
		'name'    => sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) ),
		'email'   => sanitize_email( wp_unslash( $_POST['email'] ?? '' ) ),
		'phone'   => sanitize_text_field( wp_unslash( $_POST['phone'] ?? '' ) ),
		'message' => sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) ),
		'consent' => ! empty( $_POST['consent'] ),
	);

	$errors = validate( $data );
	if ( $errors ) {
		redirect_with_status( $back, 'invalid' );
	}

	/**
	 * Empfänger der Anfragen. Standard: Admin-E-Mail der Website.
	 *
	 * @param string $recipient E-Mail-Adresse.
	 */
	$recipient = (string) apply_filters( 'webfire_starter_contact_recipient', get_option( 'admin_email' ) );

	$subject = sprintf(
		/* translators: %s: Name der anfragenden Person */
		__( 'Neue Anfrage über die Website von %s', 'webfire-starter' ),
		$data['name']
	);

	$body = implode(
		"\n",
		array(
			__( 'Name:', 'webfire-starter' ) . ' ' . $data['name'],
			__( 'E-Mail:', 'webfire-starter' ) . ' ' . $data['email'],
			__( 'Telefon:', 'webfire-starter' ) . ' ' . ( '' !== $data['phone'] ? $data['phone'] : '–' ),
			'',
			$data['message'],
		)
	);

	$headers = array( 'Reply-To: ' . $data['name'] . ' <' . $data['email'] . '>' );

	$sent = wp_mail( $recipient, $subject, $body, $headers );

	redirect_with_status( $sent ? resolve_thank_you_url() : $back, $sent ? 'ok' : 'error' );
}

/**
 * Pflichtfelder und Formate prüfen.
 *
 * @param array<string, mixed> $data Bereinigte Eingaben.
 * @return string[] Fehlercodes, leer wenn alles passt.
 */
function validate( array $data ): array {
	$errors = array();

	if ( '' === $data['name'] ) {
		$errors[] = 'name';
	}
	if ( ! is_email( $data['email'] ) ) {
		$errors[] = 'email';
	}
	if ( '' === $data['message'] || mb_strlen( $data['message'] ) > MAX_MESSAGE ) {
		$errors[] = 'message';
	}
	if ( ! $data['consent'] ) {
		$errors[] = 'consent';
	}

	return $errors;
}

/**
 * Danke-Seite aus dem Block-Attribut, sonst /danke/.
 * Nur Ziele auf der eigenen Domain sind erlaubt (kein offener Redirect).
 */
function resolve_thank_you_url(): string {
	$requested = isset( $_POST['_wfthanks'] ) ? esc_url_raw( wp_unslash( $_POST['_wfthanks'] ) ) : '';
	$fallback  = home_url( '/danke/' );

	return wp_validate_redirect( $requested, $fallback );
}

/**
 * Leitet weiter und hängt einen Status an, den der Block als Hinweis anzeigt.
 *
 * @return never
 */
function redirect_with_status( string $url, string $status ): void {
	$url = add_query_arg( 'kontakt', $status, $url );
	wp_safe_redirect( $url . ( 'ok' === $status ? '' : '#kontakt' ), 303 );
	exit;
}

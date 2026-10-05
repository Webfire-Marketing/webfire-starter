<?php
/**
 * Frontend-Ausgabe Kontaktformular.
 *
 * @var array<string, mixed> $attributes Block-Attribute.
 *
 * @package WebfireStarter
 */

defined( 'ABSPATH' ) || exit;

$webfire_status   = isset( $_GET['kontakt'] ) ? sanitize_key( wp_unslash( $_GET['kontakt'] ) ) : '';
$webfire_messages = array(
	'invalid' => __( 'Bitte füllen Sie alle Pflichtfelder aus und bestätigen Sie die Datenschutzhinweise.', 'webfire-starter' ),
	'expired' => __( 'Das Formular war zu lange geöffnet. Bitte senden Sie es noch einmal ab.', 'webfire-starter' ),
	'error'   => __( 'Die Nachricht konnte gerade nicht verschickt werden. Bitte versuchen Sie es erneut oder rufen Sie uns an.', 'webfire-starter' ),
);
$webfire_id      = 'wf-' . wp_unique_id();
$webfire_wrapper = get_block_wrapper_attributes( array( 'class' => 'wf-form' ) );
?>
<form <?php echo $webfire_wrapper; // phpcs:ignore WordPress.Security.EscapeOutput -- von WordPress escaped. ?> method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" novalidate>
	<?php if ( isset( $webfire_messages[ $webfire_status ] ) ) : ?>
		<p class="wf-form__notice" role="alert"><?php echo esc_html( $webfire_messages[ $webfire_status ] ); ?></p>
	<?php endif; ?>

	<input type="hidden" name="action" value="webfire_contact">
	<input type="hidden" name="_wfstart" value="<?php echo esc_attr( (string) time() ); ?>">
	<input type="hidden" name="_wfthanks" value="<?php echo esc_attr( home_url( $attributes['thankYouUrl'] ) ); ?>">
	<?php wp_nonce_field( 'webfire_contact', '_wfnonce' ); ?>

	<div class="wf-form__hp" aria-hidden="true">
		<label for="<?php echo esc_attr( $webfire_id ); ?>-website">Website</label>
		<input id="<?php echo esc_attr( $webfire_id ); ?>-website" type="text" name="website" tabindex="-1" autocomplete="off">
	</div>

	<div class="wf-form__row">
		<p class="wf-form__field">
			<label for="<?php echo esc_attr( $webfire_id ); ?>-name"><?php esc_html_e( 'Name', 'webfire-starter' ); ?> <span aria-hidden="true">*</span></label>
			<input id="<?php echo esc_attr( $webfire_id ); ?>-name" type="text" name="name" autocomplete="name" required>
		</p>
		<p class="wf-form__field">
			<label for="<?php echo esc_attr( $webfire_id ); ?>-email"><?php esc_html_e( 'E-Mail', 'webfire-starter' ); ?> <span aria-hidden="true">*</span></label>
			<input id="<?php echo esc_attr( $webfire_id ); ?>-email" type="email" name="email" autocomplete="email" required>
		</p>
	</div>

	<?php if ( ! empty( $attributes['showPhone'] ) ) : ?>
		<p class="wf-form__field">
			<label for="<?php echo esc_attr( $webfire_id ); ?>-phone"><?php esc_html_e( 'Telefon (optional)', 'webfire-starter' ); ?></label>
			<input id="<?php echo esc_attr( $webfire_id ); ?>-phone" type="tel" name="phone" autocomplete="tel">
		</p>
	<?php endif; ?>

	<p class="wf-form__field">
		<label for="<?php echo esc_attr( $webfire_id ); ?>-message"><?php esc_html_e( 'Ihre Nachricht', 'webfire-starter' ); ?> <span aria-hidden="true">*</span></label>
		<textarea id="<?php echo esc_attr( $webfire_id ); ?>-message" name="message" rows="6" maxlength="5000" required></textarea>
	</p>

	<p class="wf-form__consent">
		<input id="<?php echo esc_attr( $webfire_id ); ?>-consent" type="checkbox" name="consent" value="1" required>
		<label for="<?php echo esc_attr( $webfire_id ); ?>-consent">
			<?php
			printf(
				/* translators: %s: Link zur Datenschutzerklärung */
				esc_html__( 'Ich habe die %s gelesen und bin mit der Verarbeitung meiner Angaben zur Beantwortung der Anfrage einverstanden.', 'webfire-starter' ),
				'<a href="' . esc_url( home_url( $attributes['privacyUrl'] ) ) . '">' . esc_html__( 'Datenschutzhinweise', 'webfire-starter' ) . '</a>'
			);
			?>
		</label>
	</p>

	<p class="wf-form__submit">
		<button type="submit" class="wp-element-button"><?php echo esc_html( $attributes['buttonLabel'] ); ?></button>
	</p>
</form>

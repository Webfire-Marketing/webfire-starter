/**
 * Editor-Seite des Kontaktformulars – ohne Build-Step, nur mit WordPress-Globals.
 * Vorschau kommt vom Server (render.php), Einstellungen sitzen in der Seitenleiste.
 */
( function ( wp ) {
	const { registerBlockType } = wp.blocks;
	const { InspectorControls, useBlockProps } = wp.blockEditor;
	const { PanelBody, TextControl, ToggleControl } = wp.components;
	const ServerSideRender = wp.serverSideRender;
	const el = wp.element.createElement;
	const __ = wp.i18n.__;

	registerBlockType( 'webfire/kontaktformular', {
		edit( { attributes, setAttributes } ) {
			return el(
				'div',
				useBlockProps(),
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: __( 'Formular', 'webfire-starter' ) },
						el( TextControl, {
							label: __( 'Danke-Seite (Pfad)', 'webfire-starter' ),
							value: attributes.thankYouUrl,
							onChange: ( v ) => setAttributes( { thankYouUrl: v } ),
						} ),
						el( TextControl, {
							label: __( 'Datenschutz-Seite (Pfad)', 'webfire-starter' ),
							value: attributes.privacyUrl,
							onChange: ( v ) => setAttributes( { privacyUrl: v } ),
						} ),
						el( TextControl, {
							label: __( 'Button-Text', 'webfire-starter' ),
							value: attributes.buttonLabel,
							onChange: ( v ) => setAttributes( { buttonLabel: v } ),
						} ),
						el( ToggleControl, {
							label: __( 'Telefonfeld anzeigen', 'webfire-starter' ),
							checked: attributes.showPhone,
							onChange: ( v ) => setAttributes( { showPhone: v } ),
						} )
					)
				),
				el( ServerSideRender, { block: 'webfire/kontaktformular', attributes } )
			);
		},
		save: () => null,
	} );
} )( window.wp );

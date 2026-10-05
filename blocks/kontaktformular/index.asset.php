<?php
// Abhängigkeiten für index.js – ersetzt die Datei, die sonst ein Build-Step erzeugen würde.
return array(
	'dependencies' => array( 'wp-blocks', 'wp-block-editor', 'wp-components', 'wp-element', 'wp-i18n', 'wp-server-side-render' ),
	'version'      => '1.0.0',
);

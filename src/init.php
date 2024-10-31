<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function section_block_cgb_block_assets() {
	// Styles.
	wp_enqueue_style(
		'section_block-cgb-style-css', // Handle.
		plugins_url( 'dist/blocks.style.build.css', dirname( __FILE__ ) ), // Block style CSS.
		array( 'wp-block-library' ) 
		);
} 

// Hook: Frontend assets.
add_action( 'enqueue_block_assets', 'section_block_cgb_block_assets' );


function section_block_cgb_editor_assets() {
	// Scripts.
	wp_enqueue_script(
		'section_block-cgb-block-js', // Handle.
		plugins_url( '/dist/blocks.build.js', dirname( __FILE__ ) ), 
		array( 'wp-block-library', 'wp-i18n', 'wp-element' ),
		
		true 
	);

	// Styles.
	wp_enqueue_style(
		'section_block-cgb-block-editor-css', // Handle.
		plugins_url( 'dist/blocks.editor.build.css', dirname( __FILE__ ) ), 
		array( 'wp-edit-blocks' ) 
		);
} 

// Hook: Editor assets.
add_action( 'enqueue_block_editor_assets', 'section_block_cgb_editor_assets' );

<?php
/**
 * Ganso Bomb scripts and enqueues.
 *
 */

namespace gansobomb\scripts;

/**
 * Enqueue scripts.
 *
 * @return void
 * @author Corey Collins
 */
function scripts() {

	$asset_file = [
		'version'      => '1.0.0',
		'dependencies' => [ 'wp-polyfill' ],
	];

	// Register styles & scripts.
	wp_enqueue_style( 'gansobomb', get_stylesheet_directory_uri() . '/build/index.css', [], $asset_file['version'] );
	wp_enqueue_script( 'gansobombjs', get_stylesheet_directory_uri() . '/build/index.js', [], $asset_file['version'] );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\scripts' );

/**
 * Enqueues block scripts.
 *
 * @return void
 * @author Corey Collins
 */
function enqueue_block_assets() {
	$block_asset_dependencies = [ 'wp-i18n', 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ];
	$version                  = '1.0.0';

	wp_enqueue_script( 'gansobombblocks', get_stylesheet_directory_uri() . '/build/block-scripts.js', $block_asset_dependencies, $version );
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_assets' );
<?php
/**
 * Ganso Bomb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/block-themes/block-theme-setup/
 */

if ( ! function_exists( 'gansobomb_setup' ) ) :

    /**
     * Setup theme requirements and supports.
     *
     * @return void
     * @author Corey Collins
     */
    function gansobomb_setup() {
        // Add block styles.
        add_theme_support( 'wp-block-styles' );

        // Enqueue editor styles.
        add_editor_style( 'editor-style.css' );
    }
endif;
add_action( 'after_theme_setup', 'gansobomb_setup' );

/**
 * Enqueue scripts.
 *
 * @return void
 * @author Corey Collins
 */
function gansobomb_scripts() {

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
add_action( 'wp_enqueue_scripts', 'gansobomb_scripts' );
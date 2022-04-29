<?php
/**
 * Ganso Bomb theme setup.
 *
 */

namespace gansobomb\setup;

/**
 * Setup theme requirements and supports.
 *
 * @return void
 * @author Corey Collins
 */
function setup() {
    // Add block styles.
    add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles.
    add_editor_style( 'editor-style.css' );
}
add_action( 'after_theme_setup', __NAMESPACE__ . '\setup' );
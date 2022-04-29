<?php
/**
 * Ganso Bomb functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/block-themes/block-theme-setup/
 */

/**
 * Specify includes files.
 *
 * @return array
 * @author Corey Collins
 */
function gansobomb_get_theme_include_files() {
	return [
		'inc/setup.php',
		'inc/scripts.php',
		'inc/blocks.php',
	];
}

foreach ( gansobomb_get_theme_include_files() as $include ) {
	require trailingslashit( get_template_directory() ) . $include;
}

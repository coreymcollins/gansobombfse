<?php
/**
 * Ganso Bomb block functionality.
 *
 * @link https://developer.wordpress.org/themes/block-themes/block-theme-setup/
 */

namespace gansobomb\blocks;

/**
 * Registers a block category.
 *
 * @param array $categories
 * @return array
 * @author Corey Collins
 */
function block_category( $categories ) {
	return array_merge(
		$categories,
		[
			[
				'slug' => 'gb-blocks',
				'title' => __( 'Ganso Bomb Blocks', 'gansobomb' ),
			],
		]
	);
}
add_action( 'block_categories', __NAMESPACE__ . '\block_category', 10, 2 );

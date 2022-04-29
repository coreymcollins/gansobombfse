const { __ } = wp.i18n;

wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/cover',
        {
            name: 'with-featured-image',
            title: __( 'Cover with Featured Image', 'gansobomb' ),
            category: 'gb-blocks',
            attributes: {
                overlayColor: 'gbgold',
                dimRatio: 70,
                useFeaturedImage: true,
            },
            supports: {
                align: ['full'],
            },
        }
    );
});
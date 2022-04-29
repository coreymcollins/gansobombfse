wp.domReady( function() {
    wp.blocks.registerBlockVariation(
        'core/cover',
        {
            name: 'with-featured-image',
            title: 'Cover with Featured Image',
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
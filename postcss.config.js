module.exports = {
	plugins: {
		'postcss-strip-inline-comments': {},
		'postcss-nested': {},
		cssnano: {},
		'postcss-preset-env': {
			autoprefixer: {
				flexbox: 'no-2009',
			},
			stage: 3,
			features: {
				'nesting-rules': true,
			},
		},
	},
};

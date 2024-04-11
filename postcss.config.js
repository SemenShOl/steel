module.exports = {
    plugins: {
        'postcss-preset-env': {
            browsers: 'last 2 versions',
        },
        'autoprefixer': {},
        'postcss-pxtorem': {},
        'postcss-inline-svg': {},
        'css-mqpacker': {
        	sort: require('sort-css-media-queries').desktopFirst
        },
        // 'cssnano': {},
    },
}
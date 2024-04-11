require('babel-polyfill');
const path = require('path');
const WebPackConcatPlugin = require('webpack-concat');
const glob = require("glob-all"); 

module.exports = {
    entry: {
        // modules: glob.sync([
        //     "./assets/src/js/modules/*.js",
        // ]),
        main: ['babel-polyfill', './assets/src/js/main.js', './assets/src/scss/main.scss'],
    },
    output: {
        path: path.resolve(__dirname, './assets/js'),
        filename: '[name].js',
    },
    module: {
        rules: [
            // JavaScript
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: ['babel-loader'],
            },
            // CSS, PostCSS, Sass
            {
                test: /\.scss$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: '../css/[name].css',
                        }
                    },
                    {
                        loader: 'extract-loader'
                    },
                    {
                        loader: 'css-loader?url=false'
                    },
                    {
                        loader: 'postcss-loader'
                    },
                    {
                        loader: 'sass-loader'
                    },
                ]
            },
        ],
    },
    plugins: [
        new WebPackConcatPlugin({
            buildPath: ['./assets/js'],
            output: 'libs.js',
            files: [
                '../../node_modules/@popperjs/core/dist/umd/popper.min.js',
                '../../node_modules/bootstrap/dist/js/bootstrap.min.js',
                '../src/js/libs/bootstrap-validator.js',
                '../src/js/libs/jquery.lazyload.min.js',
                '../src/js/libs/jquery.mask.min.js',
                '../src/js/libs/slick.min.js',
                '../src/js/libs/jquery.cookies.js',
                '../src/js/libs/baronscroll.min.js',
                '../src/js/libs/fslightbox.js',
                '../src/js/libs/wow.min.js',
                '../src/js/libs/lity.min.js',
                '../src/js/libs/jquery.anyimagecomparisonslider.min.js',
                '../src/js/libs/select2.min.js',
            ]
        }),
    ]
}
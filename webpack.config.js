const path = require('path');
const ExtractTextPlugin = require("extract-text-webpack-plugin");

module.exports = {
    entry: [
        './dev/js/main.js',
        './dev/scss/main.scss'
    ],
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js'
    },
    module: {
        loaders: [
            {
                test: /\.js$/,
                loader: 'babel-loader',
                exclude: /node_modules/
            },
            {
                test: /\.(sass|scss)$/,
                loader: ExtractTextPlugin.extract(['css-loader', 'sass-loader'])
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin({
            filename: '[name].bundle.css',
            allChunks: true,
        })
    ]
}
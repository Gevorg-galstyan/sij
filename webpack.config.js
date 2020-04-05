const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    entry: {
        app: './wp-content/themes/sij/src/index.js'
    },
    output: {
        path: path.resolve(__dirname, './wp-content/themes/sij'),
        filename: 'assets/js/[name].js',
        publicPath: '/'
    },
    // Adding jQuery as external library
    externals: {
        jquery: 'jQuery'
    },
    devtool: 'source-map', // any "source-map"-like devtool is possible
    module: {
        rules: [{
            test: /\.js$/,
            loader: 'babel-loader',
            exclude: '/node_modules/'
        },
        {
            test: /\.scss$/,
            use: [
                'style-loader',
                MiniCssExtractPlugin.loader,
                {
                    loader: 'css-loader',
                    options: {
                        url: false,
                        sourceMap: true
                    }
                },
                {
                    loader: 'postcss-loader',
                    options: { sourceMap: true, config: { path: 'wp-content/themes/sij/src/js/postcss.config.js' } }
                },
                {
                    loader: 'sass-loader',
                    options: { sourceMap: true }
                }
            ]
        },
        {
            test: /\.css$/,
            use: [
                'style-loader',
                MiniCssExtractPlugin.loader,
                {
                    loader: 'css-loader',
                    options: { sourceMap: true }
                },
                {
                    loader: 'postcss-loader',
                    options: { sourceMap: true, config: { path: 'wp-content/themes/sij/src/js/postcss.config.js' } }
                }
            ]
        }]
    },
    devServer: {
        overlay: true
    },
    plugins: [
        new MiniCssExtractPlugin({
            // filename: '[name].css'
            filename: 'style.css'
        })
    ]
}
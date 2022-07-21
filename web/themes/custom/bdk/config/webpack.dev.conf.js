/* eslint-disable */

const path = require('path')
const webpack = require('webpack')
const {merge} = require('webpack-merge')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const base = require('./webpack.base.conf')

const entryArray = [];

const entryObject = entryArray.reduce((acc, item) => {
  const name = `../${item.replace('/entry.js', '/dist')}`;
  acc[name] = item;
  return acc;
}, {});

const configDev = {
  mode: 'development',
  watch: true,
  devtool: 'inline-source-map',
  entry: {
    ...entryObject,
    main: './src/index.js'
  },
  output: {
    filename: '[name]/index.js'
  },
  optimization: {
    runtimeChunk: 'single',
    minimize: true,
    splitChunks: {
      cacheGroups: {
        vendors: {
          test: /[\\/]node_modules[\\/]/,
          name: 'vendors',
          chunks: 'all'
        }
      }
    },
  },
  module: {
    rules: [
      {
        test: /\.(s[ac]|c|)ss$/i,
        use: [
          {
            loader: MiniCssExtractPlugin.loader
          },
          {
            loader: 'css-loader',
            options: {
              sourceMap: true
            }
          },
          {
            loader: 'resolve-url-loader'
          },
          {
            loader: 'postcss-loader',
            options: {
              sourceMap: true
            }
          },
          {
            loader: 'sass-loader',
            options: {
              sourceMap: true
            }
          }
        ]
      },
      {
        test: /\.(png|jpe?g|gif|svg|webp)$/i,
        generator: {
          filename: './images/[name][ext]',
        },
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({filename: "[name]/style.css"}),

    new webpack.DefinePlugin({
      PRODUCTION: JSON.stringify(false)
    }),

    new BrowserSyncPlugin({
      host: 'localhost',
      port: 8081,
      // proxy: '',
      reloadDelay: 50,
      injectChanges: false,
      reloadDebounce: 500,
      reloadOnRestart: true
    })
  ]
}

module.exports = merge(base, configDev)

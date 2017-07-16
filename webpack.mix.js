let mix = require('laravel-mix')
let path = require('path')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
  resolve: {
    alias: {
      'bootstrap-sass': path.resolve(__dirname, 'node_modules/bootstrap-sass'),
      sass: path.resolve(__dirname, 'resources/assets/sass/')
    }
  }
})

mix.js('resources/assets/js/main.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')

mix.browserSync('product-reviews.dev')
mix.sourceMaps()

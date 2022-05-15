const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/media.css', 'public/css')
    .postCss('resources/css/style.css', 'public/css')
    .copyDirectory('resources/css/libs', 'public/css/libs')
    .copyDirectory('resources/css/img', 'public/css/img')
    .copyDirectory('resources/css/fonts', 'public/css/fonts')
mix.js('resources/js/scripts.js', 'public/js')
    .copyDirectory('resources/js/libs', 'public/js/libs')

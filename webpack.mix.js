const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/site/site.js', 'public/js')
    .css('resources/css/site/site.css', 'public/css')
    .js('resources/js/admin/admin.js', 'public/js')
    .sass('resources/scss/admin/admin.scss', 'public/css');

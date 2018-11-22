let mix = require('laravel-mix');

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
mix.js([
        'resources/assets/js/scripts.bundle.js',
        'resources/assets/js/dashboard.js'
    ], 'public/js/app.js')
    .js('resources/assets/js/vendors.bundle.js', 'public/js/vendor.js')
    .styles([
        'resources/assets/css/style.bundle.rtl.css',
        'resources/assets/css/vendors.bundle.rtl.css'
    ], 'public/css/app.css')
    .copy('resources/assets/fonts', 'public/css/fonts')


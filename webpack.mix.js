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

// Global styles, js and fonts
mix.styles([
        'resources/assets/css/style.bundle.rtl.css',
        'resources/assets/css/vendors.bundle.rtl.css'
    ], 'public/css/app.css')
    .js([
        'resources/assets/users/js/user.js',
        'resources/assets/users/js/formValidation.js',
        'resources/assets/users/js/login.js'
    ], 'public/js/user.js')
    .copy('resources/assets/fonts', 'public/css/fonts')

// User Section Styles
/*
mix.js([
        'resources/assets/users/js/user.js',
        'resources/assets/users/js/formValidation.js',
        'resources/assets/users/js/login.js'
    ], 'public/js/user.js')
*/

mix.webpackConfig({
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.runtime.esm.js'
        }
    }
})

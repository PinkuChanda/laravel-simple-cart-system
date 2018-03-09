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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');



mix.styles([

    'resources/assets/css/bootstrap.css',
    'resources/assets/css/font-awesome.css',
    'resources/assets/css/skdslider.css',
    'resources/assets/css/style.css'

], 'public/css/libs.css');


mix.scripts([

    'resources/assets/js/bootstrap.js',
    'resources/assets/js/easing.js',
    'resources/assets/js/jquery-1.11.1.min.js',
    'resources/assets/js/minicart.min.js',
    'resources/assets/js/move-top.js',
    'resources/assets/js/responsiveslides.min.js',
    'resources/assets/js/skdslider.min.js'

], 'public/js/libs.js');

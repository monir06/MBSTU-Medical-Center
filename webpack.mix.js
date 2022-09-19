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
<<<<<<< HEAD
 mix.copyDirectory('resources/backend', 'public/backend');
 mix.copyDirectory('resources/frontend', 'public/frontend');
 
// mix.js('resources/js/app.js', 'public/js')
    // .sass('resources/sass/app.scss', 'public/css');
=======

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
>>>>>>> 894e2987173b074d55382f50bb6c110b01257d71

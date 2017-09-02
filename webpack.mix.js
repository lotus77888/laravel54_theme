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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.copyDirectory('resources/assets', 'public/assets');
mix.copy('bower_components/jquery/dist/jquery.min.js', 'public/vendors/jquery/js/');
// jquery slim scroll
mix.copy('bower_components/jquery/dist/jquery.slim.min.js', 'public/vendors/jquery/js/');
mix.copy('bower_components/jquery-ui/jquery-ui.min.js', 'public/vendors/jquery-ui/js/');
mix.copy('bower_components/jquery-ui/themes/smoothness/jquery-ui.min.css', 'public/vendors/jquery-ui/css/');
// metis menu css and js
mix.copy('bower_components/metisMenu/dist/metisMenu.min.js', 'public/vendors/metismenu/js/');
mix.copy('bower_components/metisMenu/dist/metisMenu.min.css', 'public/vendors/metismenu/css/');
// font awesome css
mix.copy('bower_components/components-font-awesome/css/font-awesome.min.css', 'public/vendors/fontawesome/css/');
mix.copy('bower_components/components-font-awesome/fonts', 'public/vendors/fontawesome/fonts/');
// Dropzone css and js
mix.copy('bower_components/dropzone/dist/min/dropzone.min.js', 'public/vendors/dropzone/js/');
mix.copy('bower_components/dropzone/dist/min/dropzone.min.css', 'public/vendors/dropzone/css/');
// dropify cs  nd js
mix.copy('bower_components/dropify/dist/css/dropify.css', 'public/vendors/dropify/css/');
mix.copy('bower_components/dropify/dist/js/dropify.min.js', 'public/vendors/dropify/js/');
mix.copy('bower_components/dropify/dist/fonts', 'public/vendors/dropify/fonts/');









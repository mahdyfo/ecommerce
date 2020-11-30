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

    // Compile SCSS file
   .sass('resources/sass/app.scss', 'public/css')

    // Add custom CSS file to the end
    .styles(['public/css/app.css', 'resources/css/app.css'], 'public/css/app.css');

// If in production, Version the file for caching purposes
if (mix.inProduction()) {
    mix.version();
}

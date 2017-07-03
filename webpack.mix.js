// var sassdoc = require('sassdoc');

const { mix } = require('laravel-mix');

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


mix.sass('resources/assets/sass/app.scss', 'public/css', {
        includePaths: ['node_modules']
    })
   .js('resources/assets/js/bootstrap.js', 'public/js/plugins.js')
   .js('resources/assets/js/app.js', 'public/js')
   .version();


if (!mix.config.inProduction) {
    mix.sourceMaps()
       .browserSync({
            proxy: '192.168.99.100'
       });
    
    // sassdoc('./resources/assets/sass', {
    //     verbose: true,
    //     dest: './public/sassdocs'
    // });
}
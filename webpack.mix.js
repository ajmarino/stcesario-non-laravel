const mix = require('laravel-mix');

require('laravel-mix-purgecss');
require('laravel-mix-tailwind');


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css', {
        includePaths: [
            'node_modules/include-media/dist/'
        ]
    })
    .options({
        processCssUrls: false,
        postCss: [
            require('css-mqpacker')(),
        ]
    })
    .tailwind('tailwind.config.js');

if (mix.inProduction()) {
    mix.purgeCss({
        enabled: true,

        globs: [
            path.join(__dirname, "resources/js/**/*.vue"),
        ],

        extensions: ['html', 'js', 'php', 'vue']
    });
}

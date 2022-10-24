const mix = require('laravel-mix');
const config = require('./webpack.config')

mix.webpackConfig(config)

mix.js('resources/js/app.js', 'public/js').vue()
    .sass('resources/sass/app.scss', 'public/css')
        //.copyDirectory('resources/fonts', 'public/fonts')
            //.copyDirectory('resources/svg', 'public/svg')
                 //.copyDirectory('resources/img', 'public/images');
                    //.copyDirectory('resources/html', 'public/html');


if (mix.inProduction()) {
    mix.version();
}

let mix = require('laravel-mix');

mix.sass('style/sass/my-sass.scss', 'style/css/style.css')

mix.js('script/source/my-js.js', '/script/js/script.js');
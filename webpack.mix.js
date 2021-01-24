let mix = require('laravel-mix');
require('mix-tailwindcss');

mix
	.js('js/main.js', '')
	.postCss('css/main.css', '')
	.tailwind()
	.setPublicPath('dist');
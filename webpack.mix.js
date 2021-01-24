let mix = require('laravel-mix');

mix
	.js('js/main.js', '')
	.postCss('css/main.css', '', [
		require('tailwindcss'),
	])
	.setPublicPath('dist');
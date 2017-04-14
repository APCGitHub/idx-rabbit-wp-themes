const { mix } = require('laravel-mix');

mix.options({ processCssUrls: false });

//output assets in the public dir
mix.setPublicPath('public');

mix.sass('resources/assets/sass/app.scss', 'public/css')
	.js('resources/assets/js/app.js', 'public/js');
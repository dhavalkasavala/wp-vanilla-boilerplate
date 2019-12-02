const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'xampp/htdocs/wp-vanilla-boilerplate/assets/js')
   .version()
   .browserSync({
    proxy: 'http://localhost:3000',
    files:['xampp/htdocs/wp-vanilla-boilerplate/assets/**/*.html','xampp/htdocs/wp-vanilla-boilerplate/assets/**/*.css','xampp/htdocs/wp-vanilla-boilerplate/assets/**/*.js']
}); // Hot reloading

const tailwindcss = require('tailwindcss')

mix.sass('resources/sass/app.scss', 'xampp/htdocs/wp-vanilla-boilerplate/assets/sass')
   .options({
      processCssUrls: false,
      postCss: [ tailwindcss('tailwind.config.js') ],
});
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const wpPot = require( 'wp-pot' );

mix.postCss('resources/css/style.css', 'css',
	tailwindcss('tailwind.config.js')
);


/**
 * Production Task
 */
if ( mix.inProduction() ) {
	// Generate POT file
	wpPot( {
		package: 'wp-vanilla-boilerplate',
		domain: 'wp-vanilla',
		destFile: 'languages/wp-vanilla.pot',
		relativeTo: './',
		src: [ './**/*.php', '!./vendor/**/*' ],
		bugReport: 'https://github.com/dhavalkasavala/wp-vanilla-boilerplate/issues/new',
		team: 'Wp Vanilla team',
	} );
}

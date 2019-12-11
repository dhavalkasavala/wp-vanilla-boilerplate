<?php
/**
 * Template Name: Page Builder Full Width
 */

get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', 'pagebuilder' );
	}
}
get_footer();

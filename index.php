<?php get_header(); ?>

<?php

	if ( have_posts() ) {

		// Load posts loop.
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content' );
		}

		// Previous/next page navigation.
		the_posts_navigation();

	} else {

		// If no content, include the "No posts found" template.
		get_template_part( 'template-parts/content', 'none' );

	}
?>
   
<?php get_footer();
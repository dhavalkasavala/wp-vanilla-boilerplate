<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wp-vanilla' ); ?></a>

		<nav class="flex items-center justify-between flex-wrap bg-teal p-6">
			  <div class="flex items-center flex-no-shrink text-teal-lighter mr-6">
				
				<?php
				if ( has_custom_logo() ) :
					?>
						<div class="w-16 content-center"> <?php the_custom_logo(); ?> </div>
					<?php
				else :
					?>
					<span class="font-semibold text-xl tracking-tight">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</span>
					<?php
				endif;
				?>
			  </div>
			  <div class="block lg:hidden">
				<button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white menuToggle">
				  <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
				</button>
			  </div>
			  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto" id="menu-mainmenu">
				<div class="text-base lg:flex-grow">
					<?php

					if ( has_nav_menu( 'primary' ) ) {

						$menuParam = array(
							'menu'       => 'Primary',
							'container'  => false,
							'echo'       => false,
							'items_wrap' => '%3$s',
						);

						$output = strip_tags( wp_nav_menu( $menuParam ), '<a>' );
						$output = preg_replace( '/<a/', '<a class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-purple-600 mr-4"', $output );
						echo esc_html( $output );
					}
					?>
				</div>
			  </div>
		</nav>

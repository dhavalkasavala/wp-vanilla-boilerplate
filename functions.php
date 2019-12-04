<?php

/**
 * WP vanilla boilerplate only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) { 
	return;
}

if ( ! function_exists( 'wp_vanilla_setup' ) ) :

	function wp_vanilla_setup() {
		
		load_theme_textdomain( 'wp-vanilla', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'wp-vanilla' ),
				'footer' => __( 'Footer Menu', 'wp-vanilla' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}

endif;

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function wp_vanilla_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'wp_vanilla_content_width', 650 );
}
add_action( 'after_setup_theme', 'wp_vanilla_content_width', 0 );

function twentynineteen_scripts() {
	wp_enqueue_style( 'wp-vanilla-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_enqueue_style('wp-vanilla-main-style',get_template_directory().'/assets/sass/app.css');

	if ( has_nav_menu( 'menu-1' ) ) {
		wp_enqueue_script( 'wp-vanilla-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '', true );
	}

	wp_enqueue_script( 'wp-vanilla-skip-links-js', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '', true );
	
	wp_enqueue_style('wp-vanilla-main-js',get_template_directory().'/assets/js/app.js');	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );


/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function wp_vanilla_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'wp_vanilla_skip_link_focus_fix' );
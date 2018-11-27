<?php
/**
 * Theme: Twenty Nineteen Flat
 * 
 * This is a child theme of the WordPress Twenty Nineteen theme. This allows us
 * to add more features to the theme as well as adjust the look and feel of it. It is 
 * called "Flat" becuase the theme defines a nice rich color palette for building
 * sites with colored sections and doesn't use gradients which equate to what is 
 * referred to as a "flat style" look.
 *
 * @package twenty-nineteen-flat
 */
 
/**
 * REPLACE PARENT THEME SETUP
 *
 * Most of this is from the original parent theme but we also load our own editor styles
 * and we have greatly expanded the color paletter in the editor. 
 */ 
function twentynineteen_setup() {

	/* All of this is from the original theme and has not been touched */

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Nineteen, use a find and replace
	 * to change 'twentynineteen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1568, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'twentynineteen' ),
			'social' => __( 'Social Links Menu', 'twentynineteen' ),
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
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
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

	// Add support for Block Styles
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	//add_theme_support( 'align-wide' );
	remove_theme_support( 'align-wide' ); //TEST
	
	// Add support for editor styles
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles
	add_editor_style( 'style-editor.css' );

	/* This is where we have modified and/or added to the parent theme's function */

	/* This was added. Load our own editor styles on top of the parent's */
	//add_editor_style( 'style-editor.css' );

	/* This was changed to add our huge color palette */
	add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => esc_html__( 'Primary Color', 'twentynineteen' ),
				'slug'  => 'primary',
				'color' => twentynineteen_hsl_hex( absint( get_theme_mod( 'colorscheme_hue', 199 ) ), 100, 33 ),
			),
			array(
				'name' => __( 'White', 'flat-bootstrap' ),
				'slug' => 'white',
				'color' => '#fff',
			),
			array(
				'name' => __( 'Offwhite', 'flat-bootstrap' ),
				'slug' => 'offwhite',
				'color' => '#f2f2f2',
			),
			array(
				'name' => __( 'Light Gray', 'flat-bootstrap' ),
				'slug' => 'lightgray',
				'color' => '#ebebeb',
			),
			array(
				'name' => __( 'Gray', 'flat-bootstrap' ),
				'slug' => 'gray',
				'color' => '#e7e7e7',
			),
			array(
				'name' => __( 'Dark Gray', 'flat-bootstrap' ),
				'slug' => 'darkgray',
				'color' => '#e0e0e0',
			),
			array(
				'name' => __( 'Light Green', 'flat-bootstrap' ),
				'slug' => 'lightgreen',
				'color' => '#1abc9c',
			),
			array(
				'name' => __( 'Dark Green', 'flat-bootstrap' ),
				'slug' => 'darkgreen',
				'color' => '#16a085',
			),
			array(
				'name' => __( 'Bright Green', 'flat-bootstrap' ),
				'slug' => 'brightgreen',
				'color' => '#2ecc71',
			),
			array(
				'name' => __( 'Dark Bright Green', 'flat-bootstrap' ),
				'slug' => 'darkbrightgreen',
				'color' => '#27ae60',
			),
			array(
				'name' => __( 'Yellow', 'flat-bootstrap' ),
				'slug' => 'yellow',
				'color' => '#f1c40f',
			),
			array(
				'name' => __( 'Light Orange', 'flat-bootstrap' ),
				'slug' => 'lightorange',
				'color' => '#f39c12',
			),
			array(
				'name' => __( 'Orange', 'flat-bootstrap' ),
				'slug' => 'orange',
				'color' => '#e67e22',
			),
			array(
				'name' => __( 'Dark Orange', 'flat-bootstrap' ),
				'slug' => 'darkorange',
				'color' => '#d35400',
			),
			array(
				'name' => __( 'Blue', 'flat-bootstrap' ),
				'slug' => 'blue',
				'color' => '#3498db',
			),
			array(
				'name' => __( 'Dark Blue', 'flat-bootstrap' ),
				'slug' => 'darkblue',
				'color' => '#2980b9',
			),
			array(
				'name' => __( 'Midnight Blue', 'flat-bootstrap' ),
				'slug' => 'midnightblue',
				'color' => '#34495e',
			),
			array(
				'name' => __( 'Dark Midnight Blue', 'flat-bootstrap' ),
				'slug' => 'darkmidnightblue',
				'color' => '#2c3e50',
			),
			array(
				'name' => __( 'Purple', 'flat-bootstrap' ),
				'slug' => 'purple',
				'color' => '#9b59b6',
			),
			array(
				'name' => __( 'Dark Purple', 'flat-bootstrap' ),
				'slug' => 'darkpurple',
				'color' => '#8e44ad',
			),
			array(
				'name' => __( 'Red', 'flat-bootstrap' ),
				'slug' => 'red',
				'color' => '#ff7878',
			),
			array(
				'name' => __( 'Bright Red', 'flat-bootstrap' ),
				'slug' => 'brightred',
				'color' => '#e74c3c',
			),
			array(
				'name' => __( 'Dark Red', 'flat-bootstrap' ),
				'slug' => 'darkred',
				'color' => '#c0392b',
			),
			array(
				'name' => __( 'Almost Black', 'flat-bootstrap' ),
				'slug' => 'almostblack',
				'color' => '#2f2f2f',
			),
			array(
				'name' => __( 'Not Quite Black', 'flat-bootstrap' ),
				'slug' => 'notquiteblack',
				'color' => '#222',
			),
			array(
				'name' => __( 'Black', 'flat-bootstrap' ),
				'slug' => 'black',
				'color' => '#000',
			),
		) );

} //endfunction


/* 
 * Load the parent theme's stylesheet and ours here for performance reasons instead of
 * using @includes. 
 */
/*
 * Parent theme only shows full-screen featured image as header on single pages, but we
 * want it on the blog page if the home page is set to a page.
 */
add_action( 'wp_enqueue_scripts', 'xstnf_child_enqueue_styles', 5 );
function xstnf_child_enqueue_styles() {
	wp_enqueue_style( 'twentynineteen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'twentynineteen-flat', get_stylesheet_directory_uri() . '/style.css' );
	//echo 'Loading our inline style for background image...'; //TEST
	//echo 'twentynineteen_can_show_post_thumbnail={' . twentynineteen_can_show_post_thumbnail() . '}'; //TEST
	if ( twentynineteen_can_show_post_thumbnail() ) {
		//echo '<pre>' . twentynineteen_header_featured_image_css() . '</pre>'; //TEST
		wp_add_inline_style( 'twentynineteen-flat', twentynineteen_header_featured_image_css() );
	}	
} //endfunction

/*
 * Override this function so that if blog is assigned to a page, then get the featured
 * image from there.
 */
function twentynineteen_header_featured_image_css() {
	//echo sprintf('<p>is_home="{%s}"; is_front_page="{%s}"</p>', is_home(), is_front_page()); //TEST
	if ( is_home() AND ! is_front_page() ) {
		//echo '<p>Looking for blog page featured image.</p>'; //TEST
		$post = get_post( get_option ( 'page_for_posts' ) );
		//var_dump ( $post ); //TEST
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
		$img_url = $image[0];
		return sprintf( 'body .site-header.featured-image .site-branding-container:before { background-image: url(%s); }', esc_url( $img_url ) );
	} elseif ( is_singular() ) {
		$img_url = get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' );
		return sprintf( 'body.singular .site-header.featured-image .site-branding-container:before { background-image: url(%s); }', esc_url( $img_url ) );
	}
	//echo "<br><pre>img_url:<br>"; var_dump ($img_url); echo "</pre>";//TEST	
}

/* 
 * Add custom color CSS to the footer area as well
 */

add_filter ( 'twentynineteen_custom_colors_css', 'xstnf_custom_colors_css', 10, 3 );
function xstnf_custom_colors_css ( $css, $primary_color, $saturation ) {

	if ($primary_color) {
		$css .= "
		.site-footer {
			background-color: hsl({$primary_color}, {$saturation}, 33%);
			color: white;
		}
		.site-footer > * {
			color: white;
		}
		.site-footer > * {
			color: white;
		}
		.site-footer a,
		.site-footer a:visited {
			color: lightgray;
		}
		.site-footer a:hover {
			color: darkgray;
		}
		.site-footer ul li > a,
		.site-footer ul li > a:visited {
			color: white;
		}
		.site-footer ul li > a:hover {
			color: lightgray;
		}
		.site-footer h1:not(.site-title):before, 
		.site-footer h2:before {
			background: white;
			/*color: white;
			border-color: white;*/
		}
		/*.site-info {
			background-color: hsl({$primary_color}, {$saturation}, 43%);
			color: lightgray; 
		}*/
		#colophon .site-info a {
			color: lightgray; 
		}
		#colophon .site-info a:hover {
			color: darkgray; 
		}
		";
	}
	//echo $css; //TEST
	return $css;

} //endfunction

/**
 * Enqueue block editor JavaScript and CSS
*/
add_action( 'enqueue_block_editor_assets', 'jsforwpblocks_editor_scripts' );
function jsforwpblocks_editor_scripts() {

  // Make paths variables so we don't write em twice ;)
  //$blockPath = get_stylesheet_directory() . 'functions.js';
  //$editorStylePath = '/assets/css/blocks.editor.css';

  // Enqueue the bundled block JS file
  /*wp_enqueue_script(
    'functions-js',
    plugins_url( $blockPath, __FILE__ ),
    [  'wp-blocks', 'wp-element', 'wp-components', 'wp-i18n' ],
    filemtime( plugin_dir_path( __FILE__ ) . $blockPath )
  );*/

	wp_enqueue_script( 'functions-js', get_stylesheet_directory_uri() . '/functions.js', array('wp-blocks', 'wp-element', 'wp-components', 'wp-i18n'), '1.0', true );


  // Enqueue optional editor only styles
  /*wp_enqueue_style(
    'jsforwp-blocks-editor-css',
    plugins_url($editorStylePath, __FILE__),
    [  'wp-blocks', 'wp-element', 'wp-components', 'wp-i18n' ],
    filemtime( plugin_dir_path( __FILE__ ) . $editorStylePath )
  );*/
} //endfunction

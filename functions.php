<?php
/**
 * Ancla functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ancla
 */

if ( ! function_exists( 'ancla_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ancla_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Ancla, use a find and replace
	 * to change 'ancla' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ancla', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'ancla' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ancla_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'ancla_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ancla_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ancla_content_width', 640 );
}
add_action( 'after_setup_theme', 'ancla_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ancla_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ancla' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ancla' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ancla_widgets_init' );

/**
 * @param $html
 * @param $post_id
 * @param $post_image_id
 * Remove hardcoded width and height on thumbnail images
 * @return mixed
 */
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

/**
 * @param $user_contact
 * @return mixed
 * Add contact methods to users
 */
function modify_user_contact_methods( $user_contact ) {

    // Add user contact methods
    $user_contact['youtube_url']   = __( 'YouTube Channel Url' );
    $user_contact['twitter'] = __( 'Twitter Username' );

    // Remove user contact methods
//    unset( $user_contact['aim']    );
//    unset( $user_contact['jabber'] );

    return $user_contact;
}
add_filter( 'user_contactmethods', 'modify_user_contact_methods' );


/**
 * Remove archive title prefix
 */
// Simply remove anything that looks like an archive title prefix ("Archive:", "Foo:", "Bar:").
add_filter('get_the_archive_title', function ($title) {

    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }

    return preg_replace('/^\w+: /', '', $title);
});

/**
 * Implement custom comments mark up
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Theme's custom widgets
 */
require get_template_directory() . '/inc/custom-widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue-js.php';
require get_template_directory() . '/inc/enqueue-css.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

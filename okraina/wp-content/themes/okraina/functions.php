<?php
/**
 * okraina functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package okraina
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'okraina_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function okraina_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on okraina, use a find and replace
		 * to change 'okraina' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'okraina', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'okraina' ),
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
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'okraina_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'okraina_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function okraina_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'okraina_content_width', 640 );
}
add_action( 'after_setup_theme', 'okraina_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function okraina_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Phone_header', 'okraina' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'okraina' ),
			'before_widget' => '<div class="flex_number">',
			'after_widget'  => '</div>'
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Phone_fotter_1', 'okraina' ),
			'id'            => 'phone-fotter-1',
			'description'   => esc_html__( 'Add widgets here.', 'okraina' ),
			'before_widget' => '<div class="flex_number">',
			'after_widget'  => '</div>'
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Phone_fotter_2', 'okraina' ),
			'id'            => 'phone-fotter-2',
			'description'   => esc_html__( 'Add widgets here.', 'okraina' ),
			'before_widget' => '<div class="flex_number">',
			'after_widget'  => '</div>'
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Mail_fotter', 'okraina' ),
			'id'            => 'mail-fotter',
			'description'   => esc_html__( 'Add widgets here.', 'okraina' ),
			'before_widget' => '<div class="flex_number">',
			'after_widget'  => '</div>'
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Phone_fotter_3', 'okraina' ),
			'id'            => 'phone-fotter-3',
			'description'   => esc_html__( 'Add widgets here.', 'okraina' ),
			'before_widget' => '<div class="flex_number">',
			'after_widget'  => '</div>'
		)
	);
}
add_action( 'widgets_init', 'okraina_widgets_init' );

remove_filter( 'widget_text_content', 'wpautop' );
/**
 * Enqueue scripts and styles.
 */
function okraina_scripts() {
	wp_enqueue_style( 'okraina-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'okraina-style', 'rtl', 'replace' );

	wp_enqueue_script( 'okraina-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'okraina_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Register and load the widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
 
// Creating the widget 
class wpb_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget', 
 
// Widget name will appear in UI
__('WPBeginner Widget', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output
echo __( 'Hello, World!', 'wpb_widget_domain' );
echo $args['after_widget'];
}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
 
 
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
 
 
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here
add_filter( 'excerpt_length', function(){
	return 20;
} );
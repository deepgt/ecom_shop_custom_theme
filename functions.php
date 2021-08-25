<?php 


//for css
function load_stylesheets(){
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css', '',"1.0", 'all');
    wp_enqueue_style('custom', get_template_directory_uri(). '/assets/css/app.css', '','1.0', 'all'); 
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/third-party/fonts/font-awesome/css/font-awesome.css', '', "1.0.0" );    
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

//for javascripts
function load_javascript(){
    wp_register_script('custom', get_template_directory_uri(). './assets/js/app.js', 'jquery', true);
    wp_enqueue_script('custom');

	wp_register_script('auto-complete', get_template_directory_uri(). './inc/js/woocommerce.js', 'jquery', true);
    wp_enqueue_script('auto-complete');

	wp_enqueue_script("jquery-effects-core",array( 'jquery' ));
    wp_enqueue_script( 'jquery-ui-autocomplete',array( 'jquery' ),'1.0.0',true );
}

add_action('wp_enqueue_scripts', 'load_javascript');

/*
    load init
*/
define( 'CUSTOM_THEME_DIR', get_template_directory() . '/' );
require_once trailingslashit(CUSTOM_THEME_DIR).'inc/init.php';


//menu
//add menu
add_theme_support('menus');

//register some menu
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
    )
);

//support
		add_theme_support('post-thumbnails');
		
		add_theme_support( 'title-tag' );
		
		add_theme_support( 'post-thumbnails' );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'woocommerce' );
	
		// Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style-editor.css' );
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		// Add support for Custom Header.
		add_theme_support( 'custom-header', 

		apply_filters( 'custom_header_args', array(
				'default-image' => '',
				'flex-height'   => true,
				'header-text'   => false,
				'video'          => false,
		) 
		) );


//image size
add_image_size('post_image', 1000, 1000, false);


/*
 * Register widget area.
 */
function custom_widgets_init(){
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'custom' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your primary sidebar.', 'custom' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="custom-widget-content">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar', 'custom' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your secondary sidebar.', 'custom' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="custom-widget-content">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'WooCommerce Sidebar', 'custom' ),
		'id'            => 'custom-woo-shop-sidebar',
		'description'   => esc_html__( 'Add widgets here to appear in your WooCommerce Sidebar.', 'custom' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="custom-widget-content">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Top First Widget', 'custom' ),
		'id'            => 'footer-top-first',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'custom' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Top Second Widget', 'custom' ),
		'id'            => 'footer-top-second',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'custom' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Top Third Widget', 'custom' ),
		'id'            => 'footer-top-third',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'custom' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	}
add_action( 'widgets_init', 'custom_widgets_init' );


    //woocommerce
    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
    
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );




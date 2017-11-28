<?php
/**
 * BrF functions and definitions
 *
 * @package BrF
 */

function brf_setup() {
    
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', null, '1.0', 'all' );
    
    /*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages, and custom
     * image sizes
	 */
	add_theme_support( 'post-thumbnails' );
    
    add_image_size( 'brf-featured-image', 2000, 1200, true );

	add_image_size( 'brf-thumbnail-avatar', 100, 100, true );
    
    add_image_size( 'brf-post-image', 400, 300, true );

	// This theme uses wp_nav_menu() in two location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'brf' ),
	) );
    
    register_nav_menus( array(
		'header' => esc_html__( 'Header', 'brf' ),
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
    
    // Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );
    
    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    
    // This theme uses wp_nav_menu() in two(three) location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'brf' ),
	) );
    
    register_nav_menus( array(
		'header' => esc_html__( 'Header', 'brf' ),
	) );
    
    register_nav_menus( array(
		'footer' => esc_html__( 'Footer', 'brf' ),
	) );
    
}

add_action( 'after_setup_theme', 'brf_setup' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function brf_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Start Sida', 'brf' ),
		'id'            => 'front-sidebar',
		'description'   => esc_html__( 'Sidebar för startsidan.', 'brf' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Nyheter', 'brf' ),
		'id'            => 'header-sidebar',
		'description'   => esc_html__( 'Sidebar för nyheter.', 'brf' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Kontakt', 'brf' ),
        'id'            => 'home-sidebar',
        'description'   => esc_html__( 'Sidebar för kontakt', 'brf' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer', 'brf' ),
        'id'            => 'footer-sidebar',
        'description'   => esc_html__( 'Sidebar för footer', 'brf' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'brf_widgets_init' );

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<div style="overflow:hidden;"><a class="read-more" href="%1$s">%2$s »</a></div>',
        get_permalink( get_the_ID() ),
        __( 'Läs mer', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );






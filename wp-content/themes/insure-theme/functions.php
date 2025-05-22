<?php
/**
 * Insure Theme functions and definitions
 *
 * @package Insure_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Define theme constants
define( 'INSURE_THEME_VERSION', '1.0.0' );
define( 'INSURE_THEME_DIR', get_template_directory() );
define( 'INSURE_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup
 */
function insure_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Add custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'insure-theme' ),
        'footer'  => esc_html__( 'Footer Menu', 'insure-theme' ),
    ) );

    // HTML5 support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'init', 'insure_theme_disable_emojis' );

/**
 * Add WebP support for better performance
 */
function insure_theme_webp_support() {
    add_filter( 'upload_mimes', function( $mimes ) {
        $mimes['webp'] = 'image/webp';
        return $mimes;
    });
}
add_action( 'init', 'insure_theme_webp_support' );

/**
 * Add custom meta tags for SEO
 */
function insure_theme_meta_tags() {
    echo '<meta name="description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '">';
    echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
    echo '<meta property="og:description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '">';
    echo '<meta property="og:type" content="website">';
    echo '<meta property="og:url" content="' . esc_url( home_url( '/' ) ) . '">';
    echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
    
    // Add custom thumbnail if available
    if ( has_custom_logo() ) {
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo_image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
        if ( $logo_image ) {
            echo '<meta property="og:image" content="' . esc_url( $logo_image[0] ) . '">';
        }
    }
}
add_action( 'wp_head', 'insure_theme_meta_tags' );
add_action( 'after_setup_theme', 'insure_theme_setup' );


/**
 * Enqueue scripts and styles.
 */
function insure_theme_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style(
        'insure-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        INSURE_THEME_VERSION
    );

    // Enqueue Font Awesome for icons
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css',
        array(),
        '6.0.0'
    );

    // Main stylesheet
    wp_enqueue_style(
        'insure-theme-style',
        get_stylesheet_uri(),
        array(),
        INSURE_THEME_VERSION
    );

    // Main JavaScript
    wp_enqueue_script(
        'insure-theme-main',
        INSURE_THEME_URI . '/assets/js/main.js',
        array( 'jquery' ),
        INSURE_THEME_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'insure_theme_scripts' );

/**
 * Register widget area.
 */
function insure_theme_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widgets', 'insure-theme' ),
        'id'            => 'footer-widgets',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'insure-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'insure_theme_widgets_init' );

/**
 * Optimize images for better performance
 */
function insure_theme_optimize_images( $content ) {
    // Add loading="lazy" to all images in content
    if ( ! is_admin() ) {
        $content = preg_replace( '/<img(.*?)>/i', '<img$1 loading="lazy">', $content );
    }
    return $content;
}
add_filter( 'the_content', 'insure_theme_optimize_images' );

/**
 * Add async/defer attributes to scripts for better performance
 */
function insure_theme_script_attributes( $tag, $handle ) {
    // Add async attribute to non-critical scripts
    $scripts_to_async = array( 'insure-theme-carousel' );
    foreach( $scripts_to_async as $async_script ) {
        if ( $async_script === $handle ) {
            return str_replace( ' src', ' async src', $tag );
        }
    }
    
    return $tag;
}
add_filter( 'script_loader_tag', 'insure_theme_script_attributes', 10, 2 );

/**
 * Add preconnect for external resources
 */
function insure_theme_resource_hints( $hints, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        // Add preconnect for Google Fonts
        $hints[] = array(
            'href' => 'https://fonts.googleapis.com',
        );
        $hints[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
        // Add preconnect for Font Awesome
        $hints[] = array(
            'href' => 'https://cdnjs.cloudflare.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $hints;
}
add_filter( 'wp_resource_hints', 'insure_theme_resource_hints', 10, 2 );

/**
 * Define image sizes
 */
function insure_theme_add_image_sizes() {
    add_image_size( 'insure-polaroid', 300, 400, true );
    add_image_size( 'insure-carousel', 600, 800, true );
    add_image_size( 'insure-benefit-icon', 80, 80, true );
}
add_action( 'after_setup_theme', 'insure_theme_add_image_sizes' );

/**
 * Add Schema markup for better SEO
 */
function insure_theme_html_schema() {
    $schema = 'https://schema.org/';
    
    // Check what type of page we're on
    if ( is_front_page() ) {
        $type = 'WebPage';
    } elseif ( is_singular( 'post' ) ) {
        $type = 'Article';
    } else {
        $type = 'WebPage';
    }
    
    echo 'itemscope itemtype="' . $schema . $type . '"';
}

/**
 * Disable emojis for better performance
 */
function insure_theme_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'insure_theme_disable_emojis' );

function theme_enqueue_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


function enqueue_swiper_assets() {
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_assets' );
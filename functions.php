<?php
/**
 * speed1b functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */
if (!function_exists('speed1b_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function speed1b_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on speed1b, use a find and replace
     * to change 'speed1b' to the name of your theme in all the template files.
     */
    load_theme_textdomain('speed1b', get_template_directory().'/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'primary' => esc_html__('Primary', 'speed1b'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('speed1b_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    )));

    // * foundation menu - top-bar
    register_nav_menu('topbar-menu', __('Top Bar Menu', 'speed1b'));

    // * footer menu - szolgaltatasok
    register_nav_menu('footer-szolg-menu', __('Footer Szolg Menu', 'speed1b'));

    // * footer menu - termékek
    register_nav_menu('footer-termekek-menu', __('Footer Termekek Menu', 'speed1b'));
}
endif;
add_action('after_setup_theme', 'speed1b_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function speed1b_content_width()
{
    $GLOBALS['content_width'] = apply_filters('speed1b_content_width', 640);
}
add_action('after_setup_theme', 'speed1b_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function speed1b_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'speed1b'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'speed1b'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'speed1b_widgets_init');

function speed1b_main_widget()
{
    register_sidebar(array(
        'name' => esc_html__('main_widget', 'speed1b'),
        'id' => 'main_widget',
        'description' => esc_html__('Add widgets here.', 'speed1b'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'speed1b_main_widget');

function speed1b_offcanvas_widget()
{
    register_sidebar(array(
        'name' => esc_html__('offcanvas_widget', 'speed1b'),
        'id' => 'offcanvas_widget',
        'description' => esc_html__('Add widgets here.', 'speed1b'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'speed1b_offcanvas_widget');

function speed1b_woosidebar_widget()
{
    register_sidebar(array(
        'name' => esc_html__('woosidebar_widget', 'speed1b'),
        'id' => 'woosidebar_widget',
        'description' => esc_html__('Add widgets here.', 'speed1b'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'speed1b_woosidebar_widget');

/**
 * Enqueue scripts and styles.
 */
function speed1b_scripts()
{
    wp_enqueue_style('speed1b-normalize', get_template_directory_uri().'/dev/normalize.css');

    wp_enqueue_style('speed1b-zurb', get_template_directory_uri().'/dev/zurb/css/app.css');

    wp_enqueue_style('speed1b-main-style', get_template_directory_uri().'/dev/main.css');

    wp_enqueue_script('speed1b-jquery', get_template_directory_uri().'/dev/zurb/bower_components/jquery/dist/jquery.min.js');

    wp_enqueue_script('speed1b-f6_main_script', get_template_directory_uri().'/dev/zurb/bower_components/foundation-sites/dist/foundation.min.js');

    wp_enqueue_script('speed1b-skip-link-focus-fix', get_template_directory_uri().'/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'speed1b_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory().'/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory().'/inc/template-tags.php';

/**
 * zurb navigation walker.
 */
require get_template_directory().'/inc/zurb-menu-walkers.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory().'/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory().'/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory().'/inc/jetpack.php';

/**
 * woocommerce functions.
 */
require get_template_directory().'/inc/woocommerce.php';

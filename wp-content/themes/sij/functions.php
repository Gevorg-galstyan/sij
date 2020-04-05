<?php
/**
 * Sij functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Sij
 * @since 1.0.0
 */

// Путь к шаблону
function getTD()
{
    return get_template_directory_uri();
}

function sij_theme_support()
{

    // Add default posts and comments RSS feed links to head.
    // add_theme_support( 'automatic-feed-links' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    // Set post thumbnail size.
    set_post_thumbnail_size(1200, 9999);

    // Add custom image size used in Cover Template.
    // add_image_size( 'sij-fullscreen', 1980, 9999 );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

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

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Twenty Twenty, use a find and replace
     * to change 'sij' to the name of your theme in all the template files.
     */
    load_theme_textdomain('sij');

    // Add support for full and wide align images.
    add_theme_support('align-wide');

}

add_action('after_setup_theme', 'sij_theme_support');

/**
 * Register and Enqueue Styles.
 */
function sij_register_styles()
{
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('sij-style', get_stylesheet_uri(), array(), $theme_version, );
}

add_action('get_footer', 'sij_register_styles');

/**
 * Register and Enqueue Scripts.
 */
function sij_register_scripts()
{

    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_script('sij-js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), $theme_version, false);
    wp_script_add_data('sij-js', 'defer', true);

}

add_action('wp_enqueue_scripts', 'sij_register_scripts');

// Отключаем скрипт встраивания контента
function my_deregister_scripts()
{
    wp_deregister_script('wp-embed');
}
// add_action('wp_footer', 'my_deregister_scripts');

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function sij_menus()
{

    $locations = array(
        'primary' => __('Главное меню', 'sij'),
    );

    register_nav_menus($locations);
}

add_action('init', 'sij_menus');

// Форматирование номера телефона
function prettyPhone($phone)
{
    if (preg_match('/^\+\d(\d{3})(\d{3})(\d{2})(\d{2})$/', $phone, $matches)) {
        $result = '8 (' . $matches[1] . ') ' . $matches[2] . '-' . $matches[3] . '-' . $matches[4];
        return $result;
    } else {
        return $phone;
    }
}

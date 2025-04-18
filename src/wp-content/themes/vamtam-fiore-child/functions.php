<?php

/*
 * Define Variables
 */
if (!defined('THEME_DIR'))
    define('THEME_DIR', get_template_directory());
if (!defined('THEME_URL'))
    define('THEME_URL', get_template_directory_uri());



// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

function child_styles()
{
    wp_enqueue_style('my-child-theme-style', get_stylesheet_directory_uri() . '/style.css', array('vamtam-front-all'), false, 'all');
}

add_action('wp_enqueue_scripts', 'child_styles', 11);
/*
 * Include framework files
 */
foreach (glob(THEME_DIR . '-child' . "/includes/*.php") as $file_name) {
    require_once($file_name);
}

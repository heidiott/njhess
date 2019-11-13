<?php
  // Load HTML5 Blank styles
function njhess_styles()
{
    wp_register_style('njhess_main_styles', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('njhess_main_styles'); 
}
  
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

function njhess_script() {
  wp_register_script('njhess_nav_scripts', home_url() . '/wp-content/themes/njhess/scripts/nav.js', array( 'jquery' ));
  wp_enqueue_script('njhess_nav_scripts');
}  

function njhess_features() {
  add_theme_support('title_tag');
  add_image_size('homeBlock', 570, 570, true );
}

add_action( 'init', 'register_my_menu' );
add_action( 'wp_enqueue_scripts', 'njhess_script' );
add_action('wp_enqueue_scripts', 'njhess_styles'); // Add Theme Stylesheet
add_action('after_setup_theme', 'njhess_features');


?>
 
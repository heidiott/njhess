<?php
function njhess_post_types() {
  register_post_type('home_blocks', array(
    'supports' => array('title', 'editor'),
    'public' => true,
    'exclude_from_search' => true,
    'show_in_nav_menus' => false,
    'menu_icon' => 'dashicons-admin-home',
    'labels' => array(
      'name' => 'Home Block',
      'add_new_item' => 'Add New Home Block',
      'edit_item' => 'Edit Home Block',
      'all_items' => 'All Home Blocks',
      'singular_name' => 'Home Block'
    )
  ));

  register_post_type('sticky_situations', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'sticky-situations'),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-video-alt',
    'labels' => array(
      'name' => 'Sticky Situations',
      'add_new_item' => 'Add New Sticky Situation',
      'edit_item' => 'Edit Sticky Situation',
      'all_items' => 'All Sticky Situations',
      'singular_name' => 'Sticky Situation'
    )
  ));
}

add_action( 'init', 'njhess_post_types');

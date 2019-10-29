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
}

add_action( 'init', 'njhess_post_types');

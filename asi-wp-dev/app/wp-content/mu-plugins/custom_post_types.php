<?php

function custom_post_types() {

  // Note Post Type
  register_post_type('note', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'public' => false,
    'show_ui' => true,
    'labels' => array(
      'name' => 'Notes',
      'add_new_item' => 'Add New Note',
      'edit_item' => 'Edit Note',
      'all_items' => 'All Notes',
      'singular_name' => 'Note'
    ),
    'menu_icon' => 'dashicons-welcome-write-blog'
  ));


}

add_action('init', 'custom_post_types');
<?php 

function create_course_post_type () {
  $args = array(
    'labels' => array(
      'name'               => __('Courses', 'mytheme'),
      'singular_name'      => __('Course', 'mytheme'),
      'add_new'            => __('Add New Course', 'mytheme'),
      'add_new_item'       => __('Add New Course', 'mytheme'),
    ),
    'public' => true,
    'has_archive' => true,
    'hierarchical'       => false,
    'menu_icon' => 'dashicons-welcome-learn-more',
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    // 'rewrite' => array('slug' => __('our-courses')),
    'show_in_rest' => true,
  );

  register_post_type('courses', $args);
}

add_action('init', 'create_course_post_type');
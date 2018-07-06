<?php
// Creates Custom Post Type
function app_init() {
    $args = array(
      'label' => 'App',
      	'show_in_rest' => true,
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'app-info'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-site',
        'supports' => array(
            'title',
            'editor',
            'custom-fields',)
        );
    register_post_type( 'app', $args );
}
add_action( 'init', 'app_init' );

<?php
/**
 * Plugin Name: Carmen Content Types
 * Description: Registers custom post types and fields independent of any theme, so content survives theme switches.
 * Version: 1.0
 * Author: Your Name
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * REGISTER CUSTOM POST TYPE: SERVICE
 */
function register_service_post_type() {
    register_post_type( 'service', array(
        'labels' => array(
            'name'          => 'Services',
            'singular_name' => 'Service',
            'add_new_item'  => 'Add New Service',
            'edit_item'     => 'Edit Service',
        ),
        'public'       => true,
        'has_archive'  => false,
        'rewrite'      => array( 'slug' => 'services' ),
        'menu_icon'    => 'dashicons-hammer',
        'supports'     => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'show_in_rest' => true,
    ) );
}
add_action( 'init', 'register_service_post_type' );

/**
 * REGISTER CUSTOM POST TYPE: FOOTER TAG
 */
function register_footer_tag_post_type() {
    register_post_type( 'footer_tag', array(
        'labels' => array(
            'name'          => 'Footer Tags',
            'singular_name' => 'Footer Tag',
            'add_new_item'  => 'Add New Footer Tag',
            'edit_item'     => 'Edit Footer Tag',
        ),
        'public'       => false,
        'show_ui'      => true,
        'supports'     => array( 'title', 'page-attributes' ),
        'menu_icon'    => 'dashicons-tag',
        'show_in_rest' => true,
    ) );
}
add_action( 'init', 'register_footer_tag_post_type' );

<?php 

function create_custom_taxonomy() {
    $labels = array(
        'name'              => __( 'Department', 'text-domain' ),
        'singular_name'     => __( 'Department', 'text-domain' ),
        'search_items'      => __( 'Search Departments', 'text-domain' ),
        'all_items'         => __( 'All Departments', 'text-domain' ),
        'parent_item'       => __( 'Parent Department', 'text-domain' ),
        'parent_item_colon' => __( 'Parent Department:', 'text-domain' ),
        'edit_item'         => __( 'Edit Department', 'text-domain' ),
        'update_item'       => __( 'Update Department', 'text-domain' ),
        'add_new_item'      => __( 'Add New Department', 'text-domain' ),
        'new_item_name'     => __( 'New Department Name', 'text-domain' ),
        'menu_name'         => __( 'Departments', 'text-domain' ),
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'department' ),
    );

    register_taxonomy( 'department', array( 'professor', 'course' ), $args );
}
add_action( 'init', 'create_custom_taxonomy', 0 );

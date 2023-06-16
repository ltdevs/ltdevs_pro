<?php

    function addPosttypes(){

        // Projects
        register_post_type('project', array(
            'public' => true,
            'rewrite' => array(
                'slug' => 'projects'
            ),
            'supports' => array(
                'title', 'editor', 'thumbnail'
            ),
            'has_archive' => false,
            'labels' => array(
                'name' => 'Projects',
                'add_new_item' => 'Add New Project',
               
                'all_items' => 'All Projects',
                'singular_name' => 'Project'
            ),
            'taxonomies'  => array( 'category' ),
        ));

    }

    add_action('init', 'addPosttypes');

?>
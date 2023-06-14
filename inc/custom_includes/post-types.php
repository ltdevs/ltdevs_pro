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
            'has_archive' => true,
            'labels' => array(
                'name' => 'Projects',
                'add_new_item' => 'Add New Project',
               
                'all_items' => 'All Projects',
                'singular_name' => 'Project'
            ),
        ));

        // Services
        register_post_type('service', array(
            'public' => true,
            'rewrite' => array(
                'slug' => 'services'
            ),
            'supports' => array(
                'title', 'editor', 'thumbnail'
            ),
            'has_archive' => true,
            'labels' => array(
                'name' => 'Services',
                'add_new_item' => 'Add New Service',
               
                'all_items' => 'All Services',
                'singular_name' => 'Service'
            ),
        ));
        
        // Testimonials
        register_post_type('testimonial', array(
            'public' => true,
            'rewrite' => array(
                'slug' => 'testimonial'
            ),
            'supports' => array(
                'title', 'editor', 'thumbnail'
            ),
            'has_archive' => false,
            'labels' => array(
                'name' => 'Testimonials',
                'add_new_item' => 'Add New Testimonial',
               
                'all_items' => 'All Testimonials',
                'singular_name' => 'Testimonial'
            ),
        ));

    }

    add_action('init', 'addPosttypes');

?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package レナ_Devs_PRO
 */

 get_header();

 global $post;
 $page_slug=$post->post_name ? $post->post_name : 'home';
 
 while (have_posts()) : the_post();
 	get_template_part('template-parts/pages/page', $page_slug);
 endwhile; // End of the loop.
 
 get_footer();
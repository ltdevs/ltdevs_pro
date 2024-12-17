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

 global $post;
$page_slug = $post->post_name ? $post->post_name : 'home';

if ($page_slug == 'coming-soon') {
	get_header('coming-soon');
} else { 
	get_header();
}

 
 while (have_posts()) : the_post();
	 get_template_part('template-parts/pages/page', $page_slug);
 endwhile; // End of the loop.
 

if ($page_slug == 'coming-soon') {
	get_footer('coming-soon');
} else { 
	get_footer();
}

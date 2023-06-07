<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package レナ_Devs_PRO
 */

get_header(); 

$page = get_query_var( 'paged', 1 );

if ( have_posts() ) : 
	get_template_part( 'template-parts/archives/head/head', get_post_type() );
		
	/* Start the Loop */
	while ( have_posts() ) :
		the_post();

		/*
			* Include the Post-Type-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Type name) and that will be used instead.
			*/
		get_template_part( 'template-parts/archives/archive', get_post_type() );

	endwhile;
	
	get_template_part( 'template-parts/archives/tail/tail', get_post_type() );
		

else :
	
	get_template_part( 'template-parts/content', 'none' );
endif; ?>

<?php get_footer();

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package レナ_Devs_PRO
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<?php wp_nav_menu(
		array(
			'theme_location' 	=> 'menu-1',
			'menu_id'        	=> 'primary-menu-left',
			'container'       	=> 'div',
			'container_class' 	=> 'navbar-collapse collapse',
			'container_id'   	=> 'navbar-collapse-1',
			'menu_class'      	=> '',
			'menu_id'         	=> '',
			'echo'            	=> true,
			'before'          	=> '',
			'after'           	=> '',
			'link_before'     	=> '',
			'link_after'      	=> '',
			'items_wrap'      	=> '<ul class="nav navbar-nav">%3$s</ul>',
			'depth'           	=> 0,
			'walker'          	=> ''
		)
	);
?>
						
<?php the_custom_logo(); ?>
					
<?php global $post;
	if ($post->post_name !=='home') { ?>
		<!-- standard page banner -->
		<div>
			<h1><?php 
			if ($post->post_type == '' ){ 
				echo $post->post_type . 's'; 
			} else {
				echo $post->post_name; 
			} ?> </h1> 
		</div>
		<div class="breadcrumb">
			<?php custom_breadcrumbs(); ?>
		</div>      
					
	<?php } else { ?>
		<!-- home page banner -->
<?php } ?>
	
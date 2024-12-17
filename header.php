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

<!-- Page Wrap ===========================================-->
<div id="wrap"> 
  
	<!-- TOP BAR ===========================================-->
	<div class="top-bar light">
		<div class="container">
			<ul class="pull-left">
				<li><a href="index.html">Welcome To Our Medikal Center</a></li>
			</ul>
			
			<!-- SOCIAL ICONS ===========================================-->
			<ul class="social_icons">
				<li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
				<li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
				<li class="dribbble"><a href="#."><i class="fa fa-dribbble"></i> </a></li>
				<li class="instagram"><a href="#."><i class="fa fa-instagram"></i> </a></li>
				<li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
				<li class="pinterest"><a href="#."><i class="fa fa-pinterest"></i> </a></li>
				<li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
			</ul>
		</div>
	</div>


	<!-- HEADER ===========================================-->
	<header>
		<div class="container"> 
			<!--======= LOGO =========-->
			<?php the_custom_logo(); ?>
			
			<!--======= NAVIGATION =========-->
			<nav class="webimenu"> 
				<!-- MENU BUTTON RESPONSIVE -->
				<div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>
				<ul class="ownmenu">
					<li class="active"><a href="index.html">Home</a>
						<ul class="dropdown animated-3s fadeIn">
						<li><a href="index.html">Home</a></li>
						<li><a href="index-1.html">Home Slider</a></li>
						<li><a href="index-2.html">Home 2</a></li>
						<li><a href="index-header.html">header 1</a></li>
						</ul>
					</li>
					<li><a href="02-about-us.html">About us </a>
						<ul class="dropdown animated-3s fadeIn">
						<li><a href="02-about-us.html">About</a></li>
						<li><a href="02-about-us-1.html">About 2</a></li>
						</ul>
					</li>
					<li><a href="services.html">SERVICES </a>
						<ul class="dropdown animated-3s fadeIn">
						<li><a href="services.html">SERVICES</a></li>
						<li><a href="services-1.html">SERVICES 2</a></li>
						</ul>
					</li>
					<li><a href="03-department.html">Department </a> </li>
					<li><a href="05-doctors.html">Gallery </a>
						<ul class="dropdown animated-3s fadeIn">
						<li><a href="gallery.html">GALLERY</a></li>
						<li><a href="gallery-2-col.html">GALLERY 2 col</a></li>
						<li><a href="gallery-3-col.html">GALLERY 3 col</a></li>
						<li><a href="gallery-4-col.html">GALLERY 4 col</a></li>
						</ul>
					</li>
					<li><a href="index.html">Pages</a> 
						<!--======= MEGA MENU =========-->
						<ul class="megamenu full-width animated-3s fadeIn">
						<li class="row nav-post">
							<div class="col-sm-6 boder-da-r">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="index-1.html">Home Slider</a></li>
								<li><a href="index-2.html">Home 2</a></li>
								<li><a href="index-header.html">header 1</a></li>
								<li><a href="appointment.html">Appointment</a></li>
								<li><a href="02-about-us.html">About</a></li>
								<li><a href="02-about-us-1.html">About 2</a></li>
								<li><a href="services.html">SERVICES</a></li>
								<li><a href="services-1.html">SERVICES 2</a></li>
								<li><a href="03-department.html">Department</a></li>
								<li><a href="04-department-detail.html">Department Detail</a></li>
								<li><a href="team.html">TEAM</a></li>
								<li><a href="05-doctors.html">Doctors</a></li>
								<li><a href="05-doctors-1.html">Doctors 2</a></li>
							</ul>
							</div>
							<div class="col-sm-6">
							<ul>
								<li><a href="gallery.html">GALLERY</a></li>
								<li><a href="gallery-2-col.html">GALLERY 2 col</a></li>
								<li><a href="gallery-3-col.html">GALLERY 3 col</a></li>
								<li><a href="gallery-4-col.html">GALLERY 4 col</a></li>
								<li><a href="07-timetable.html">Timetable</a></li>
								<li><a href="08-blog.html">Blog</a></li>
								<li><a href="09-blog-single.html">Blog Single</a></li>
								<li><a href="10-shop.html">Shop</a></li>
								<li><a href="11-product-detail.html">Product Detail</a></li>
								<li><a href="12-contact.html">Contact</a></li>
								<li><a href="shortcodes.html">Shortcodes</a></li>
								<li><a href="coming-soon.html">Coming Soon</a></li>
								<li><a href="404.html">404</a></li>
							</ul>
							</div>
						</li>
						</ul>
					</li>
					<li><a href="12-contact.html">Contact</a> </li>
				</ul>
			</nav>
			<!-- <nav class="webimenu">
				<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'menu-1',
							'menu_id'        	=> 'primary-menu-left',
							'container'       	=> 'div',
							'container_class' 	=> 'navbar-wrap main-menu d-none d-lg-flex',
							'container_id'   	=> '',
							'menu_class'      	=> '',
							'menu_id'         	=> '',
							'echo'            	=> true,
							'before'          	=> '',
							'after'           	=> '',
							'link_before'     	=> '',
							'link_after'      	=> '',
							'items_wrap'      	=> '<ul class="ownmenu">%3$s</ul>',
							'depth'           	=> 0,
							'walker'          	=> ''
						)
					);
				?>
			</nav> -->
		</div>
	</header>



  
<section class="sub-banner" data-stellar-background-ratio="0.5">
	<div class="overlay">
		<div class="container">
			<?php global $post;
				if ($post->post_name !=='home') { ?>
					<!-- standard page banner -->
					<div>
						<h3><?php 
						if ($post->post_type == '' ){ 
							echo $post->post_type . 's'; 
						} else {
							echo $post->post_name; 
						} ?> </h3> 
						<p>Meet our team of highly skilled professionals</p>
					</div>
					<?php custom_breadcrumbs(); ?>     
								
				<?php } else { ?>
					<!-- home page banner -->
					<!-- slider-area -->

					<!-- slider-area-end -->
			<?php } ?>
		</div>
    </div>
</section>


  <!--======= CONTENT =========-->
  <div class="content fix-nav-space"> 

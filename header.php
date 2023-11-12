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
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<!-- preloader -->
	<div id="preloader">
		<div id="loading-center">
			<div class="loader">
				<div class="loader-outter"></div>
				<div class="loader-inner"></div>
			</div>
		</div>
	</div>
	<!-- preloader-end -->

	<!-- Scroll-top -->
	<button class="scroll-top scroll-to-target" data-target="html">
		<i class="fas fa-angle-up"></i>
	</button>
	<!-- Scroll-top-end-->

	<!-- header-area -->
	<header class="transparent-header">
		<div class="header-top-wrap-two">
			<div class="container custom-container-three">
				<div class="header-top-wrap-inner">
					<div class="row align-items-center">
						<div class="col-lg-4">
							<div class="header-top-left-two">
								<div class="header-lang">
									<div class="dropdown">
										<button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false">
											English
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
											<a class="dropdown-item" href="index.html">Russia</a>
											<a class="dropdown-item" href="index.html">Spanish</a>
											<a class="dropdown-item" href="index.html">India</a>
										</div>
									</div>
								</div>
								<div class="header-top-social">
									<ul class="list-wrap">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="logo logo-two">
								<a href="index.html">
									<img src="<?php echo home_url()?>/img/logo/w_logo.png" alt="Logo">
									<div class="logo-shape">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 284 122" preserveAspectRatio="none">
											<path d="M818-1h284l-20,108a15,15,0,0,1-15,15H853a15,15,0,0,1-15-15Z" transform="translate(-818)" />
										</svg>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="header-top-right-two">
								<div class="header-action d-none d-md-block">
									<ul class="list-wrap">
										<li class="header-account">
											<a href="#"><i class="flaticon-account"></i></a>
										</li>
										<li class="header-search">
											<a href="#"><i class="flaticon-search"></i></a>
										</li>
										<li class="header-shop-cart">
											<a href="#"><i class="flaticon-shopping-basket"></i></a>
										</li>
										<li class="header-btn"><a href="tel:0123456789" class="btn">+1 333 555 999</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="sticky-header" class="menu-area menu-area-two">
			<div class="container custom-container-three">
				<div class="row">
					<div class="col-12">
						<div class="menu-wrap">
							<div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
							<div class="logo d-none">
								<?php the_custom_logo(); ?>
							</div>
							<div class="logo sticky-logo d-none">
								<?php the_custom_logo(); ?>
							</div>
							<nav class="menu-nav">
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
											'items_wrap'      	=> '<ul class="navigation">%3$s</ul>',
											'depth'           	=> 0,
											'walker'          	=> ''
										)
									);
								?>
								<!-- <div class="navbar-wrap main-menu d-none d-lg-flex">
									<ul class="navigation">
										<li class="active menu-item-has-children"><a href="#">Home</a>
											<ul class="sub-menu">
												<li><a href="index.html">Home One</a></li>
												<li class="active"><a href="index-2.html">Home Two</a></li>
												<li><a href="index-3.html">Home Three</a></li>
											</ul>
										</li>
										<li><a href="about.html">ABOUT US</a></li>
										<li class="menu-item-has-children"><a href="#">PRODUCTS</a>
											<ul class="sub-menu">
												<li><a href="shop.html">Shop One</a></li>
												<li><a href="shop-2.html">Shop Two</a></li>
												<li><a href="shop-details.html">Shop Details</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children"><a href="#">BLOG</a>
											<ul class="sub-menu">
												<li><a href="blog.html">Our Blog</a></li>
												<li><a href="blog-details.html">Blog Details</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children"><a href="#">PAGES</a>
											<ul class="sub-menu">
												<li><a href="services.html">Services Page</a></li>
												<li><a href="services-details.html">Services Details</a></li>
												<li><a href="team-details.html">Team Details</a></li>
											</ul>
										</li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div> -->
							</nav>
						</div>

						<!-- Mobile Menu  -->
						<div class="mobile-menu">
							<nav class="menu-box">
								<div class="close-btn"><i class="fas fa-times"></i></div>
								<div class="nav-logo">
									<?php the_custom_logo(); ?>
								</div>
								<div class="menu-outer">
									<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
								</div>
								<div class="social-links">
									<ul class="clearfix list-wrap">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="menu-backdrop"></div>
						<!-- End Mobile Menu -->

					</div>
				</div>
			</div>
		</div>

	</header>
	<!-- header-area-end -->


	<!-- main-area -->
	<main>
					
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
		<!-- slider-area -->
		<section class="slider-area">
			<div class="slider-active">
				<div class="single-slider slider-bg" data-background="assets/img/slider/slider_bg01.jpg">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="slider-content">
									<div class="slider-icon" data-animation-in="fadeInUp" data-delay-in=".2" data-duration-in=".6">
										<img src="assets/img/icons/slider_icon.png" alt="">
									</div>
									<h2 class="title" data-animation-in="fadeInUp" data-delay-in=".4" data-duration-in=".6">Fresh Meat</h2>
									<span class="sub-title" data-animation-in="fadeInUp" data-delay-in=".6" data-duration-in=".6">Butcher & Meat shop</span>
									<a href="shop.html" class="btn" data-animation-in="fadeInUp" data-delay-in=".8" data-duration-in=".6">order now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="single-slider slider-bg" data-background="assets/img/slider/slider_bg02.jpg">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="slider-content">
									<div class="slider-icon" data-animation-in="fadeInUp" data-delay-in=".2" data-duration-in=".6">
										<img src="assets/img/icons/slider_icon.png" alt="">
									</div>
									<h2 class="title" data-animation-in="fadeInUp" data-delay-in=".4" data-duration-in=".6">Fresh Meat</h2>
									<span class="sub-title" data-animation-in="fadeInUp" data-delay-in=".6" data-duration-in=".6">Butcher & Meat shop</span>
									<a href="shop.html" class="btn" data-animation-in="fadeInUp" data-delay-in=".8" data-duration-in=".6">order now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- slider-area-end -->
<?php } ?>
	
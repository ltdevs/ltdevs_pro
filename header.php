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
<?php  global $post; ?>
<body <?php body_class('royal_preloader'); ?>>
<?php wp_body_open(); ?>
	<div id="page" class="site">
        <!-- <header id="site-header" class="site-header header-style-1 header-overlay header-fullwidth sticky-header <?php echo $post->post_name !=='home' ? 'bg-banner-gradient particles-js':''; ?>"> -->
        <header id="site-header" class="site-header header-style-1 header-overlay header-fullwidth sticky-header bg-banner-gradient particles-js">
            <!-- Top bar start -->
            <div class="header-topbar">
                <div class="octf-area-wrap">
                    <div class="container">             
                        <!-- Header Topbar Menus -->
                        <div class="topbar_menu">
                            <ul id="menu-topbar-menu" class="menu clearfix">
                                <li><a href="<?php echo home_url('about')?>">About Us</a></li>
                                <li><a href="<?php echo home_url('faqs')?>">FAQ</a></li>
                            </ul>
                        </div>                        
                        <!-- contact info -->
                        <ul class="topbar-info clearfix">
                            <li><i class="flaticon-viber"></i> (+592) 650-1360 </li>
                            <li><i class="flaticon-envelope"></i> aurascapegy@gmail.com </li>
                        </ul>
                        <!-- contact info close -->    
                    </div>
                </div>
            </div>
            <!-- Top bar close -->   

            <!-- Main Header start -->
            <div class="octf-main-header">
                <div class="octf-area-wrap">
                    <div class="container-fluid octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <!-- logo start -->
                                <div class="octf-col">
                                    <div id="site-logo" class="site-logo">
                                        <!-- <a href="index.html">
                                            <img class="logo-static" src="images/logo-dark.svg" alt="Onum">
                                            <img class="logo-scroll" src="images/logo.svg" alt="Onum">
                                        </a> -->
										<?php the_custom_logo(); ?>
                                    </div>
                                </div>
                                <!-- logo start -->

                                <!-- nav start -->
                                <div class="octf-col">
                                    <?php wp_nav_menu(
                                            array(
                                                'theme_location' 	=> 'menu-1',
                                                'menu_id'        	=> 'primary-menu-left',
                                                'container'       	=> 'nav',
                                                'container_class' 	=> 'main-navigation',
                                                'container_id'   	=> 'site-navigation',
                                                'menu_class'      	=> '',
                                                'menu_id'         	=> '',
                                                'echo'            	=> true,
                                                'before'          	=> '',
                                                'after'           	=> '',
                                                'link_before'     	=> '',
                                                'link_after'      	=> '',
                                                'items_wrap'      	=> '<ul id="primary-menu" class="menu">%3$s</ul>',
                                                'depth'           	=> 0,
                                                'walker'          	=> ''
                                            )
                                        );
                                    ?>
                                </div>

                                <div class="octf-col text-right">
                                	<!-- Call To Action -->
                                    <div class="octf-btn-cta">                                                                      
                                        <div class="octf-header-module">
                                            <div class="btn-cta-group btn-cta-header">
                                                <a class="octf-btn octf-btn-third" href="<?php echo home_url('/contact/')?>">Contact Us</a>
                                            </div>
                                        </div>
                                    </div>                              
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header mobile -->
            <div class="header_mobile">
                <div class="container">
                    <div class="mlogo_wrapper clearfix">

                        <!-- logo mobile start -->
                        <div class="mobile_logo">
                            <?php the_custom_logo(); ?>
                        </div>
                        <!-- logo mobile end -->

                        <div id="mmenu_toggle">
                            <button></button>
                        </div>

                    </div>

                    <!-- nav mobile start -->
                    <div class="mmenu_wrapper">
                        <?php wp_nav_menu(
                                array(
                                    'theme_location' 	=> 'menu-1',
                                    'menu_id'        	=> 'primary-menu-left',
                                    'container'       	=> 'div',
                                    'container_class' 	=> 'mobile_nav',
                                    'container_id'   	=> '',
                                    'menu_class'      	=> '',
                                    'menu_id'         	=> '',
                                    'echo'            	=> true,
                                    'before'          	=> '',
                                    'after'           	=> '',
                                    'link_before'     	=> '',
                                    'link_after'      	=> '',
                                    'items_wrap'      	=> '<ul id="menu-main-menu" class="mobile_mainmenu">%3$s</ul>',
                                    'depth'           	=> 0,
                                    'walker'          	=> ''
                                )
                            );
                        ?>
                    </div>
                    <!-- nav mobile end -->
                </div>
            </div>
        </header>

        <div id="content" class="site-content">
					
<?php
	if ($post->post_name !=='home') { ?>
		<!-- standard page banner -->
			<div class="page-header dtable text-center" style="background-image: url(https://cp0.ltdevs.com/aurascape/images/bg-page-header.jpg); margin-top: 150px;">
					<div class="dcell">
						<div class="container">
							<h1 class="page-title"><?php 
							if ($post->post_type == '' ){ 
								echo $post->post_type . 's'; 
							} else {
								echo $post->post_name; 
							} ?> </h1> 
							<!-- <ul id="breadcrumbs" class="breadcrumbs">
								<li><a href="#">Home</a></li>
								<li class="active">Contacts</li>
							</ul> -->
							<div class="breadcrumb">
								<?php custom_breadcrumbs(); ?>
							</div> 
						</div>
					</div>
				</div>
			<div>
			
		</div>
		     
					
	<?php } else { ?>
		<!-- home page banner -->
		<section class="home3-top banner big-padding-top bg-banner-gradient particles-js" data-color="#ffffff, #00c3ff, #fe4c1c" data-id="i1">
			<div class="bg-overlay-1"></div>
            <div class="shape shape-bottom" data-negative="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="shape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
                </svg>
            </div>
            <div class="banner-wrap">
                <div class="grid-lines">
                    <span class="g-line line-left"><span class="g-dot st1"></span><span class="g-dot"></span></span>
                    <span class="g-line line-cleft"><span class="g-dot"></span><span class="g-dot st1"></span></span>
                    <span class="g-line line-cright"><span class="g-dot"></span></span>
                    <span class="g-line line-right"><span class="g-dot"></span></span>
                </div> 
                <div class="container">
                    <div class="flex-row m-lr0">
                        <div class="home3-top-left align-self-center">
                            <h6>AuraScape</h6>
                            <h2>Rendering Dreams to Reality</h2>
                            <p>We bet you don’t spend much time on the 2nd page of <br>Google – so why should your website?</p>
                            <div class="d-flex sm-justify-content-center">
                                <div class="ot-button align-self-center">
                                    <a href="#" class="octf-btn octf-btn-primary octf-btn-icon"><span>Start Now <i class="flaticon-right-arrow-1"></i></span></a>
                                </div>
                                <div class="video-popup">
                                    <div class="btn-inner"><a class="btn-play" href="https://vimeo.com/214162786"><i class="fas fa-play"></i></a></div>
                                    <span>How It Works</span>
                                </div>
                            </div>
                        </div>
                        <div class="home3-top-right">
                            <img src="https://cp0.ltdevs.com/aurascape/wp-content/uploads/2023/07/Can_Mockup_3-e1688659847367-removebg-preview-e1688753726604.png" alt="Marketing Company">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="social-icons-wrapper">
                        <a class="social-icon" href="#" target="_blank"><i class="fab fa-twitter"></i>
                        <a class="social-icon" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-icon" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
		</section>
<?php } ?>
	
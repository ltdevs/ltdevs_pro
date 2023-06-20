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

	<!-- Goole Font -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header_inner about_page">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>    
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="info_wrapper">
                        <div class="contact_info">                   
                            <ul class="list-unstyled">
                                <li><i class="flaticon-phone-receiver"></i>+000-2356-222</li>
                                <li><i class="flaticon-mail-black-envelope-symbol"></i>contact@yourdomain.com</li>
                            </ul>                    
                        </div>
                        <div class="login_info">
                             <ul class="d-flex">
                                <li class="nav-item"><a href="#" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>Sign Up</a></li>
                                <li class="nav-item"><a href="#" class="nav-link join_now js-modal-show"><i class="flaticon-padlock"></i>Lon In</a></li>
                            </ul>
                            <a href="#" title="" class="apply_btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
				<?php the_custom_logo(); ?>
                <!-- <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="#" class="nav-link">Home</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="index-2.html" class="nav-link">Home Version 01</a></li>
                                <li class="nav-item"><a href="index-3.html" class="nav-link">Home Version 02</a></li>
                                <li class="nav-item"><a href="index-4.html" class="nav-link">Home Version 03</a></li>
                                <li class="nav-item"><a href="index-5.html" class="nav-link">Home Version 04</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="about.html" class="nav-link active">About</a></li>
                        <li class="nav-item"><a href="course.html" class="nav-link">Courses</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="course.html" class="nav-link">Courses</a></li>
                                <li class="nav-item"><a href="course-details.html" class="nav-link">Courses Details</a></li>
                            </ul> 
                        </li>
                        <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="blog.html" class="nav-link">Blog List</a></li> 
                                <li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Grid One</a></li> 
                                <li class="nav-item"><a href="blog-3.html" class="nav-link">Blog Grid Two</a></li>
                                <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                            </ul> 
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Pages</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Courses</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="course.html" class="nav-link">Courses</a></li>
                                        <li class="nav-item"><a href="course-details.html" class="nav-link">Courses Details</a></li>
                                    </ul>    
                                </li>                                 
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Events</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="event.html" class="nav-link">Event</a></li>
                                        <li class="nav-item"><a href="event-details.html" class="nav-link">Event Details</a></li>
                                    </ul>    
                                </li>                                
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Blog</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="blog.html" class="nav-link">Blog List</a></li> 
                                        <li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Grid One</a></li> 
                                        <li class="nav-item"><a href="blog-3.html" class="nav-link">Blog Grid Two</a></li>
                                        <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                                    </ul>    
                                </li> 
                                <li class="nav-item"><a href="become-a-teacher.html" class="nav-link">Become A Teacher</a></li>
                                <li class="nav-item"><a href="teacher-profile.html" class="nav-link">Teachers Profile</a></li>
                                <li class="nav-item"><a href="team.html" class="nav-link">Teachers Page</a></li>
                                <li class="nav-item"><a href="forgot-password.html" class="nav-link">Forgot Password</a></li>
                            </ul>                            
                        </li>     
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    </ul>
                </div> -->
				<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'menu-1',
							'menu_id'        	=> 'primary-menu-left',
							'container'       	=> 'div',
							'container_class' 	=> 'collapse navbar-collapse main-menu',
							'container_id'   	=> 'navbarSupportedContent',
							'menu_class'      	=> '',
							'menu_id'         	=> '',
							'echo'            	=> true,
							'before'          	=> '',
							'after'           	=> '',
							'link_before'     	=> '',
							'link_after'      	=> '',
							'items_wrap'      	=> '<ul class="navbar-nav nav lavalamp ml-auto menu">%3$s</ul>',
							'depth'           	=> 0,
							'walker'          	=> ''
						)
					);
				?>
            </nav><!-- END NAVBAR -->
        </div> 
    </div>

</header> <!-- End nav -->

<section class="login_signup_option">
    <div class="l-modal is-hidden--off-flow js-modal-shopify">
        <div class="l-modal__shadow js-modal-hide"></div>
        <div class="login_popup login_modal_body">
            <div class="Popup_title d-flex justify-content-between">
                <h2 class="hidden">&nbsp;</h2>
                <!-- Nav tabs -->
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Register</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Login-->
                            <div class="tab-pane fade in show active" id="login" role="tabpanel">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <a href="forgot-password.html" title="" class="forget_pass">Forget Password ?</a>
                                            <button type="submit" class="btn btn-default login_btn">Login</button>
                                        </div> 
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="social_login">
                                                <div class="social_items">
                                                    <button class="google_login google">Login Google</button>
                                                    <button class="google_login facebook">Login Facebook</button>
                                                    <button class="google_login twitter">Login Twitter</button>
                                                    <button class="google_login linkdin">Login Linkdin</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel2" role="tabpanel">
                                <form action="#" class="register">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <button type="submit" class="btn btn-default login_btn">Register</button>
                                        </div> 
                                    </div>
                                </form>
                            </div><!--/.Panel 2-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  <!-- End Login Signup Option -->

<?php global $post;
	if ($post->post_name !=='home') { ?>
		<!-- standard page banner -->
		
		<div class="intro_wrapper">
			<div class="container">  
				<div class="row">        
					<div class="col-sm-12 col-md-8 col-lg-8">
						<div class="intro_text">
							<h1><?php 
							if ($post->post_type == '' ){ 
								echo $post->post_type . 's'; 
							} else {
								echo $post->post_name; 
							} ?> </h1> 
							<div class="pages_links">
								<!-- <a href="#" title="">Home</a>
								<a href="#" title="" class="active">About Page</a> -->
								<?php custom_breadcrumbs(); ?>
							</div>
						</div>
					</div>              

				</div>
			</div> 
		</div> 
	<?php } else { ?>
		<!-- home page banner -->
		<!--==================
			Slider
		===================-->
		<div class="rev_slider_wrapper">
			<div id="rev_slider_2" class="rev_slider" style="display:none">
				<!-- BEGIN SLIDES LIST --> 
				<ul>
					<li data-index="rs-1706" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

						<div class="slider-overlay"></div>
						<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
						<img src="https://cp0.ltdevs.com/narda/wp-content/uploads/2023/06/sports-activities-in-retirement-home-2022-01-18-23-56-26-utc-scaled.jpg" alt="Sky" class="rev-slidebg"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
						<!-- LAYER NR. 1 -->
						<div class="tp-caption font-lora sfb tp-resizeme letter-space-5 h-p" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['-300','-280','-250','-200']" 
							data-fontsize="['60','40','30','18']"
							data-lineheight="['70','80','70','70']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":400,"to":"o:1;","delay":100,"split":"chars","splitdelay":0.05,"ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

							style="z-index: 7; color:#fff; font-family:'Rubik', sans-serif; max-width: auto; max-height: auto; white-space: nowrap; font-weight:500;">The Goal Of Education Is The Advancement Of Knowledge
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption NotGeneric-Title   tp-resizeme" 
							id="slide-3045-layer-1" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['-150','-140','-120','-120']"
							data-fontsize="['170','120','80','40']"
							data-lineheight="['200','120','70','70']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
							data-paddingtop="[10,10,10,10]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[10,10,10,10]"
							data-paddingleft="[0,0,0,0]"

							style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 700; white-space: nowrap;text-transform:left;">Take Better Education From
						</div>

						<!-- LAYER NR.3 -->
						<div class="tp-caption NotGeneric-Title   tp-resizeme" 
							id="slide-3045-layer-1" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['30','0','-10','-40']" 
							data-fontsize="['170','120','80','40']"
							data-lineheight="['200','120','70','70']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[10,10,10,10]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[10,10,10,10]"
							data-paddingleft="[0,0,0,0]"

							style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 700; white-space: nowrap;text-transform:left;">The World Best University
						</div>
						
						<!-- LAYER NR. 4 -->
						<div class="tp-caption rev-btn rev-btn left_btn" 
							id="slide-2939-layer-8" 
							data-x="['center','center','center','center']" data-hoffset="['-380','280','190','120']" 
							data-y="['middle','middle','top','top']"  data-voffset="['360','220','600','450']" 
							data-fontsize="['14','14','10','8']"
							data-lineheight="['34','34','30','20']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="button" 
							data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
							data-responsive_offset="on" 
							data-responsive="off"
							data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;bg:#ff5a2c;bw:2px 2px 2px 2px;"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[12,12,8,8]"
							data-paddingright="[40,40,30,25]"
							data-paddingbottom="[12,12,8,8]"
							data-paddingleft="[40,40,30,25]"

							style="z-index: 14; white-space: nowrap; font-weight: 500; color: #ffffff;font-family:Rubik; text-transform:uppercase; background-color:#ff5a2c; border-color:rgba(0, 0, 0, 1.00); border-width:2px;  border-radius: 3px;">Get Started Now
						</div>
						<!-- LAYER NR. 5 -->
						<div class="tp-caption rev-btn rev-btn right-btn" 
							id="slide-2939-layer-8" 
							data-x="['center','center','center','center']" data-hoffset="['380','-280','-190','-120']" 
							data-y="['middle','middle','top','top']"  data-voffset="['360','220','600','450']" 
							data-fontsize="['14','14','10','8']"
							data-lineheight="['34','34','30','20']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="button" 
							data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
							data-responsive_offset="on" 
							data-responsive="off"
							data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#fff;bg:#ff5a2c;bw:2px 2px 2px 2px; "}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[12,12,8,8]"
								data-paddingright="[40,40,30,25]"
							data-paddingbottom="[12,12,8,8]"
							data-paddingleft="[40,40,30,25]"

							style="z-index: 14; white-space: nowrap;  font-weight:500; color:#ffffff; font-family:Rubik; text-transform:uppercase; background-color:#092ace; letter-spacing:1px; border-radius: 3px;">View Courses
						</div>
					</li>

					<li data-index="rs-1708" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<div class="slider-overlay"></div>
						<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
						<img src="https://cp0.ltdevs.com/narda/wp-content/uploads/2023/06/group-of-senior-friends-playing-chess-at-the-park-2022-01-18-23-45-52-utc-scaled.jpg" alt="Sky" class="rev-slidebg"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
						<!-- BEGIN BASIC TEXT LAYER -->
						<!-- LAYER NR. 1 -->
						<div class="tp-caption font-lora sfb tp-resizeme letter-space-5 h-p" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['-300','-280','-250','-200']" 
							data-fontsize="['60','40','30','18']"
							data-lineheight="['70','80','70','70']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":400,"to":"o:1;","delay":100,"split":"chars","splitdelay":0.05,"ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

							style="z-index: 7; color:#fff; font-family:'Rubik', sans-serif; max-width: auto; max-height: auto; white-space: nowrap; font-weight:500;">The Goal Of Education Is The Advancement Of Knowledge
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption NotGeneric-Title   tp-resizeme" 
							id="slide-3045-layer-11" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['-150','-140','-120','-120']"
							data-fontsize="['170','120','80','40']"
							data-lineheight="['200','120','70','70']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
							data-paddingtop="[10,10,10,10]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[10,10,10,10]"
							data-paddingleft="[0,0,0,0]"

							style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 700; white-space: nowrap;text-transform:left;">Take Better Education From
						</div>

						<!-- LAYER NR.3 -->
						<div class="tp-caption NotGeneric-Title   tp-resizeme" 
							id="slide-3045-layer-12" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['30','0','-10','-40']" 
							data-fontsize="['170','120','80','40']"
							data-lineheight="['200','120','70','70']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[10,10,10,10]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[10,10,10,10]"
							data-paddingleft="[0,0,0,0]"

							style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 700; white-space: nowrap;text-transform:left;">The World Best University
						</div>
						
						<!-- LAYER NR. 4 -->
						<div class="tp-caption rev-btn rev-btn left_btn" 
							id="slide-2939-layer13" 
							data-x="['center','center','center','center']" data-hoffset="['-380','280','190','120']" 
							data-y="['middle','middle','top','top']"  data-voffset="['360','220','600','450']" 
							data-fontsize="['14','14','10','8']"
							data-lineheight="['34','34','30','20']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="button" 
							data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
							data-responsive_offset="on" 
							data-responsive="off"
							data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;bg:#ff5a2c;bw:2px 2px 2px 2px;"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[12,12,8,8]"
							data-paddingright="[40,40,30,25]"
							data-paddingbottom="[12,12,8,8]"
							data-paddingleft="[40,40,30,25]"

							style="z-index: 14; white-space: nowrap; font-weight: 500; color: #ffffff;font-family:Rubik; text-transform:uppercase; background-color:#ff5a2c; border-color:rgba(0, 0, 0, 1.00); border-width:2px;  border-radius: 3px;">Get Started Now
						</div>
						<!-- LAYER NR. 5 -->
						<div class="tp-caption rev-btn rev-btn right-btn" 
							id="slide-2939-layer-15" 
							data-x="['center','center','center','center']" data-hoffset="['380','-280','-190','-120']" 
							data-y="['middle','middle','top','top']"  data-voffset="['360','220','600','450']" 
							data-fontsize="['14','14','10','8']"
							data-lineheight="['34','34','30','20']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="button" 
							data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
							data-responsive_offset="on" 
							data-responsive="off"
							data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#fff;bg:#ff5a2c;bw:2px 2px 2px 2px; "}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[12,12,8,8]"
							data-paddingright="[40,40,30,25]"
							data-paddingbottom="[12,12,8,8]"
							data-paddingleft="[40,40,30,25]"

							style="z-index: 14; white-space: nowrap;  font-weight:500; color:#ffffff; font-family:Rubik; text-transform:uppercase; background-color:#092ace; letter-spacing:1px; border-radius: 3px;">View Courses
						</div>
					</li>
				</ul><!-- END SLIDES LIST -->

			</div><!-- END SLIDER CONTAINER -->
		</div><!-- END SLIDER CONTAINER WRAPPER -->
<?php } ?>
	
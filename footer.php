<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package レナ_Devs_PRO
 */

?>

        </div>

        <footer id="site-footer" class="site-footer bg-gradient footer-top-bottom">
            <div class="footer-shape-top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="footer-shape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
                </svg>
            </div>
            <div class="container">

                <div class="footer-logo text-center">
                    <img src="https://cp0.ltdevs.com/aurascape/wp-content/uploads/2023/06/logo-removebg-preview.png" class="" alt="" style="width: 300px;">
                </div>

                <div class="flex-col">
                    <div class="ft-col-contact text-center">
                        <div class="contact-info box-style2 text-light">
                            <div class="box-icon"><i class="flaticon-world"></i></div>
                            <p>411 Street Name, Village, Georgetown</p>
                            <h6>Our Address</h6>                                            
                        </div>
                    </div>
                    <div class="ft-col-contact text-center border-left border-right">
                        <div class="contact-info box-style2 text-light">
                            <div class="box-icon"><i class="flaticon-note"></i></div>
                            <p><a href="mailto: aurascapegy@gmail.com"> aurascapegy@gmail.com</a></p>
                            <h6>Our Email</h6>                                            
                        </div>
                    </div>
                    <div class="ft-col-contact text-center">
                        <div class="contact-info box-style2 text-light">
                            <div class="box-icon"><i class="flaticon-viber"></i></div>
                            <p><a href="tel:592-650-1360">(+592)650-1360</a></p>
                            <h6>Our Phone</h6>                                          
                        </div>
                    </div>
                </div>
                
                <?php wp_nav_menu(
                        array(
                            'theme_location' 	=> 'menu-2',
                            'menu_id'        	=> 'primary-menu-right',
                            'container'       	=> 'div',
                            'container_class' 	=> 'footer-menu',
                            'container_id'   	=> '',
                            'menu_class'      	=> '',
                            'menu_id'         	=> '',
                            'echo'            	=> true,
                            'before'          	=> '',
                            'after'           	=> '',
                            'link_before'     	=> '',
                            'link_after'      	=> '',
                            'items_wrap'      	=> '<ul id="menu-footer-menu" class="menu">%3$s</ul>',
                            'depth'           	=> 0,
                            'walker'          	=> ''
                        )
                    );
                ?>
                <p class="copyright text-center">Copyright &copy; <?php echo $currentYear = date("Y"); ?> | <span>All rights reserved</span> | <span>Developed by <a target="_blank" href="https://www.ltdevs.com">レナ Devs </a></span></p>

                <div class="footer-social text-center">
                    <a class="footer-social-icon twitter" href="https://api.whatsapp.com/send?phone=%2B5926501360" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a class="footer-social-icon facebook" href="https://www.facebook.com/aurascape.gy" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="footer-social-icon linkedin" href="https://www.linkedin.com/in/aurascape-services-4a5824205/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="footer-social-icon instagram" href="https://www.instagram.com/aurascapegy/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>

            </div>
        </footer><!-- #site-footer -->
    </div><!-- #page -->
<a id="back-to-top" href="#" class="show"><i class="flaticon-arrow-pointing-to-up"></i></a>

<?php wp_footer(); ?>

</body>
</html>

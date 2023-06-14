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
                    <img src="images/logo.png" class="attachment-large size-large" alt="">
                </div>

                <div class="flex-col">
                    <div class="ft-col-contact text-center">
                        <div class="contact-info box-style2 text-light">
                            <div class="box-icon"><i class="flaticon-world"></i></div>
                            <p>411 University St, Seattle, USA</p>
                            <h6>Our Address</h6>                                            
                        </div>
                    </div>
                    <div class="ft-col-contact text-center border-left border-right">
                        <div class="contact-info box-style2 text-light">
                            <div class="box-icon"><i class="flaticon-note"></i></div>
                            <p><a href="mailto:onum_company@mail.com">onum_company@mail.com</a></p>
                            <h6>Our Mailbox</h6>                                            
                        </div>
                    </div>
                    <div class="ft-col-contact text-center">
                        <div class="contact-info box-style2 text-light">
                            <div class="box-icon"><i class="flaticon-viber"></i></div>
                            <p><a href="tel:800-456-478-23">+1 -800-456-478-23</a></p>
                            <h6>Our Phone</h6>                                          
                        </div>
                    </div>
                </div>

                <div class="footer-menu">
                    <ul id="menu-footer-menu" class="menu">
                        <li><a href="index.html" aria-current="page">Home</a></li>
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="portfolio-grid.html">Portfolio</a></li>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                    </ul>
                </div>

                <p class="copyright text-center">Copyright &copy; <?php echo $currentYear = date("Y"); ?> | <span>All rights reserved</span> | <span>Developed by <a href="https://www.ltdevs.com">レナ Devs </a></span></p>

                <div class="footer-social text-center">
                    <a class="footer-social-icon twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="footer-social-icon facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="footer-social-icon linkedin" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="footer-social-icon instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>

            </div>
        </footer><!-- #site-footer -->
    </div><!-- #page -->
<a id="back-to-top" href="#" class="show"><i class="flaticon-arrow-pointing-to-up"></i></a>

<?php wp_footer(); ?>

</body>
</html>

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


</main>
<!-- main-area-end -->

<!-- footer-area -->
<footer>
    <div class="footer-area">
        <div class="footer-logo-area">
            <div class="container">
                <div class="footer-logo-wrap">
                    <ul class="list-wrap">
                        <li class="order-0 order-lg-2">
                            <div class="footer-logo">
                                <?php the_custom_logo(); ?>
                            </div>
                        </li>
                        <li>
                            <div class="footer-social">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">about andspa</h4>
                            <div class="footer-contact">
                                <ul class="list-wrap">
                                    <li>Centerl Park West La, New York</li>
                                    <li><a href="tel:0123456789">+0 333 999 8899</a></li>
                                    <li><a href="mailto:info@bemet.com">info@bemet.com</a></li>
                                </ul>
                            </div>
                            <div class="footer-content">
                                <h4 class="title">Open Hours</h4>
                                <p>Sunday to Friday <span>06:00-18:00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Important Links</h4>
                            <div class="footer-link">
                                <ul class="list-wrap">
                                    <li><a href="contact.html">CURATION</a></li>
                                    <li><a href="about.html">ABOUT US</a></li>
                                    <li><a href="contact.html">MY ACCOUNT</a></li>
                                    <li><a href="contact.html">CONTACT</a></li>
                                    <li><a href="contact.html">SHIPPING & RETURNS</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-4">
                        <div class="footer-widget">
                            <h4 class="fw-title">CATEGORIES</h4>
                            <div class="footer-link">
                                <ul class="list-wrap">
                                    <li><a href="contact.html">How to Order</a></li>
                                    <li><a href="contact.html">Delivery Info</a></li>
                                    <li><a href="contact.html">FAQs</a></li>
                                    <li><a href="contact.html">Terms</a></li>
                                    <li><a href="contact.html">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-widget">
                            <h4 class="fw-title">instagram</h4>
                            <div class="footer-instagram">
                                <ul class="list-wrap">
                                    <li><a href="#"><img src="<?php echo home_url()?>/img/images/footer_insta01.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo home_url()?>/img/images/footer_insta02.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo home_url()?>/img/images/footer_insta03.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo home_url()?>/img/images/footer_insta04.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo home_url()?>/img/images/footer_insta05.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo home_url()?>/img/images/footer_insta06.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo home_url()?>/img/images/footer_insta07.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo home_url()?>/img/images/footer_insta08.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright-text">
                            <p>© 2023 By <a href="index.html">Bemet</a>, All Rights Reserved</p>
                            <p>Copyright &copy; <?php echo $currentYear = date("Y"); ?> | <span>All rights reserved</span> | <span>Developed by <a href="https://www.ltdevs.com">レナ Devs </a></span></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="footer-card text-end">
                            <img src="<?php echo home_url()?>/img/images/card.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->

<?php wp_footer(); ?>

</body>
</html>

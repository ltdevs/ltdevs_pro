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
		
<footer>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright &copy; <?php echo $currentYear = date("Y"); ?> | <span>All rights reserved</span> | <span>Developed by <a href="https://www.ltdevs.com">レナ Devs </a></span></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>

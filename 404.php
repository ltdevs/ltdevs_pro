<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package レナ_Devs_PRO
 */

get_header();
?>


    
    <!--======= 404 PAGES =========-->
  <section class="error-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center"> <span class="not-found font-montserrat">page not found</span> <span class="head-404 font-montserrat">404</span>
          <h4>Page doesn’t exist or other error occured. Go to our <a href="<?php echo home_url()?>" class="font-montserrat">HOMEPAGE</a> or go back to <a onclick="window.history.back()" href="javascript:void(0)" class="font-montserrat">PREVIOUS PAGE</a></h4>
        </div>
        
      </div>
    </div>
  </section>


<?php
get_footer();

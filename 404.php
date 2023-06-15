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

<div class="container">
	<div class="error-404 not-found text-center">
		<h2>404 <img class="error-image" src="https://via.placeholder.com/260x260.png" alt="404"></h2>
		<h1>Sorry! Page Not Found!</h1>
		<div class="content-404">
			<p>Oops! The page you are looking for does not exist. Please return to the site’s homepage.</p>
			<a class="octf-btn octf-btn-third octf-btn-icon" href="<?php echo home_url()?>">Take Me Home<i class="flaticon-right-arrow-1"></i></a>
			<a class="octf-btn octf-btn-third octf-btn-icon" onclick="window.history.back()" href="javascript:void(0)">Take Me Back<i class="flaticon-right-arrow-1"></i></a>
		</div>
	</div>
</div>

			
<?php
get_footer();

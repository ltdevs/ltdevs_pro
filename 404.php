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
		
<div class="">
	<h3>Ooops! Page Not Found!</h3>
	<p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable..</p>
	<ul>
		<li>If you typed the page adress, make sure it is spelled correctly.</li>
		<li>Click <a onclick="window.history.back()" href="javascript:void(0)">Back</a> button to try another link.</li>
		<li>Or go back on <a href="<?php echo home_url()?>">Homepage</a> and try there.</li>		
	</ul>
</div>
<div class="">
	<ul>
		<li><a onclick="window.history.back()" href="javascript:void(0)"><span>Go Back</span></a></li>
		<?php print_r($_SERVER['HTTP_REFERER'])?>
		<li><a href="<?php echo home_url()?>"><span>back To homepage</span></a></li>
	</ul>
</div>
			
<?php
get_footer();

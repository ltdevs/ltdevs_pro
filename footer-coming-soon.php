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
<!-- Wrap End --> 

<?php wp_footer(); ?>

<script type="text/javascript">
/* ==========================================================================
    countdown timer
========================================================================== */
(function($) {
  "use strict";
	$('.countdown').downCount({
     date: '01/01/2025 00:00:00' // m/d/y
});
})(jQuery);
</script>

</body>
</html>

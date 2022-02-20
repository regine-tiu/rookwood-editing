<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Neve
 * @since   1.0.0
 */

do_action( 'neve_before_primary_end' );
?>
</main><!--/.neve-main-->

</div><!--/.wrapper-->

<footer>
	<div class="social-icons">
		<ul>
			<li><a href="https://twitter.com/RookwoodEditing"><img src="https://www.rookwoodediting.com/wp-content/uploads/2020/12/twitter-icon.png"></a></li>
			<li><a href="https://www.linkedin.com/in/molly-rookwood-108950164/"><img src="https://www.rookwoodediting.com/wp-content/uploads/2020/12/linkedin-icon.png"></a></li>
			<li><a href="https://www.editors.ca/directory/molly-rookwood"><img src="https://www.rookwoodediting.com/wp-content/uploads/2020/12/ec-icon.png"></a></li>
			<li><a href="<?php echo site_url('/contact')?>"><img src="https://www.rookwoodediting.com/wp-content/uploads/2020/12/mail-icon.png"></a></li>
	</div>
	<div class="footer-text">
		<p> Copyright Rookwood Editing 2022 &#124; Designed by <a href="https://www.reggieb.me/"> Reggie B.</a></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>

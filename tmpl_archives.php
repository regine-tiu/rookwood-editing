<?php
/**
 * The template for displaying all pages.
 *
 * @package Neve
 * @since   1.0.0
 */
$container_class = apply_filters( 'neve_container_class_filter', 'container', 'single-page' );

get_header();

?>
<section class="page">
	<div class="<?php echo esc_attr( $container_class ); ?> single-page-container">
			
			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>

				<div class="contact-form">
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
			</div>
	</div>
</section>
<?php get_footer(); ?>

<?php
/**
 * The template for displaying case studies
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<section class="page">
	<div class="<?php echo esc_attr( $container_class ); ?> single-page-container">
   
		  <?php while ( have_posts() ) : the_post(); 
      			$image_1 = get_field("service-images");
						$size = "full";
						$intro = get_field('service-page-intro');?>
			
        <article class="case-study">
          <aside class="case-study-sidebar">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </aside>

          <div class="case-study-images">
            <?php if($image_1) {
              echo wp_get_attachment_image( $image_1, $size );
            } ?>	
          </div>
        </article>	
      <?php endwhile; // end of the loop. ?>
	</div>
</section>

<?php get_footer(); ?>

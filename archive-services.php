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
	<div class="row">
      <?php 
					$intro = get_field('service-page-intro'); ?> 
        <?php echo $intro ; ?> 

		  <?php while ( have_posts() ) : the_post(); 
      			$service_img = get_field("service-image");
						$size = "medium";?>
        <article class="services-item">
          <div class="service-item-images">
						<?php echo wp_get_attachment_image($service_img, $size); ?>
          </div>

          <aside class="service-item-text">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
          </aside>  
        </article>	
      <?php endwhile; // end of the loop. ?>
	</div>
</section>

<?php get_footer(); ?>

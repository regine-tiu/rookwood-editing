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
 * @subpackage Rookwood Editing
 * @since Rookwood Editing 2020
 */

get_header(); ?>

<section class="page">
	<div class="row">
    <h1 class="testimonials-page">Testimonials</h1>
		  <?php while ( have_posts() ) : the_post(); 
      			$image = get_field("book_cover");
            $size = "medium"; ?>
            
        <article class="testimonial-item">
          <div class="book-images">
              <?php echo wp_get_attachment_image( $image, $size ); ?>
          </div>

          <aside class="testimonial">
            <?php the_content(); ?>
          </aside>  
        </article>	
      <?php endwhile; // end of the loop. ?>
	</div>
</section>

<?php get_footer(); ?>

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

<section>
  <h1>Testimonials</h1>
  <div class="testimonial-page-wrapper">
    <div class="testimonial-row"> 
      <?php while ( have_posts() ) : the_post(); 
            $image = get_field("book_cover");
            $size = "medium"; 
            $author_info = get_field("author_info"); 
            $book_link = get_field("book_link"); ?> 
          <article class="testimonial-item">
            <div class="book-imgs">
              <a href="<?php echo $book_link; ?>" target="_blank"><?php echo wp_get_attachment_image( $image, $size ); ?></a>
            </div>          
            <div class="testimonial-text">
              <?php the_content(); ?>
              <div class="author-info">
                <?php echo $author_info; ?>
              </div>  
            </div>  
          </article>	
        <?php endwhile; // end of the loop. ?>
      </div> 
    </div>  
</section>

<?php get_footer(); ?>

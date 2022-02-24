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
    <h1>About</h1>
     <?php while ( have_posts() ) : the_post();
     $about_img = get_field("about_image");
          $about_summary = get_field("about_summary");
          $crow_feet_img = get_field("about_page_deco_img");
          $size = "full"; ?>

        <div class="about-page-text">
           <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>  

      <div class="about-page-sidebar">
          <div class="about-image"> 
            <?php echo wp_get_attachment_image($about_img, $size); ?> 
          </div> 

          <div class="about-summary">
            <?php echo $about_summary;?>	
          </div>
      </div>
      <?php endwhile; // end of the loop. ?>     
	</div>
</section>

<?php get_footer(); ?>
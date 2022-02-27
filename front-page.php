<?php
/**
 * The template for displaying the homepage
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

<section class="hero">
	<div class="hero-img">	
	</div>
	<div class="hero-card">
		<h2>Welcome to <br> Rookwood Editing.</h2>
		<div class="hero-text">
			<h4>Let’s work together to enhance your authorial vision and make your writing shine.</h4>
		</div>
		<div class="hero-btn">
			<h5><a href="<?php echo site_url('/contact')?>">Get in touch</a></h5>
		</div>
	</div>
</section>

<section class="service-gallery">
	<?php query_posts('posts_per_page=4&post_type=services'); ?>
		<?php while ( have_posts() ) : the_post(); 
				$service_logo = get_field("service_image");
				$size = "medium"; 
				$service_summary = get_field("service_summary");?>
			<article class="service">	
				<figure>
					<a href="<?php echo site_url('/services')?>"><?php echo wp_get_attachment_image($service_logo, $size); ?></a>
				</figure>
					<div class="service-summary">
						<h6><?php the_title(); ?></a></h6>
						<p><?php echo $service_summary; ?></p>
					</div>	
			</article>	
		<?php endwhile; ?>
	<?php wp_reset_query(); ?>			
</section>

<section class="book-gallery">
	<?php query_posts('posts_per_page=3&post_type=testimonials'); ?>
		<?php while ( have_posts() ) : the_post(); 
				$book_cover = get_field("book_cover");
				$book_link = get_field("book_link"); ?>
		
				<div class="gallery-imgs">	
					<a href="<?php echo $book_link; ?>" target="_blank"><?php echo wp_get_attachment_image( $book_cover, $size ); ?></a>
				</div>
				
		<?php endwhile; ?>
	<?php wp_reset_query(); ?>		
</section>

<section class="testimonial-gallery">
	<?php query_posts('posts_per_page=2&post_type=testimonials'); ?>
		<?php while ( have_posts() ) : the_post(); 
				$author_info = get_field("author_info"); ?>
			<article class="testimonial">
				<div class="homepage-testimonial">
					<a href="<?php echo site_url('/testimonial')?>"><?php the_content(); ?></a>	
						<div class="author-info">
							<?php echo $author_info; ?>
						</div> 
				</div>	
			</article>	
		<?php endwhile; ?>
	<?php wp_reset_query(); ?>		
</section>
	
<?php get_footer(); ?>

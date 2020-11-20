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
	<div class="welcome-card">
		<h2>Welcome to <br> Rookwood Editing</h2>
		<h4>Let’s work together to enhance your authorial vision and make your writing shine.</h4>
		<div class="welcome-btn">
			<h5><a href="#">Get in touch</a></h5>
		</div>
	</div>
</section>

<section class="service-gallery">
	<div class="row">
		<?php query_posts('posts_per_page=5&post_type=services'); ?>
			<?php while ( have_posts() ) : the_post(); 
					$service_logo = get_field("service_image");
					$size = "medium"; 
					$service_summary = get_field("service_summary");?>
				<article>	
					<figure>
						<?php echo wp_get_attachment_image($service_logo, $size); ?>
					</figure>
						<h3><?php the_title(); ?></a></h3>
						<p><?php echo $service_summary; ?></p>
				</article>	
			<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</div>			
</section>

<section class="book-gallery">
	<div class="row">
		<?php query_posts('posts_per_page=3&post_type=testimonials'); ?>
			<?php while ( have_posts() ) : the_post(); 
					$book_cover = get_field("book_cover"); ?>
				<article>	
						<?php echo wp_get_attachment_image($book_cover, $size); ?>
				</article>	
			<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</div>			
</section>

<section class="testimonial-gallery">
	<div class="row">
		<?php query_posts('posts_per_page=2&post_type=testimonials'); ?>
			<?php while ( have_posts() ) : the_post(); 
					$author_info = get_field("author_info"); ?>
				<article>
					<div class="testimonial">	
						<?php the_content(); ?>
						<?php echo $author_info; ?>
					</div>	
				</article>	
			<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</div>			
</section>
	
<?php get_footer(); ?>

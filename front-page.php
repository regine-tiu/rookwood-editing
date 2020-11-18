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
<body>
<section class="hero">
	<div class="hero-img">
		
	</div>
	<div class="welcome-card">
		<h2>Welcome to <br>Rookwood Editing</h2>
		<h4>Let’s work together to enhance your authorial vision and make your writing shine.</h4>
		<div class="welcome-btn">
			<h5><a href="#">Get in touch</a></h5>
		</div>
	</div>
</section>

<section class="homepage-services">
	<div class="project-gallery">
			<?php query_posts('posts_per_page=4&post_type=services'); ?>
					<?php while ( have_posts() ) : the_post(); 
						$image_1 = get_field("service-image");
						$size = "medium"; ?>
					<article>	
						<figure>
							<?php echo wp_get_attachment_image($image_1, $size); ?>
						</figure>
							<h6><?php the_title(); ?></a></h6>
					</article>	
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
		</div>		
	</div>
</section>
	
<?php get_footer(); ?>

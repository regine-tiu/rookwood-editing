<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the page header div.
 *
 * @package Neve
 * @since   1.0.0
 */

$header_classes = apply_filters( 'nv_header_classes', 'header' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@400;500;600;700&display=swap" rel="stylesheet">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body  <?php body_class(); ?> <?php neve_body_attrs(); ?> >
<?php wp_body_open(); ?>
<div class="wrapper">
	<?php neve_before_header_wrapper_trigger(); ?>
	<header class="<?php echo esc_attr( $header_classes ); ?>" role="banner">
	<div class="header-logo">
			<img src="http://localhost:8888/wordpress/wp-content/uploads/2020/11/header-logo.png">
		</div>
	
		<div class="nav-bar">
			<ul class="nav-list">
				<li><a class="nav-item" href="<?php echo site_url('')?>">Home</a></li>
				<li><a class="nav-item" href="<?php echo site_url('/about')?>">About</a></li>
				<li><a class="nav-item" href="<?php echo site_url('/service')?>">Services</a></li>
				<li><a class="nav-item" href="<?php echo site_url('/testimonial')?>">Testimonials</a></li>
				<li><a class="nav-item" href="<?php echo site_url('/contact-2')?>">Contact</a></li>
				<li><a class="nav-item" href="<?php echo site_url('')?>">Blog</a></li>
			</ul>	
		</div>

	</header>
<?php



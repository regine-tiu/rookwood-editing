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
	<meta property="og:description" content="I believe that, at its heart, editing is about collaboration. My job is to help you, the author, clarify your vision of your project and bring your words to life" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="manifest" href="/site.webmanifest">
	<link rel="stylesheet" href="https://use.typekit.net/sku3vdx.css">

	<?php wp_head(); ?>
</head>

<body  <?php body_class(); ?> <?php neve_body_attrs(); ?> >
<?php wp_body_open(); ?>
<div class="wrapper">
	<?php neve_before_header_wrapper_trigger(); ?>
	<header class="<?php echo esc_attr( $header_classes ); ?>" role="banner">
	<div class="header-logo">
			<a href="https://www.rookwoodediting.com"><img src="https://www.rookwoodediting.com/wp-content/uploads/2020/12/header-logo.png"></a>
		</div>
	
		<div class="nav-bar">
			<ul class="nav-list">
				<li><a class="nav-item" href="<?php echo site_url('')?>">Home</a></li>
				<li><a class="nav-item" href="<?php echo site_url('about')?>">About</a></li>
				<li><a class="nav-item" href="<?php echo site_url('services')?>">Services</a></li>
				<li><a class="nav-item" href="<?php echo site_url('testimonial')?>">Testimonials</a></li>
				<li><a class="nav-item" href="<?php echo site_url('contact')?>">Contact</a></li>
				<li><a class="nav-item" href="<?php echo site_url('blog')?>">Blog</a></li>
			</ul>	
		</div>
	</header>
<?php



<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
		
		<?php wp_head(); ?>
		
		<meta property="og:type" content="article" />
		
		<?php
			$post = get_post();
			if ($post->ID == 90) : ?>
			
				<meta property="og:image" content="http://www.thestrugglewithinbook.com/wp-content/uploads/2017/11/inner-communication-bird.png" />
				
		<?php endif; ?>
		
		<?php
			
			if ($post->ID == 2549) : ?>
			
				<meta property="og:image" content="http://www.thestrugglewithinbook.com/wp-content/uploads/2017/08/the-winds-divine-melody-chapter-1-1.png" />
				
		<?php endif; ?>
		
		<?php
			if ($post->ID == 2622) : ?>
			
				<meta property="og:image" content="http://www.thestrugglewithinbook.com/wp-content/uploads/2017/08/the-winds-divine-melody-chapter-2-1.png" />
				
		<?php endif; ?>
		
		<?php 
			$obj = get_queried_object();
			if ($obj->slug == "the-winds-divine-melody") : ?>
		
				<meta property="og:image" content="http://www.thestrugglewithinbook.com/wp-content/uploads/2017/08/the-winds-divine-melody.png" />
				
		<?php endif; ?>
	</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div class="skip-container cf">
		<a class="skip-link screen-reader-text focusable" href="#content"><?php _e( '&darr; Skip to Main Content', 'responsive' ); ?></a>
	</div><!-- .skip-container -->
	<div id="header" role="banner">

		<?php responsive_header_top(); // before header content hook ?>

		<?php if ( has_nav_menu( 'top-menu', 'responsive' ) ) {
			wp_nav_menu( array(
				'container'      => '',
				'fallback_cb'    => false,
				'menu_class'     => 'top-menu',
				'theme_location' => 'top-menu'
			) );
		} ?>

		<?php responsive_in_header(); // header hook ?>

		<?php if ( get_header_image() != '' ) : ?>

			<div id="logo">
				<a href="<?php echo esc_url(home_url( '/' )); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php esc_attr(bloginfo( 'name' )); ?>"/></a>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed ?>

		<?php if ( !get_header_image() ) : ?>

			
			<div id="logo">
				<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://www.thestrugglewithinbook.com/wp-content/uploads/2017/07/lotus-flower-clipart-clipart-best-rx83m4-clipart.png" id="logo-lotus" /></a>
				<span class="site-name"><a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<span class="site-description"><?php bloginfo( 'description' ); ?></span>
			</div><!-- end of #logo -->
		

		<?php endif; // header image was removed (again) ?>

		<?php get_sidebar( 'top' ); ?>
		<?php wp_nav_menu( array(
			'container'       => 'div',
			'container_class' => 'main-nav',
			'fallback_cb'     => 'responsive_fallback_menu',
			'theme_location'  => 'header-menu'
		) ); ?>

		<?php if ( has_nav_menu( 'sub-header-menu', 'responsive' ) ) {
			wp_nav_menu( array(
				'container'      => '',
				'menu_class'     => 'sub-header-menu',
				'theme_location' => 'sub-header-menu'
			) );
		} ?>

		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>

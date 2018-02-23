<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package samkillermannblog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('color0'); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sam-killermann-blog' ); ?></a>

	<header id="masthead" class="site-header chameleon chameleon-bg">
		<div class="site-branding">

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="custom-logo" alt="Sam Killermann's Head" src="<?php echo get_template_directory_uri();?>/img/sam-killermann-headshot-doodle.svg"></a>
			<!-- Enable for Custom Logo or Blog name and tagline

			<?php
			the_custom_logo();
			if ( is_front_page() || is_home() ) : ?>
				<h1 class="screen-reader-text site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
			-->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle chameleon chameleon-color" aria-controls="primary-menu" aria-expanded="false">
				<div class="closed">Menu</div>
				<div class="open">Close</div>
			</button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
		<nav class="site-access secondary-navigation">
			<a id="sign-in" href="<?php echo esc_url( home_url( '/' ) ); ?>/wp-admin" alt="Sign in">Sign in</a>
			<span>or</span>
			<a id="sign-up" href="<?php echo esc_url( home_url( '/' ) ); ?>/sign-up" alt="Sign up">Sign up</a>
		</nav>

	</header><!-- #masthead -->

	<div id="primary" class="content-area">
		<section id="content" class="site-content">

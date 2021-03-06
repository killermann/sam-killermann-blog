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
	<!-- mobile meta (hooray!) -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45231959-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-45231959-1');
	</script>

</head>

<body <?php body_class('color0'); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sam-killermann-blog' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="masthead--inner" class="chameleon-bg">
			<div id="marquee">
				<div id="marquee--latest">
					<?php $marquee_latest = new WP_Query(
						array(
							'post_type' => 'post',
							'posts_per_page' => 1,
							'orderby' => 'published',
							'order' => 'DESC'
						)
					);

					while($marquee_latest->have_posts()) : $marquee_latest->the_post();?>

					<article id="marquee-<?php the_ID(); ?>">
						<span class="chameleon-color">New</span> <a alt="<?php the_title();?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a>
					</article>

					<?php endwhile; wp_reset_postdata(); ?>
				</div>
				<nav class="site-access">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/tag/patrons-only/" alt="">Patrons-Only 👉</a>
					<span>or</span>
					<a onClick="ga('send', 'event', { eventCategory: 'Sign-up', eventAction: 'button_click', eventLabel: 'Header'});" id="sign-up" href="<?php echo esc_url( home_url( '/' ) ); ?>/sign-up" alt="Sign up">Sign up</a>
				</nav>
			</div><!--/marquee-->
			<div id="masthead--nav">

				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="custom-logo" alt="Sam Killermann's Head" src="<?php echo get_template_directory_uri();?>/img/sam-killermann-headshot-doodle.svg"></a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="chameleon-bg main-navigation">
					<button class="menu-toggle chameleon-color" aria-controls="primary-menu" aria-expanded="false">
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

				<div id="masthead--search">
					<div id="search-icon">
						<svg>
							<circle class="st0" cx="11.7" cy="9.4" r="8.4"/>
							<path d="M5.7,15.4l3.1,1.8l-5.5,8.1c-0.4,0.4-1.5,0.2-2.3-0.4c-0.9-0.6-1.2-1.3-0.8-1.7c0,0,0,0,0,0"/>
						</svg>
					</div>
					<?php get_search_form()?>
				</div>

			</div><!--/mastheadnav-->
		</div>

	</header><!-- #masthead -->

	<div id="primary" class="content-area">
		<section id="content" class="site-content">

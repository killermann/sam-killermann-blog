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
<html <?php language_attributes(); ?> >
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45231959-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-45231959-1');
	</script>
	<script>
	let root = document.documentElement;
	if(localStorage.getItem("colorScheme")==="night") {
		root.style.setProperty('--bg-color', 'black');
		root.style.setProperty('--text-color', '#ddd');
		root.style.setProperty('--bg-faint', '#222222');
		root.style.setProperty('--bg-mask', 'rgba(0,0,0,.78)');
	} else if (localStorage.getItem("colorScheme")==="day") {
		root.style.setProperty('--bg-color', 'white');
		root.style.setProperty('--text-color', 'black');
		root.style.setProperty('--bg-faint', '#f3f3f3');
		root.style.setProperty('--bg-mask', 'rgba(255,255,255,.85)');
	}</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- mobile meta (hooray!) -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#af6ee2">
	<meta name="msapplication-TileColor" content="#af6ee2">
	<meta name="theme-color" content="#af6ee2">

	<?php wp_head(); ?>

</head>

<body <?php body_class(''); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sam-killermann-blog' ); ?></a>

	<header id="masthead" class="chameleon-bg">
		<div id="masthead--inner">
			<a id="masthead-logo" title="sK Blog Home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<svg aria-hidden="true" id="sK-doodle-head" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><style>.cls-1{fill:#e5b380;}.cls-2{fill:#9b724e;}.cls-3{fill:#664337;}.cls-4{fill:#fff;}.cls-5{fill:#994f4f;}.cls-6{fill:#c67d3c;}</style></defs><path class="cls-1" d="M82.2,60.88c-.69-4.65-5.09-6.53-6.36-10.68-2.36-7.72,1.57-16.07-2.31-23.8-7.61-15.2-24.13-9-36.38-5.52-6,1.68-10.16-.15-13.14,7-3.12,7.54-.32,15.89-1.33,23.48-.25,1.87.95,3.16.14,5-.6,1.37-4.44,1-5.16,2.7-1.82,4.22-.1,15.46,7.41,10.44.89,6.25-1.41,14.9,4,20.17,2.57,2.49,11.7,4,15.76,4.27,6.26.41,20.17-1.92,25-5.5,6.7-5,5.68-12.13,5.51-19.74C80.38,73.94,82.65,63.9,82.2,60.88Z"/><path class="cls-2" d="M66,74.88c-.17-1.09-.38-2-.46-3,0-.65.13-1.38-.42-1.9-.73-.69-3.76-.46-4.82-.39-4.56.3-8.92,2.55-13.42,3.14-2.31.3-5,1.65-7.42,1.54-.42,0-.82-.5-1.54-.44l-1.29.41a1,1,0,0,0-.74-.29c-1.68.45-1.32,2-.47,3.39.95,1.5,5.59,4.86,7.42,4,.87-.39,1.51-1.27,2.37-1.74,1.42-.76,2.67-2.18,4.08-2.83s5.13-.77,6.22.34c.26.26.17,1.12.52,1.51a1.83,1.83,0,0,0,2.36.42c.92-.41,1.42-1.39,2.23-1.92.34-.79.81-.92,1.39-.38.52.2,1,.38,1.57.55A2,2,0,0,0,66,74.88Z"/><path class="cls-3" d="M79.37,35.52c.76-13.36-1.28-27-16-29-11.06-1.51-23,5-28,10-7-3-9,1-13,9-2.28,4.54-5.92,35.41,1.43,31.91,2-1,.73-12.92,2.55-15.67,1.5-2.28,6.63-.52,8.08-3.6,1.64-3.49-9.39,1.44-10,2,1.13-14.65-.26-16.06,16-19.66,27-6,34.66-1.58,34.78,16.51-.74-.16-10.37-1-10.78,1.49,2,1,10.12,2.74,11,4,.71,1,0,12,3,12C79.37,54.52,77.37,46.52,79.37,35.52Z"/><path class="cls-4" d="M65.37,66.57c-2.62-.79-5.93.66-8.44,1.35-3.28.9-6.5,2-9.84,2.7a35.81,35.81,0,0,1-9.57.78c-.8-.06-3.53-.86-4.19-.29-1,.89-.1,1.44.75,1.76,2.87,1.06,7,.47,10,.08,3.48-.46,6.9-1.27,10.36-1.83,3-.49,6.05-.49,9-1,.91-.16,2.41-.34,2.89-1.23A1.65,1.65,0,0,0,65.37,66.57Z"/><path class="cls-5" d="M65,77.34c-2.31-1.36-4.53-.78-6.89,0s-3.12-.06-5.23-.54c-2.48-.57-4.46.57-6.54,1.77-1.07.62-4.26,1.63-3.53,3.39.41,1,4.4.91,5.39,1a34.43,34.43,0,0,0,8.41-.67c2.32-.38,5.84-.45,7.93-1.51C65.86,80.14,66.65,78.3,65,77.34Z"/><path class="cls-4" d="M64.57,78.71c-3.77.81-7.44,2-11.23,2.8-1,.2-3.37.23-3.31,1.7s2,1,2.95.87c3-.39,6.14-.36,9.11-1.17,1.19-.32,3.38-.86,4-2A1.43,1.43,0,0,0,64.57,78.71Z"/><path class="cls-4" d="M36.85,52.26c-.19-2.41-1.27-4.58-4.06-4.13-1.74.28-4.34,1-4.44,3.12C28.1,56.37,37.34,58.54,36.85,52.26Z"/><path class="cls-4" d="M72.42,48.37c-4-2.85-9.9,3-3.31,6.52C72.37,56.52,76,53.11,72.42,48.37Z"/><path class="cls-6" d="M34.39,52.2c0-2.61-4.33-1.65-3.33.76C31.76,54.63,34.62,54.16,34.39,52.2Z"/><path class="cls-6" d="M71.81,50.61c-1.15-2.46-5.31-.1-3.32,2.06C70.1,54.42,74,52.5,71.81,50.61Z"/><path d="M32.13,47.83c-5.68.87-5.89,8.43,0,8.79C39.23,57.05,39.11,46.76,32.13,47.83Zm4.28,5.44c-1.34,3.54-8.56,3-7.57-1.3C29.88,47.37,38.26,48.39,36.41,53.27Z"/><path d="M74.37,49.52c-.9-1.52-4.12-2.77-6-2.39a3.62,3.62,0,0,0-2.49,4.64,6,6,0,0,0,5,4.28C74.2,56.25,75.86,52,74.37,49.52Zm-2.63,5.37c-3.32.85-7.28-5-3.44-6.43C73.37,46.52,75.86,53.83,71.74,54.89Z"/><path d="M75.66,42.38a17.27,17.27,0,0,0-5.28-2.91,25.72,25.72,0,0,0-3-.78c-.68-.14-1.36-.26-2-.36-1.08-.49-1.34-.24-.79.75a7.17,7.17,0,0,1,4.26-1.79c1.09-.16,4,.45,4.85,0,1.92-1-1.06-1.21-1.88-1.24a14.69,14.69,0,0,0-5.39.7c-.92.33-3.44,1.27-2.36,2.47.55.62,3.91.71,4.87,1a18.49,18.49,0,0,1,4.52,1.89c.26.17,1.51,1.3,1.93,1.18S76.11,42.74,75.66,42.38Z"/><path d="M80.87,55.32a15.06,15.06,0,0,0-1.54-1h0a.51.51,0,0,0-.07-.58c.49-.51,0-1.48-.12-2.69a42.92,42.92,0,0,1-.23-5.89c.22-4.3.68-8.59,1-12.88a29.49,29.49,0,0,0-7.22-21.63c-5-5.88-14-5.37-20.78-3.47a40,40,0,0,0-10.14,4.32,26.28,26.28,0,0,0-4.34,3.3c-.35.35-1.67,1.34-1.6,1.85,0,.31.29,1.21.83.56C41.3,11.71,49.1,8.49,56.06,7.38c3.84-.61,8.07-.63,11.69,1S73.09,13,75,16.13C77,19.48,78.7,23,79,27c.33,4.16-.41,8.44-.74,12.59a68.14,68.14,0,0,0-.17,12,18.43,18.43,0,0,0,.43,2.3.71.71,0,0,0-.1.14,3.75,3.75,0,0,0-.43-.16c-.24-.08-.74-.43-1.1-.35-.23-6-.61-12.06-1.22-18-.44-4.35-1.18-9.11-3.78-12.76s-6.42-4.72-10.59-4.91c-2.16-.1-4.31.07-6.47.12-.75,0-3.06-.43-3.55-.05a1.89,1.89,0,0,0-.35.38A5,5,0,0,0,49.86,18c-2.27-.08-4.59.78-6.77,1.28-2.52.58-5.05,1.08-7.55,1.73-4.14,1.08-8.68,2.36-10.18,6.83-1.6,4.75-1.49,10.75-1.64,15.72v.1a1.11,1.11,0,0,0,0,.88c-.11,4-.13,8,0,12h0c-.74.09-1.55.16-2.37.27-1.9-9.5-3-19.91.47-29.16,1.43-3.78,3.33-8.21,6.57-10.8,1.6-1.29,3.42-1.81,5.28-.79.5.28,1.37,1.47,2,.9s-.7-1.33-1.1-1.58c-8.13-5.1-13.94,11-15.13,16.42a50.65,50.65,0,0,0-.7,14.49c.19,2.43.5,4.85.9,7.26a33.75,33.75,0,0,0,.47,3.5,5.37,5.37,0,0,0-2.73,1.42c-1.72,1.82-1.11,4.87-.42,7S18.65,70,20.61,71a3.14,3.14,0,0,0,2.86.16,2.69,2.69,0,0,0,1.1-.91c.17,1.52.35,3,.56,4.54.62,4.35.5,10,2.56,14s7.12,4.71,11.14,5.11a69.65,69.65,0,0,0,15.4-.6C59.06,92.67,64,92,68.56,90.16c4.27-1.73,7.54-4.5,8.3-9.24a61.38,61.38,0,0,0,.38-11.12,3.45,3.45,0,0,0,.57.43c5.37,3,5.94-5.64,6-8.62A7.06,7.06,0,0,0,80.87,55.32ZM24.12,69.66c-.57-.15-1.42.82-2.2.72a3.63,3.63,0,0,1-2-1.42,11.83,11.83,0,0,1-2.42-5.61c-.4-2.41,0-4.27,2.52-5.11,1-.34,2.37-.11,3.28-.54a2.77,2.77,0,0,0,.43-.32c.13,4.17.39,8.33.83,12.48A.87.87,0,0,0,24.12,69.66ZM25,39.35a4.72,4.72,0,0,0,2.07-.62,14.68,14.68,0,0,1,4.62-1.38,7.58,7.58,0,0,1,2.23,0,2.4,2.4,0,0,1,.67.23A27.87,27.87,0,0,0,27,40.79a16.59,16.59,0,0,0-2.11,1.36C24.91,41.22,25,40.28,25,39.35Zm49.36,45.3c-2.08,3.25-6.09,4.65-9.63,5.62a87.88,87.88,0,0,1-15.39,2.41c-4.95.45-10.14.63-15-.63-5.06-1.3-6.39-4.4-7-9.3A239.44,239.44,0,0,1,24.8,53.1c0-3.2-.05-6.4,0-9.6,1.32-2.14,8.1-4.28,9.51-4.69s3.75-.61,1.31-2c-1.49-.86-3.49-.65-5.1-.34s-3.58.73-4.77,1.74a4.85,4.85,0,0,0-.73.73c0-.54.06-1.09.11-1.63.31-3.41.1-7.65,1.94-10.67,2.08-3.44,7-4.18,10.58-5,2.25-.53,4.51-1,6.75-1.52,1.72-.41,5.49-1.9,7.14-.64s1.19,4.6,1.17,6.26c0,2.67-.33,5.33-.43,8-.19,5,.07,10,.26,15,.15,3.91,1.48,10.91-2.2,13.65-1.5,1.11-3.56,1.17-5.34,1a10.47,10.47,0,0,1-2.23-.35c-.53-.16-2.36-1.53-2.68-1.51-2,.14,1,2,1.61,2.28a12.69,12.69,0,0,0,5.67.66c4.26-.42,6.05-3.62,6.37-7.56.38-4.75-.14-9.62-.3-14.37-.17-5,.08-10,.3-15,.11-2.65.54-6.79-1.45-8.64,4.41.13,9-.83,13.25.47,3.56,1.07,5.92,3.92,7.2,7.32,1.73,4.58,2,9.6,2.22,14.43s.66,9.81.86,14.72c.2,5.11.26,10.21.22,15.32C76.05,75.46,76.81,80.88,74.39,84.65Zm4.45-15.16c-.45-.14-1.09-1-1.64-1.25,0-.55,0-1.09,0-1.63q0-6-.23-12.13c2.12,1,4.45,2,5.36,4.27.83,2.12.43,5.11.09,7.33C82.13,67.89,81.13,70.2,78.84,69.49Z"/><path d="M32.3,70.49c7.11,1.77,14.39.29,21.38-1.3,3.37-.77,6.73-1.59,10.14-2.08,1.76-.25,3.5-.3,5.26-.45,1.39-.12,2.25-.6.56-1.09-2.67-.78-7.11.6-9.77,1.13-3.39.69-6.74,1.56-10.12,2.27a52.5,52.5,0,0,1-9.83,1.27,30.2,30.2,0,0,1-5.78-.47c-.37-.07-1.67-.57-2-.26S31.76,70.36,32.3,70.49Z"/><path d="M31.52,70.87c2.94,2,3,6.52,5.76,8.91s6.76,3.7,10.45,4.27c5.69.87,18.24,2,18.84-6.35a23.08,23.08,0,0,0-.69-5.22,9.75,9.75,0,0,1-.15-2.64c.07-.64.84-2,.62-2.61-.68-1.75-1.73,2.61-1.75,3.07-.09,2.12.76,4.08.91,6.17.59,8.46-12.09,7.32-17.44,6.54-3.91-.57-8.65-2-11.23-5.2-1.38-1.72-1.77-4-2.94-5.85-.32-.5-1.16-1.95-1.83-2C31.6,69.87,30.8,70.36,31.52,70.87Z"/><path d="M36,73.92a108.69,108.69,0,0,1,15.51-2.81c2.43-.32,4.87-.62,7.3-1,.72-.1,5-.4,2.82-1.54-.57-.31-2.94.47-3.63.57-1.22.18-2.43.34-3.65.5-2.44.32-4.87.61-7.3,1s-4.85.74-7.25,1.25c-.71.15-3.68.42-4.09,1C35.54,73.13,35,74.2,36,73.92Z"/><path d="M44.49,81.15c2.15-1,4-2.6,6.17-3.47a5.52,5.52,0,0,1,2.26-.51c1.4.1,1,.6,1.79,1.38,1.54,1.58,3.2,1.34,5,.3,1.12-.64,3.4-2.55.91-2-1.44.33-2.73,2.49-4.51,1.64-.7-.33-.6-1.29-1.13-1.78a3.62,3.62,0,0,0-2.93-.59c-2,.24-3.64,1.38-5.27,2.39-.54.34-2.61,1.15-2.87,1.66S43.62,81.55,44.49,81.15Z"/><path d="M48.93,83.15a91.74,91.74,0,0,0,9.89-1.74A44.91,44.91,0,0,0,63.62,80c.8-.29,3.08-.9,1.54-1.68-.59-.31-3.85,1.33-4.58,1.55-1.66.48-3.34.87-5,1.2s-3.39.59-5.09.82c-.48.07-1.66-.07-1.91.43C48.38,82.61,48.35,83.22,48.93,83.15Z"/><path d="M32.61,51.06c-.46.77-.23,0-.73-.21s-2.34,4,1.18,3.27C36.34,53.44,33.08,50.28,32.61,51.06Zm.16,2a2.57,2.57,0,0,0,.44-.77C33.4,52.71,33.86,52.93,32.77,53.07Z"/><path d="M70.73,50.21a.41.41,0,0,0-.62.18c.13-.68.13-1.51-.57-.73C68.46,50.87,69,54,71,53,72.4,52.26,71.5,49.45,70.73,50.21Z"/>
				</svg>
			</a>

			<nav class="navis"><a href="#site-navigation" class="button" title="Navigate the Site">Menu</a></nav>

			<nav id="masthead--nav" class="sK-nav">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>popular" title="Popular" rel="navigation" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Popular'});">
					<svg class="spin-hover"><use xlink:href="#icon-heartbeat"></svg>
					<span>Popular</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>all" title="Fresh" rel="navigation" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Fresh'});">
					<svg class="spin-hover"><use xlink:href="#icon-air-freshener"></svg>
					<span>Fresh</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>subscribe" title="Subscribe" rel="navigation" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Subscribe'});">
					<svg class="spin-hover"><use xlink:href="#icon-prescription-bottle-alt"></svg>
					<span>Subscribe</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>books" title="Books" rel="navigation" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Books'});">
					<svg class="spin-hover"><use xlink:href="#icon-books"></svg>
					<span>Books</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>about" title="About" rel="navigation" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'About'});">
					<svg class="spin-hover"><use xlink:href="#icon-pencil-alt"></svg>
					<span>About</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" title="Say Hi" rel="navigation" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Say Hi'});">
					<svg class="spin-hover"><use xlink:href="#icon-kiss-wink-heart"></svg>
					<span>Say Hi</span>
				</a>
			</nav><!--/mastheadnav-->
		</div>
	</header><!-- #masthead -->
<!--
	<div id="sideline">
		<span class="chameleon-color">The Official Weblog of Internet Person Sam Killermann</span>
	</div> -->

	<div id="primary" class="content-area">

		<div id="marquee">
			<?php $marquee_latest = new WP_Query(
				array(
					'post_type' => 'post',
					'posts_per_page' => 1,
					'orderby' => 'published',
					'order' => 'DESC',
					'post__not_in' => array( $post->ID )
				)
			);

			if ( is_home() || is_front_page() ) {?>
			<div id="marquee--latest">
				<article id="marquee-<?php the_ID(); ?>" class="marquee-post">
					<a alt="Overthinking everything so you don't have to." href="https://www.samkillermann.com/overthinking-everything-so-you-dont-have-to/" rel="bookmark">Overthinking everything so you don't have to.</a>
					<svg id="speech-bubble" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 11.53"><title>speech-bubble-arrow</title><path d="M0,0H20s-3.78,5.51-8,8C6.61,11.18,0,13,1,10S9,0,0,0Z"/></svg>
				</article>
			</div> <?php

			} elseif ($marquee_latest->have_posts() ) {?>
			<div id="marquee--latest">
				<?php while($marquee_latest->have_posts()) : $marquee_latest->the_post();?>
				<article id="marquee-<?php the_ID(); ?>" class="marquee-post">
					<strong class="chameleon-color">New</strong> <a alt="<?php the_title();?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a>
					<svg id="speech-bubble" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 11.53"><path d="M0,0H20s-3.78,5.51-8,8C6.61,11.18,0,13,1,10S9,0,0,0Z"/></svg>
				</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
			<?php } else {return;} ?>

			<?php if ( is_single() ){
				if (function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				}
			}?>

			<!-- <nav class="site-access">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/tag/patrons-only/" alt="">Patrons-Only 👉</a>
				<a onClick="ga('send', 'event', { eventCategory: 'Sign-up', eventAction: 'button_click', eventLabel: 'Header'});" id="sign-up" href="<?php echo esc_url( home_url( '/' ) ); ?>/sign-up" alt="Sign up">Sign up</a>
			</nav> -->

			<div id="day-or-night" class="color-scheme">
				<button id="day-mode" title="Day Mode">
					<svg><use xlink:href="#icon-sun"></svg>
				</button>
				<button id="night-mode" title="Night Mode">
					<svg><use xlink:href="#icon-moon"></svg>
				</button>
			</div>
		</div><!--/marquee-->

		<section id="content" class="site-content">

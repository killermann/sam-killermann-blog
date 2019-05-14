<?php
/**
 * Template Name: Sections
 *
 * @package Sam Killermann Blog
 */

get_header(); ?>

	<main id="main" class="site-main">
		<article class="archive-header wrap Better Humaning">
			<h1 class="page-title">Better Humaning</h1>
			<div class="archive-description wrap entry-content">
				<?php echo category_description(141); ?>
			</div>
			<hr/>
			<a class="absolute-link" href="<?php echo esc_url( home_url( '/' ) ); ?>better-humaning#latest-posts" rel="navigation" title="Better Humaning by Sam Killermann"></a>
		</article><!-- .page-header -->
		<article class="archive-header wrap Technolophizing">
			<h1 class="page-title">Technolophizing</h1>
			<div class="archive-description wrap entry-content">
				<?php echo category_description(150); ?>
			</div>
			<hr/>
			<a class="absolute-link" href="<?php echo esc_url( home_url( '/' ) ); ?>technolophizing#latest-posts" rel="navigation" title="Technolophizing by Sam Killermann"></a>
		</article><!-- .page-header -->
		<article class="archive-header wrap Adventravel">
			<h1 class="page-title">Adventravel</h1>
			<div class="archive-description wrap entry-content">
				<?php echo category_description(121); ?>
			</div>
			<hr/>
			<a class="absolute-link" href="<?php echo esc_url( home_url( '/' ) ); ?>adventravel#latest-posts" rel="navigation" title="Adventravel by Sam Killermann"></a>
		</article><!-- .page-header -->
	</main><!-- #main -->
<?php
get_footer();

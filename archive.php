<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */

get_header(); ?>

		<main id="main" class="site-main chameleon chameleon-border">

		<?php
		if ( have_posts() ) : ?>

			<header class="archive-header chameleon chameleon-bg">
				<div class="archive-header--inner">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description entry-content">', '</div>' );
					?>
				</div>
			</header><!-- .page-header -->
			<section class="loop">

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-loop', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
			</section><!--/loop-->

		</main><!-- #main -->

<?php
get_sidebar();
get_footer();

<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */

get_header(); ?>

		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<header class="archive-header">
			<?php
				echo '<h1 class="page-title">';
				echo single_term_title();
				echo '</h1>';
				the_archive_description( '<div class="archive-description entry-content">', '</div>' );
			?>
			</header><!-- .page-header -->
			<section class="loop">

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					if ( ! is_single() ) : echo '<div class="loop-content bigpad chameleon-border">'; endif;

					get_template_part( 'template-parts/content', get_post_format() );

					if ( ! is_single() ) : echo '</div><!--loop-content-->'; endif;

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
			</section><!--/loop-->

		</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

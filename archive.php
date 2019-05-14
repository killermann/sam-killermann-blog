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

			<header class="archive-header wrap <?php echo single_term_title();?>">
			<?php
				echo '<h1 class="page-title">';
				echo single_term_title();
				echo '</h1>';
				the_archive_description( '<div class="archive-description wrap entry-content">', '</div><hr/>' );
			?>
			</header><!-- .page-header -->
			<section id="latest-posts" class="loop">

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/loop' );

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

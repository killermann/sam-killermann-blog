<?php
/**
 * Template Name: Articles Page (no other formats)
 *
 * @package Sam Killermann Blog
 */

get_header(); ?>

	<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();?>


		<article id="post-<?php the_ID(); ?>" <?php post_class('bigpad wrap'); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="post-thumbnail chameleon-bg">
				<?php the_post_thumbnail('full');?>
			</div>

			<div class="entry-content type-wrap">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sam-killermann-blog' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
						edit_post_link(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Edit <span class="screen-reader-text">%s</span>', 'sam-killermann-blog' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							),
							'<span class="edit-link">',
							'</span>'
						);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		</article><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile;?>

		<section class="loop">
			<?php
			$temp = $articles_query;
		    $articles_query = null;

			$articles_query_args = array(
				'post_type' => 'post', // if the post type is post
				'posts_per_page' => 6,
				'orderby' => 'date',
				'tax_query' => array(
                    array(
                        'taxonomy' => 'post_format',
                        'field' => 'slug',
                        'terms' => array(
							'post-format-quote',
							'post-format-link',
							'post-format-status',
							'post-format-image',
							'post-format-transcript',
							'post-format-aside',
							'post-format-gallery',
							'post-format-chat',
							'post-format-audio'
						),
	                    'operator' => 'NOT IN',
                    )
                ),
				'paged' => $paged,
			);
			$articles_query = new WP_Query( $articles_query_args );

			if ( $articles_query->have_posts() ) {

				$count = 0;

				while($articles_query->have_posts()) : $articles_query->the_post();

				if ( $count == 3 ) :

					get_loop_mailing_lists();
					get_template_part( 'template-parts/loop' );

				else :

					get_template_part( 'template-parts/loop' );

				endif;

				$count++;

				endwhile;

				the_posts_navigation();

				$articles_query = null;
				$articles_query = $temp;  // Reset

			} else {

				get_template_part( 'template-parts/content', 'none' );

			} ?>

		</section>

	</main><!-- #main -->
<?php
get_sidebar();
get_footer();

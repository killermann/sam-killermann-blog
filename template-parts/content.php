<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('
					<p id="breadcrumbs">','</p>
				');
			};
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>
	</header><!-- .entry-header -->

	<?php sam_killermann_blog_post_thumbnail(); ?>

	<section class="entry-content">
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<aside class="entry-meta">
			<?php
				sam_killermann_blog_posted_on();
				sam_killermann_blog_posted_by();
			?>
		</aside><!-- .entry-meta -->
		<main>
			<?php
			endif;
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sam-killermann-blog' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sam-killermann-blog' ),
					'after'  => '</div>',
				) );
			?>
		</main>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php sam_killermann_blog_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

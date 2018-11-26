<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wrap'); ?>>

	<header class="entry-header">
		<?php
		sam_killermann_blog_primary_category();
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="h1 entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( has_excerpt() ) :
			echo '<p class="excerpt">';
			echo get_the_excerpt();
			echo '</p>';
		endif;
		sam_killermann_blog_posted_on();
		sam_killermann_blog_posted_by();
		sam_killermann_blog_post_thumbnail();

		?>
	</header><!-- .entry-header -->

	<section class="entry-content text-wrap">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading &rarr; <span class="screen-reader-text"> "%s"</span>', 'sam_killermann_blog' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sam_killermann_blog' ),
				'after'  => '</div>',
			) );

		?>
	</section><!-- .entry-content -->
	<footer class="entry-footer text-wrap">
		<?php sam_killermann_blog_entry_footer();?>
	</footer>

</article><!-- #post-<?php the_ID(); ?> -->

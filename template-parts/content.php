<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('chameleon-border'); ?>>
	<?php
		if ( is_single() ){
			if (function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			}
		}
		?>

	<?php sam_killermann_blog_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
		sam_killermann_blog_primary_category();
		
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>
	</header><!-- .entry-header -->


	<section class="entry-content">
		<?php
		if ( 'post' == get_post_type() ) : ?>
		<aside class="entry-meta">
			<?php
			if (is_single()){
				if ( has_excerpt( $post->ID ) ) {
					echo '<div class="excerpt chameleon-border">';
					the_excerpt();
					echo '</div>';
				}
			}
			sam_killermann_blog_posted_on();
			sam_killermann_blog_posted_by();
			?>
		</aside><!-- .entry-meta -->
		<?php endif;?>
		<main>
		<?php
			if (is_single()){
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sam_killermann_blog' ),
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
			}
			else {
				the_excerpt();
			}

		?>
		</main>
	</section><!-- .entry-content -->

	<?php if (is_single()){?>
		<footer class="entry-footer">

			<?php sam_killermann_blog_entry_footer();?>
		</footer>
	<?php }
	else { ?>
		<footer class="entry-footer chameleon-bg grid grid--center">
			<div class="grid-cell">
				<?php sam_killermann_blog_entry_footer(); ?>
			</div>
			<a href="<?php the_permalink(); ?>" class="readMore grid-cell grid-cell--autoSize">
				Read More &rarr;
			</a>
		</footer><!-- .entry-footer -->
	<?php }?>

</article><!-- #post-<?php the_ID(); ?> -->

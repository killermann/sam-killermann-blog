<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard chameleon-border'); ?>>
	<?php sam_killermann_blog_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
			sam_killermann_blog_primary_category();

			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
		<span class="entry-meta">
			<?php
				sam_killermann_blog_posted_on();
				sam_killermann_blog_posted_by();
			?>
		</span><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<section class="entry-content">
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<main>
			<?php
			endif;
				the_excerpt();
			?>
		</main>
	</section><!-- .entry-content -->

	<footer class="entry-footer chameleon-bg grid grid--center">
		<div class="grid-cell">
			<?php sam_killermann_blog_entry_footer(); ?>
		</div>
		<a href="<?php the_permalink(); ?>" class="readMore grid-cell grid-cell--autoSize">
			Read More &rarr;
		</a>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

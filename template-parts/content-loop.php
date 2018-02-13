<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard chameleon-border chameleon'); ?>>
	<?php sam_killermann_blog_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
	</header><!-- .entry-header -->

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
				the_excerpt();
			?>
		</main>
	</section><!-- .entry-content -->

	<footer class="entry-footer chameleon chameleon-bg grid grid--center">
		<div class="grid-cell">
			<?php sam_killermann_blog_entry_footer(); ?>
		</div>
		<a href="<?php the_permalink(); ?>" class="readMore grid-cell grid-cell--autoSize">
			Read More &rarr;
		</a>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

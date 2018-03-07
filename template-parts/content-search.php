<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package random
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard chameleon-border'); ?>>

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
		<main>
			<?php
				the_excerpt();
			?>
		</main>
	</section><!-- .entry-content -->

	<footer class="entry-footer chameleon-bg grid grid--center">
		<div class="grid-cell">
			<?php sam_killermann_blog_entry_footer(); ?>
		</div>
		<a href="<?php the_permalink(); ?>" class="readMore grid-cell grid-cell--autoSize">
			Go &rarr;
		</a>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php
/**
 * Template part for display Quote Post Formats
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('chameleon-border'); ?>>
	<?php sam_killermann_blog_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
		sam_killermann_blog_primary_category();
		echo ' | ';
		echo '<span class="primary-category"><a href="' . esc_url( home_url() ) . '/type/status" rel="bookmark" title="View other Statuses">Status</a></span>';
		?>
	</header><!-- .entry-header -->

	<section class="entry-content">
		<main>
			<p><strong><?php the_title();?></strong></p>
			<?php the_content();?>
		</main>
	</section><!-- .entry-content -->

	<footer class="entry-footer chameleon-bg grid grid--center">
		<div class="grid-cell">
			<?php
			sam_killermann_blog_posted_on();
			sam_killermann_blog_posted_by();
			sam_killermann_blog_entry_footer();
			?>
		</div>
		<?php if( ! is_singular()) : ?>
		<div class="grid-cell grid-cell--autoSize">
			<a href="<?php the_permalink(); ?>">
				Permalink &rarr;
			</a>
		</div>
		<?php endif;?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

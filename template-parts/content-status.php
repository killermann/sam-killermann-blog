<?php
/**
 * Template part for display Quote Post Formats
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wrap text-wrap'); ?>>
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

	<footer class="entry-footer">
		<div class="status-caption grid grid--alignCenter">
			<div class="grid-cell">
				<svg id="status-speech-bubble"><use xlink:href="#speech-bubble"></svg>
				<?php
				sam_killermann_blog_posted_on();
				sam_killermann_blog_posted_by();
				?>
			</div>
			<?php if( ! is_single()) : ?>
			<div class="grid-cell grid-cell--autoSize">
				<a href="<?php the_permalink(); ?>">
					Permalink &rarr;
				</a>
			</div>
			<?php endif;?>
		</div>

		<?php sam_killermann_blog_entry_footer();?>

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

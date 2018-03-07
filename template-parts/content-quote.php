<?php
/**
 * Template part for display Quote Post Formats
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
			if ( is_main_query() ){
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
			} else {
				sam_killermann_blog_primary_category();
				echo ' | Quote';
			}
		?>
	</header><!-- .entry-header -->

	<section class="entry-content">
		<main>
			<?php
			the_content();
			?>
		</main>
	</section><!-- .entry-content -->

	<footer class="entry-footer chameleon-bg grid grid--center">
		<div class="grid-cell">
			<span class="entry-meta">
				<?php
					sam_killermann_blog_posted_on();
					sam_killermann_blog_posted_by();
				?>
			</span><!-- .entry-meta -->
			<?php sam_killermann_blog_entry_footer(); ?>
		</div>
		<a href="<?php the_permalink(); ?>" class="readMore grid-cell grid-cell--autoSize">
			Read More &rarr;
		</a>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

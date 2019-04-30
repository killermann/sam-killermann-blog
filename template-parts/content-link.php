<?php
/**
 * Template part for displaying links
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wrap chameleon-border'); ?>>

	<header class="entry-header">
		<?php
		if ( is_single() ) :
			echo '<span class="primary-category chameleon-color"><a href="' . esc_url( home_url() ) . '/type/link" rel="bookmark">Link</a></span>';
		else :
			echo '<span class="primary-category chameleon-color">Link</span>';
		endif;
		$content = get_the_content();
		$has_url = get_url_in_content($content);
		$link = $has_url ? $has_url : apply_filters('the_permalink', get_permalink());

		if ( is_single() ) :
			the_title( '<h1 class="entry-title"><a title="Visit ' . $link .'" href="' . $link . '" target="_blank">', ' <span class="chameleon-color">&rarr;</span></a></h1>' );
		else :
			the_title( '<h2 class="entry-title"><a title="Visit ' . $link .'" href="' . $link . '" target="_blank">', ' <span class="chameleon-color">&rarr;</span></a></h2>' );
		endif;
		if ( has_excerpt() ) :
			echo '<p class="excerpt">';
			echo get_the_excerpt();
			echo '</p>';
		endif;
		sam_killermann_blog_posted_on();
		sam_killermann_blog_post_thumbnail();

		?>
	</header><!-- .entry-header -->

	<section class="entry-content">
		<?php
			if ( !has_excerpt() ): the_content(); endif;
		?>
	</section><!-- .entry-content -->
	<footer class="entry-footer">
		<?php sam_killermann_blog_entry_footer();?>
	</footer>
	<?php if ( !is_single() ){ ?>
		<a class="absolute-link" href="<?php echo $link ?>" title="<?php echo the_title();?>" rel="bookmark"></a>
	<?php }  ?>

</article><!-- #post-<?php the_ID(); ?> -->

<?php
/*
Template Name: Homepage
*/

get_header(); ?>

	<?php
	$home_cover_args = array(
		'post_type' => 'post', // if the post type is post
		'posts_per_page' => 1,
		'orderby' => 'date',
		'tag_slug__in' => 'cover-stories',
		'ignore_sticky_posts' => 1
	);

	$home_cover_story = new WP_Query( $home_cover_args );

	$home_cover_ID = $home_cover_story->post->ID;

	if ( $home_cover_story->have_posts() ) {?>

	<section id="home-cover-story" class="loop">

		<?php while($home_cover_story->have_posts()) : $home_cover_story->the_post();

			get_template_part( 'template-parts/loop' );

		endwhile; ?>

	</section>

	<?php } wp_reset_query(); ?>

	<section class="loop">

		<?php
		$home_recent_args = array(
			'post_type' => 'post', // if the post type is post
			'posts_per_page' => 10,
			'orderby' => 'date',
			'post__not_in' => array (
				$home_cover_ID,
			)
		);

		$home_recent_articles = new WP_Query( $home_recent_args );

		if ( $home_recent_articles->have_posts() ) {

			$count = 0;

			while($home_recent_articles->have_posts()) : $home_recent_articles->the_post();

			if ( $count == 0 ) :

				get_loop_post_formats();

				get_template_part( 'template-parts/loop' );

			elseif ( $count == 5 ) :

				get_loop_mailing_lists();

				get_template_part( 'template-parts/loop' );

			else :

				get_template_part( 'template-parts/loop' );

			endif;

			$count++;

			endwhile;

		} else {

			get_template_part( 'template-parts/content', 'none' );

		} ?>

	</section>


<?php get_footer();?>

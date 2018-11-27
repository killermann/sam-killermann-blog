<?php
/*
Template Name: Homepage
*/

get_header(); ?>

	<section class="loop">

		<?php
		$home_recent_args = array(
			'post_type' => 'post', // if the post type is post
			'posts_per_page' => 10,
			'orderby' => 'date',
			// 'tax_query' => array(
			// 	'relation' => 'AND',
			// 	array(
			// 		'taxonomy' => 'post_tag',
			// 		'field'    => 'slug',
			// 		'terms'    => 'patrons-only',
			// 		'operator' => 'NOT IN',
			// 	),
			// 	array(
			// 		'taxonomy' => 'post_format',
			// 		'field' => 'slug',
			// 		'terms' => array (
			// 			'post-format-audio',
			// 			'post-format-chat',
			// 			'post-format-gallery',
			// 			'post-format-image',
			// 			'post-format-link',
			// 			'post-format-quote',
			// 			'post-format-status',
			// 			'post-format-video'
			// 		),
			// 		'operator' => 'NOT IN',
			// 	)
			// )
		);

		$home_recent_articles = new WP_Query( $home_recent_args );

		if ( $home_recent_articles->have_posts() ) {

			$count = 0;

			while($home_recent_articles->have_posts()) : $home_recent_articles->the_post();

			if ( $count == 1 ) :

				get_loop_post_formats();

			elseif ( $count == 4 ) :

				get_loop_mailing_lists();

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

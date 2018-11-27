<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */

get_header(); ?>

	<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile;?>

		<section class="loop">
			<?php
			$temp = $wp_query;
		    $wp_query = null;

			$articles_query_args = array(
				'post_type' => 'post', // if the post type is post
				'posts_per_page' => 7,
				'paged' => $paged,
				'orderby' => 'date',
				'tax_query' => array(
					'relation' => 'AND',
					array(
						'taxonomy' => 'post_tag',
						'field'    => 'slug',
						'terms'    => 'patrons-only',
						'operator' => 'NOT IN',
					),
					array(
						'taxonomy' => 'post_format',
						'field' => 'slug',
						'terms' => array (
							'post-format-audio',
							'post-format-chat',
							'post-format-gallery',
							'post-format-image',
							'post-format-link',
							'post-format-quote',
							'post-format-status',
							'post-format-video'
						),
						'operator' => 'NOT IN',
					)
				)
			);
			$wp_query = new WP_Query( $articles_query_args );

			if ( $wp_query->have_posts() ) {

				$count = 0;

				while($wp_query->have_posts()) : $wp_query->the_post();

				if ( $count == 3 ) :

					get_loop_mailing_lists();

				else :

					get_template_part( 'template-parts/loop' );

				endif;

				$count++;

				endwhile;

				the_posts_navigation();

				$wp_query = null;
				$wp_query = $temp;  // Reset

			} else {

				get_template_part( 'template-parts/content', 'none' );

			} ?>

		</section>

	</main><!-- #main -->
<?php
get_sidebar();
get_footer();

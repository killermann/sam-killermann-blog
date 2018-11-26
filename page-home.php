<?php
/*
Template Name: Homepage
*/

get_header(); ?>

	<section class="loop">

		<?php
		$home_recent_args = array(
			'post_type' => 'post', // if the post type is post
			'posts_per_page' => 4,
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

		$home_recent_articles = new WP_Query( $home_recent_args );

		if ( $home_recent_articles->have_posts() ) {

			$count = 0;

			while($home_recent_articles->have_posts()) : $home_recent_articles->the_post();

			if ($count == 2) : ?>

			<section class="chameleon-bg">
				<div class="email-interstitial bigpad">
					<h3 class="chameleon-color">
						Want emails from me?<br/>
						<strong>Here are two options.</strong>
					</h3>
					<div class="button-group grid medium-grid--fit small-grid--full">
						<div class="grid-cell">
							<a class="button" href="https://feedburner.google.com/fb/a/mailverify?uri=samkillermannblog" target="_blank">
								Get Posts in Your Inbox
							</a>
							<div class="description">Powered by Google's Feedburner, totally free for both of us. You'll only get an email when there is a new post here.</div>
						</div>
						<div class="grid-cell">
							<a class="button button-secondary" target="_blank" href="https://app.convertkit.com/landing_pages/402557?v=7" title="Sam Killermann Email List">
								Join my Mailing List
							</a>
							<div class="description">Get emails about all of my projects, social good stuff, and activism. I send a few emails a month -- tops.</div>
						</div>
					</div>
				</div>
				<!--/email-inter-->
			</section>

			<?php endif;

			if ($count == 6) :?>

				<div class="wrap">
					<?php getMailingList();?>
				</div>

				<?php

			else :
				if ( ! is_single() ) : echo '<div class="loop-content bigpad chameleon-border">'; endif;

				if ( has_category( 'patrons-only' ) ) :
					echo '
					<a class="sign-post for-patrons-only" href="https://patreon.com/killermann" title="Content for Patrons Only">
						<div class="sign-title">Patrons Only</div>
						<div class="sign-description">No General Admittance</div>
					</a>';
				endif;

				get_template_part( 'template-parts/content', get_post_format() );

				if ( ! is_single() ) : echo '</div><!--loop-content-->'; endif;

			endif;

			$count++;

			endwhile;

		} else {

			get_template_part( 'template-parts/content', 'none' );

		} ?>

	</section>

	<section class="loop-content">
		<div id="svg-playground" class="bigpad">
		<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" class="chameleon-fill" viewBox="0 0 100 100"><title>sk-scribble-1</title><path d="M95.67,12.86C94.89,9,91,8.31,87.73,7.39A103.85,103.85,0,0,0,55.54,3.62c-3.93.16-5.37.35-7.92,3.1-1.34,1.44.45.59-2.44,2.13-2.62,1.39-3.22.45-5.67-.8a54.91,54.91,0,0,0-6.89-3.16C25.77,2.5,16.4-.65,11.48,6.62,8.55,11,7.22,16.9,5.7,21.85A70.69,70.69,0,0,0,2.29,39.72c-.19,4.76.26,8.58,3.71,12a33,33,0,0,0,10.81,7,28.61,28.61,0,0,1-3.39,5.95c-.89,1.21-2.22,2.46-2.58,4-.74,3.21,2,6.25,4.4,8,6.11,4.43,15,4.68,22.71,4.06-.35.56-.72,1.1-1.12,1.63-2.24,3-3.43,2.55-7.09,2.2L13.83,83c-3.2-.3-3.18,4.7,0,5,6.73.65,14.56,2.53,21.29,1.92,4.74-.42,7.6-7.31,9.64-10.94.84-1.49-.18-4-2.16-3.76-7.07.85-15.84,1.61-22.48-1.54-1.45-.69-4.06-1.92-4-3.77,0-1.19,1.28-2.13,2-3.1a34.08,34.08,0,0,0,4.36-8.85,2.55,2.55,0,0,0-1.75-3.08C15.34,53,8.28,49.6,7.29,43.41c-.9-5.62.94-12.19,2.44-17.56A124,124,0,0,1,14.27,12.2c1.47-3.6,3.56-5.49,7.58-5a47.11,47.11,0,0,1,8.59,2.21c6.32,2.09,14.37,9.56,20.19,2.51.47-.57.44-1.13.81-1.66C53,8.12,52.73,9.11,54.63,8.66c2.4-.58,5.72-.15,8.19-.07a96.86,96.86,0,0,1,17.39,2.1c2.47.52,5.63.92,7.94,2,1.65.8,2.22-.11,2.5,2.69A19.15,19.15,0,0,1,90,19.05c-.91,5.07-1.62,10.19-2.15,15.32-1.17,11.3-.4,22.82-2.09,34.05-.26,1.7-.3,5.9-1.55,7.08-1.47,1.39-4.91,1.2-6.8,1.24-.22,0-.44,0-.66,0q.65-7.49,1.3-15a2.49,2.49,0,0,0-2.5-2.5L60.73,60.55c-.58.05-1.18.12-1.78.19a13.31,13.31,0,0,0-1-7.34c-2.36-5.26-6.69-5.92-11.67-5.85a38,38,0,0,1,.91-9.85c1.8-.54,2.84-3,1.2-4.15l0-.08,1.4,1.31A64.94,64.94,0,0,0,47,40.72v0h0c-.08.2-.17.4-.26.6C45.66,44,50,45.7,51.3,43.27q1.31-2.31,2.42-4.68c3,3,6,6.11,8.89,9.2a2.6,2.6,0,0,0,3,.39C71.23,45.74,77.16,43,80.27,37.4c2-3.64,3.25-9.61.2-13.14a5.8,5.8,0,0,0-5.17-1.78c.13-3.64-1.69-7.37-5.93-6.92-4.06.42-8.57,4.93-11.64,8.36a27.6,27.6,0,0,0-.39-6.11c-.33-1.88-3-2.37-4.18-1.11A43.36,43.36,0,0,0,46.89,25,87,87,0,0,0,32.06,14.35C20.35,7.84,14,26.27,13.48,35.18c-.75,14.35,10.15,18.92,22.88,18,1.68-.12,3.56-.4,5.46-.61l1,.44a3,3,0,0,0,3.37-.68,15.16,15.16,0,0,1,2.38.21c4.52.81,6.38,4.53,5.22,8.77a20.62,20.62,0,0,1-5.62-.23c-3.26-.67-6.07-1.93-9.47-1.92a22.77,22.77,0,0,0-10.43,2.77,2.52,2.52,0,0,0-.9,3.42C30.1,70.32,35,75,41,75.12A19.29,19.29,0,0,0,55.6,68.35,14.68,14.68,0,0,0,57.19,66c5.2-.38,10.41-1,15.59-1.48l-1,11.39c-2.77-.64-5.55-1.28-8.19-.38-6.05,2-9.09,11.5-7.39,17.28,1,3.35,3.73,4.41,6.95,4.64s9.19.65,11.31-2.44S76,85.42,76.29,81.59a37.21,37.21,0,0,0,6.8-.5c3.12-.5,4.77-1.23,5.91-4.26C90.83,72,91.14,66.09,91.44,61c.69-11.76.71-23.42,2.45-35.11C94.47,21.94,96.48,16.82,95.67,12.86Zm-58,32.28C35,43.89,31.17,43,30.09,40.2c-1.66-4.27,2-6.32,5.95-5.56a42.22,42.22,0,0,1,6.34,1.75A40.81,40.81,0,0,0,41.3,46.82ZM77.13,30.47C77.82,36.88,70.35,40.67,65,43l-3.06-3.23a2.31,2.31,0,0,0,3-.34c3.31-3.14,7-7.11,9-11.53C75.47,27.52,76.86,28,77.13,30.47ZM63.48,25.34a23.35,23.35,0,0,1,4.29-3.54C71,20,70.7,22,69.84,24.22l-.67.37A17.48,17.48,0,0,0,60.74,37,2.83,2.83,0,0,0,61.12,39c-1.61-1.69-3.24-3.39-4.9-5.07A47.31,47.31,0,0,1,63.48,25.34ZM52.73,25.1a26.66,26.66,0,0,1-.86,4.5l-1.19-1.13A36.49,36.49,0,0,1,52.73,25.1ZM20.46,44.39c-5-6-1-17.44,2.74-23s8.12-1.79,12.09,1a110.83,110.83,0,0,1,9.21,7.4c-.24.57-.46,1.16-.68,1.75a32.2,32.2,0,0,0-11.28-2.41c-4.25,0-6.27,2.93-7.48,6.73C23,42.42,27,46,32.14,48.56,27.61,48.59,23.28,47.78,20.46,44.39ZM33.22,65.2a16.66,16.66,0,0,1,10.23-.33,31.09,31.09,0,0,0,7.23,1.44,14.74,14.74,0,0,1-7,3.53C39.23,70.73,35.71,68.5,33.22,65.2ZM70.82,87c-.38,4.31-2.69,6-6.84,5.43-4-.53-3.22-3.43-2.46-6.59,1-4.2,3.4-6.28,7.94-5.2.63.15,1.26.28,1.88.4Q71.07,84,70.82,87Z"/></svg>
	</div>
	</section>



	<section id="homeContent" class="grid guttersXl medium-grid--fit">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
	</section>


<?php get_footer();?>

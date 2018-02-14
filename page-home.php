<?php
/*
Template Name: Homepage
*/

get_header(); ?>

	<section id="hero" class="grid grid--full grid--center medium-grid--fit chameleon chameleon-bg">
		<div class="hero--text grid-cell">
			<h2>Hi there! I’m Sam and I love making things.</h2>
			<p>
				Elsewhere, I've created a bunch of projects that have reached hundreds of millions of people, been featured in TIME, the New York Times, the Atlantic, NatGeo, &amp; other fancy places, and I've been living as a professional comedian / author / activist person for almost a decade.
			</p>
			<p>
				Here, I write about things like happiness, technology, doing-it-yourself, creativity, &amp; hummus.
			</p>
		</div>
		<div class="hero--image">
			<img src="http://u1kwao9i7u9xyle2hibw4g6h.wpengine.netdna-cdn.com/wp-content/themes/ipm4theme/library/images/hi-im-sam-bottom-shadow.png"/>
		</div>
		<div id="heroCTA" class="grid grid--center grid--fit">
			<a href="" alt="Sign in" class="button grid-cell">
				<strong>Sign in</strong>
				<span>if you already have an account</span>
			</a>
			<a href="" alt="" class="button grid-cell">
				<strong>Sign up</strong>
				<span>to get access to the Patron-only stuff</span>
			</a>

				<a href="" alt="Sign in" class="button grid-cell">
					<strong>Start Reading</strong>
					<span>if that's more your style</span>
				</a>
	</section>
	<section id="latest" class="grid">
		<aside class="grid-cell">
			Categories
		</aside>
		<main class="loop grid-cell">
			<h2>Recently Posted</h2>
			<?php $home_query = new WP_Query(
				array(
					'posts_per_page' => 2,
					'post_type' => 'post',
					'orderby' => 'published',
					'order' => 'DESC'
				)
			);

			while($home_query->have_posts()) : $home_query->the_post();

				get_template_part( 'template-parts/content-loop', get_post_format() );

			endwhile; wp_reset_postdata(); ?>
		</main>
	</section>
	<section id="subscribe" class="subscribe--home">
		<a href="" alt="">Join my mailing list</a>
	</section>

	<main id="home">

		<section id="homeContent" class="grid guttersXl medium-grid--fit">
			<main class="grid-cell">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</main>
			<aside class="grid-cell">
				<?php get_sidebar();?>
			</aside>
		</section>

	</main><!-- #main -->

<?php get_footer();

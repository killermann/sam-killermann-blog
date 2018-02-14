<?php
/*
Template Name: Homepage
*/

get_header(); ?>

	<section class="hero">
		<div class="hero--section grid grid--full grid--center medium-grid--fit chameleon chameleon-bg">
			<div class="hero--text grid-cell">
				<h2>Hi there! I’m Sam and I love making things.</h2>
				<p>
					Elsewhere, I've created a bunch of projects that have reached hundreds of millions of people, been featured in TIME, the New York Times, the Atlantic, NatGeo, &amp; other fancy places, and I've been living as a professional comedian / author / activist person for almost a decade.
				</p>

				<p>Oh, and before you ask: yes, "Killermann" is my real last name. (sorry<a class="asterisk" href="#asterisk">&#42;</a>)</p>

			</div>
			<div class="hero--image">
				<img class="spin" alt="Sam Killermann's Floating Head" src="<?php echo get_template_directory_uri();?>/img/sam-killermann-headshot-doodle-500.png">
			</div>
		</div><!--hero--section-->
		<div class="hero--section hero--cta grid grid--full grid--center medium-grid--fit chameleon chameleon-border">
			<p class="chameleon chameleon-color">
				Here, I write about how to make things like I've made them, by focusing on topics like happiness, technology, doing-it-yourself, creativity, &amp; hummus.
			</p>
			<div class="hero--cta--buttons grid grid--center grid--fit">
				<a href="login" alt="Sign in" class="button chameleon chameleon-bg grid-cell">
					<strong>Sign in</strong>
					<span>if you already have an account</span>
				</a>
				<a href="sign-up" alt="Sign up" class="button chameleon chameleon-bg grid-cell">
					<strong>Sign up</strong>
					<span>to access the Patron-only stuff</span>
				</a>
				<a href="posts" alt="Sign in" class="button chameleon chameleon-bg grid-cell">
					<strong>Start Reading</strong>
					<span>if you're not big on "accounts"</span>
				</a>
			</div><!--/buttons-->
		</div><!--/hero--cta-->
	</section><!--/hero-->
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
	<div id="asterisk">
		<p>&#42; Not sorry.</p>
	</div>

<?php get_footer();

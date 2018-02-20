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
					Elsewhere, I've created a bunch of projects that have reached hundreds of millions of people, been featured in TIME, the New York Times, the Atlantic, NatGeo, &amp; other fancy places, and I've been living as a professional author / activist / comedian person for almost a decade.
				</p>

				<p>Oh, and before you ask: yes, "Killerman<u>n</u>" is my real last name. (sorry<a class="asterisk" href="#asterisk">&#42;</a>)</p>

			</div>
			<div class="hero--image">
				<img class="spin" alt="Sam Killermann's Floating Head" src="<?php echo get_template_directory_uri();?>/img/sam-killermann-headshot-doodle-500.png">
			</div>
		</div><!--hero--section-->
		<div class="hero--section hero--cta grid grid--full grid--center medium-grid--fit chameleon chameleon-border">
			<p class="chameleon chameleon-color">
				Here, I write articles for you focusing on topics like happiness, technology, doing-it-yourself, creativity, &amp; hummus.
			</p>
			<div class="hero--cta--buttons grid grid--center grid--fit">
				<a href="wp-admin" alt="Sign in" class="button chameleon chameleon-bg grid-cell">
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
	<section id="latest" class="grid grid--full large-grid--fit">
		<main class="grid-cell">
			<h2 class="page-subtitle">The Latest</h2>
			<?php $home_latest = new WP_Query(
				array(
					'posts_per_page' => 1,
					'post_type' => 'post',

					'category__not_in' => 'patrons-only',
					'orderby' => 'published',
					'order' => 'DESC'
				)
			);

			while($home_latest->have_posts()) : $home_latest->the_post();?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('latest--single'); ?>>
				<div class="chameleon chameleon-bg">
					<?php sam_killermann_blog_post_thumbnail(); ?>
				</div>

				<header class="entry-header">

					<h2 class="entry-title">

						<a alt="<?php the_title();?>" href="<?php the_permalink(); ?>" rel="bookmark">
							<?php the_title();?>
						</a>
					</h2>

					Posted in <?php
						sam_killermann_blog_primary_category();
					?> on

					<?php
						sam_killermann_blog_posted_on();
						sam_killermann_blog_posted_by();
					?>
				</header><!-- .entry-header -->

				<section class="entry-content">
					<?php
					if ( 'post' === get_post_type() ) : ?>
					<aside class="entry-meta">

					</aside><!-- .entry-meta -->
					<main>
						<?php
						endif;
							the_content( sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sam-killermann-blog' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							) );


						?>
					</main>
				</section><!-- .entry-content -->

				<footer class="entry-footer">
				</footer><!-- .entry-footer -->
			<?php endwhile; wp_reset_postdata(); ?>


		</main>
		<aside class="loop grid-cell">
			<h2 class="page-subtitle">Super Fresh</h2>
			<?php $home_recent = new WP_Query(
				array(
					'posts_per_page' => 3,
					'offset' => '1',
					'post_type' => 'post',
					'orderby' => 'published',
					'order' => 'DESC'
				)
			);

			while($home_recent->have_posts()) : $home_recent->the_post();

				get_template_part( 'template-parts/content-loop', get_post_format() );

			endwhile; wp_reset_postdata(); ?>
		</aside>
	</section>
	<section id="subscribe" class="subscribe--home chameleon chameleon-bg">
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
		</section>

	</main><!-- #main -->
	<section id="later">
		<div class="text-center">
			<h2 class="page-subtitle">Aging like a fine wine</h2>
		</div>
		<div class="loop">
			<?php $home_all = new WP_Query(
				array(
					'posts_per_page' => 10,
					'offset' => '4',
					'post_type' => 'post',
					'orderby' => 'published',
					'order' => 'DESC'
				)
			);

			while($home_all->have_posts()) : $home_all->the_post();

				get_template_part( 'template-parts/content-loop', get_post_format() );

			endwhile; wp_reset_postdata(); ?>
		</div>
	</section>
	<div id="asterisk">
		<p>&#42; Not sorry.</p>
	</div>

<?php get_footer();

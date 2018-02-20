<?php
/*
Template Name: Sign-Up Page
*/

get_header(); ?>

	<section class="hero">
		<div class="hero--section grid grid--full grid--center chameleon chameleon-bg">
			<div class="hero--text grid-cell">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>

		</div><!--hero--section-->

	</section><!--/hero-->
	<section id="signup-options">
		<div class="grid">
			<div id="signup-options--patreon" class="grid-cell option chameleon-border chameleon">
				<div class="chameleon-bg chameleon chameleon-color">
					<h3>
						Patreon.com
						<small>$1+ per Month</small>
					</h3>
				</div>
				<ul>
					<li>
						<strong>Perk 1</strong>
						Here's the decription
					</li>
					<li>
						<strong>Perk 1</strong>
						Here's the decription
					</li>
					<li>
						<strong>Perk 1</strong>
						Here's the decription
					</li>
					<li>
						<strong>Perk 1</strong>
						Here's the decription
					</li>
					<li>
						<strong>Perk 1</strong>
						Here's the decription
					</li>
					<li>
						<strong>Perk 1</strong>
						Here's the decription
					</li>
				</ul>
				<a class="button" alt="" href="">Become a Patron</a>
			</div>
			<div id="signup-options--mailing-list" class="grid-cell option chameleon-border chameleon">
				<div class="chameleon-bg chameleon chameleon-color">
					<h3>
						Mailing List
						<small>Free Ninety-Nine</small>
					</h3>
				</div>
				<ul>
					<li>
						<strong>Perk 1</strong>
						Here's the decription
					</li>
					<li>
						<strong>Perk 1</strong>
						Here's the decription
					</li>
					<li>
						<strong>Perk 1</strong>
						Here's the decription
					</li>
					<li>
						<strong>Perk 1</strong>
						Here's the decription
					</li>
				</ul>
				<a class="button" alt="" href="">Join the Mailing List</a>
			</div>
		</div><!--/options-->

	</section>

	<section id="patrons-only">
		<div class="text-center">
			<h2 class="page-subtitle">Patron-Only Smörgåsbord</h2>
		</div>
		<div class="loop">
			<?php $home_all = new WP_Query(
				array(
					'post_type' => 'post',
					'tag' => 'patrons-only',
					'orderby' => 'published',
					'order' => 'DESC'
				)
			);

			while($home_all->have_posts()) : $home_all->the_post();

				get_template_part( 'template-parts/content-loop', get_post_format() );

			endwhile; wp_reset_postdata(); ?>
		</div>
	</section>

<?php get_footer();

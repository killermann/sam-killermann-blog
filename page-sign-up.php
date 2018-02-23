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
			<div id="signup-options--sambassador" class="grid-cell option chameleon-border chameleon">
				<div class="chameleon-bg chameleon chameleon-color">
					<h3>
						SAMbassador
						<small>$20 per Month</small>
					</h3>
				</div>
				<ul>
					<li>
						<strong>Every 3 months, I'll send you a package with a thing I made, like:</strong>
					</li>
					<li>
						<span class="icon">👚</span>
						<span>Shirts (sometimes in exclusive colors or limited runs)</span>
					</li>
					<li>
						<span class="icon">📚</span>
						<span>Signed copies of my books (eventually, you'll get all my books)</span>
					</li>
					<li>
						<span class="icon">🖼</span>
						<span>Prints (screen-printed artwork)</span>
					</li>
					<li>
						<span class="icon">🎨</span>
						<span>Stickers (my addiction)</span>
					</li>
					<li>
						<span class="icon">✅</span>
						<span>Plus, receive all Member / Supporter perks</span>
					</li>
				</ul>
				<a class="button" alt="Sign up on Patreon" href="https://www.patreon.com/bePatron?c=1432684&rid=2396885">Become SAMbassador</a>
			</div>
			<div id="signup-options--patreon" class="grid-cell option chameleon-border chameleon">
				<div class="chameleon-bg chameleon chameleon-color">
					<h3>
						Member / Supporter
						<small>$1+ per Month</small>
					</h3>
				</div>
				<ul>
					<li>
						<span class="icon">🔐</span>
						<span>Locked content on this site</span>
					</li>
					<li>
						<span class="icon">💬</span>
						<span>Comments &amp; discussion</span>
					</li>
					<li>
						<span class="icon">👓</span>
						<span>Patron-only feed on Patreon</span>
					</li>
					<li>
						<span class="icon">👋</span>
						<span>Say "Hi" to me and ask questions</span>
					</li>
					<li>
						<span class="icon">🏆</span>
						<span><a href="https://www.youtube.com/watch?v=24a9ty1m3ZU" alt="Slashie Award">Slashie</a> eligibility</span>
					</li>
					<li>
						<span class="icon">😴</span>
						<span>Sleep well knowing you're supporting progressive media</span>
					</li>

				</ul>
				<a class="button" alt="Sign up on Patreon" href="https://www.patreon.com/bePatron?c=1432684&rid=000000">Become Member</a>
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
						<span class="icon">📬</span>
						<span>Get posts in your inbox (a few emails per month, tops)</span>
					</li>
					<li>
						<span class="icon">🌟</span>
						<span>Never miss a popular article or special announcement</span>
					</li>
					<li>
						<span class="icon">💯</span>
						<span>Zero spam, easy unsubscribe</span>
					</li>
				</ul>
				<a class="button" alt="Join Mailing List" href="http://eepurl.com/HVL7X">Join Mailing List</a>
			</div>
		</div><!--/options-->
	</section>
	<section id="signup-FAQ">
		<h2 class="chameleon chameleon-color">Answered before you Asked</h2>
		<div class="faqs">
			<h3>What's Patreon?</h3>
			<p>Patreon connects creators (me!) to patrons (you, maybe?), to fund creative work. It's a new platform based on a really old model called <a href="https://en.wikipedia.org/wiki/Patronage" alt="Wiki Patronage">"patronage."</a> As of February 2018, I started to shift all of my work to enable patronage.</a></p>
			<h3>Why the + after $1?</h3>
			<p>I encourage you to give whatever you're inspired to give based on gratitude, ability, or what you feel is fair. That's the "+" part. The "$1" part is setting the barrier as low as possible, because I don't want my work to be inaccessible to anyone who wants or needs it.</p>
			<h3>What if I can't afford $1 / month?</h3>
			<p>Email me. If you want to access the patron-only stuff, and the dollar barrier is too high (or you're unable to use Patreon), I'll make it happen. Just reach out and explain how I can help.</p>
			<h3>Why should I give <em>you</em> money?</h3>
			<p>Because you want to. That's it. That's the only reason I'd be comfy with: if you appreciate what I'm doing here and elsewhere, and you want to give me money as a thanks, or to enable me to keep doing it.</p>
			<h3>Can I just <em>give</em> you money? Like once?</h3>
			<p>If you want to make a one-time donation to me, I'd prefer that you do it to support <a href="http://itspronouncedmetrosexual.com/donate" alt="Donate to IPM">It's Pronounced Metrosexual</a>, my most popular site doing the most good.</p>
		</div>
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

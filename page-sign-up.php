<?php
/*
Template Name: Sign-Up Page
*/

get_header(); ?>

	<section class="hero bigpad">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	</section><!--/hero-->
	<section id="signup-options">
		<div class="grid">
			<!-- <div id="signup-options--sambassador" class="grid-cell option chameleon-border">
				<div class="chameleon-bg">
					<h3 class="chameleon-color">
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
				<a class="button" onClick="ga('send', 'event', { eventCategory: 'Sign-up', eventAction: 'button_click', eventLabel: 'SAMBassador - Sign-up Page'});" alt="Sign up on Patreon" href="https://www.patreon.com/bePatron?c=1432684&rid=2396885">Become SAMbassador</a>
			</div> -->
			<div id="signup-options--patreon" class="grid-cell option chameleon-border chameleon">
				<div class="chameleon-bg">
					<h3 class="chameleon-color">
						Employer / Member
						<small>$1+ per Month</small>
					</h3>
				</div>
				<ul>
					<li>
						<span class="icon">💼</span>
						<span>Be <a href="https://bemyboss.es" title="Be Sam Killermann's Boss">my boss</a></span>
					</li>
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
				<a class="button" onClick="ga('send', 'event', { eventCategory: 'Sign-up', eventAction: 'button_click', eventLabel: 'Member/Supporter - Sign-up Page'});" alt="Sign up on Patreon" href="patreon.com/join/killermann">Become my Boss</a>
			</div>
			<div id="signup-options--mailing-list" class="grid-cell option chameleon-border chameleon">
				<div class="chameleon-bg">
					<h3 class="chameleon-color">
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
						<span>Never miss an article, challenge, or link.</span>
					</li>
					<li>
						<span class="icon">💯</span>
						<span>Zero spam, easy unsubscribe</span>
					</li>
				</ul>
				<a class="button" onClick="ga('send', 'event', { eventCategory: 'Mailing List', eventAction: 'button_click', eventLabel: 'Sign-up Page'});" alt="Join Mailing List" href="https://feedburner.google.com/fb/a/mailverify?uri=samkillermannblog">Get Posts via Email</a>
			</div>
		</div><!--/options-->
	</section>
	<section id="signup-FAQ">
		<h2 class="chameleon-color">Answered before you Asked</h2>
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

<?php get_footer();

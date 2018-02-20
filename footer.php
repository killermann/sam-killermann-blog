<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package samkillermannblog
 */

?>

		</section><!-- #content -->
	</div><!--/#primary-->

	<footer id="colophon" class="chameleon chameleon-bg site-footer">
		<div id="footer-mailchimp" class="chameleon chameleon-border">
			<!-- Begin MailChimp Signup Form -->
			<h3 class="chameleon chameleon-color">
				Get Sometimes-Emails from me:<br/>
				<strong>Join my Brain Trust</strong>
			</h3>
			<div class="mailchimp">
				<form action="https://samkillermann.us3.list-manage.com/subscribe/post?u=b0497ab27b695ca0aa9c4787e&amp;id=a2529d5c19" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate grid grid--center grid--fit" target="_blank" novalidate>

					<input type="email" value="" placeholder="youre@awesome.dude" name="EMAIL" class="required email" id="mce-EMAIL">

					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b0497ab27b695ca0aa9c4787e_a2529d5c19" tabindex="-1" value=""></div>
				   <input type="submit" value="Yes, please." name="subscribe" id="mc-embedded-subscribe" class="button">
				</form>
				<p><a href="https://us3.campaign-archive.com/home/?u=b0497ab27b695ca0aa9c4787e&id=a2529d5c19" title="View previous campaigns">View the Brain Trust archives.</a></p>
			</div>
			<!--End mc_embed_signup-->
		</div>
		<div id="colophon--inner">
			<div class="grid">
				<div class="grid-cell">
					<h3>
						Uncopyrighted
					</h3>
					<p>
						All the stuff I've made here &mdash; the words I've written, the doodles/artwork I've posted, and the videos or other content I've cobbled together &mdash; (unless otherwise noted), is uncopyrighted: it's my gift to you and the commons.
					</p>
					<p>
						<a href="http://uncopyright.org/notice/?uwn=www.samkillermann.com&?uwc=Sam+Killermann" alt="Uncopyright Notice" class="button">View Uncopyright Notice</a>
					</p>
				</div><!--/uncopyright-->
				<div class="grid-cell">
					<h3>
						Follow me Anywhere
					</h3>
					<p>
						I don't use social media a lot, so the mailing list is your best bet, but if you insist:
					</p>
					<p>
						<a target="_blank" href="http://instagram.com/killermann" alt="Sam Killermann Instagram" class="button">Instagram</a>
						<a target="_blank" href="http://facebook.com/samkillermann" alt="Sam Killermann Facebook" class="button">Facebook</a>
						<a target="_blank" href="http://twitter.com/killermann" alt="Sam Killermann Twitter" class="button">Twitter</a>
						<a target="_blank" href="https://www.youtube.com/c/SamKillermann" alt="Sam Killermann YouTube" class="button">YouTube</a>
						<a target="_blank" href="http://github.com/killermann" alt="Sam Killermann Github" class="button">Github</a>
						<a target="_blank" href="https://www.linkedin.com/in/killermann/" alt="Sam Killermann LinkedIn" class="button">LinkedIn</a>

					</p>
				</div><!--/follow-->
			</div><!--/grid-->
			<div class="grid grid--center">
				<div class="grid-cell text-center grid-cell--autoSize">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="home"><img class="spin" alt="Sam Killermann's Floating Head" src="<?php echo get_template_directory_uri();?>/img/sam-killermann-headshot-doodle-250.png"></a>
				</div>
				<div class="site-info grid-cell">
					<h3>How I Built this Site</h3>
					<p>
						This website is powered by <a href="http://wordpress.org" alt="Wordpress">Wordpress</a> (free, open-source software) using <a href="https://github.com/killermann/sam-killermann-blog" alt="Sam Killermann Blog Theme">a custom theme I built</a> (which I released free &amp; open-source) on top of <a href="http://underscores.me/" alt="underscores starter theme">Underscores</a> (which is, you guessed it, free &amp; open-source).
					</p>
					<p>
						It's hosted on WPEngine, which is <em>incredibly</em> not free, but it's worth a chunk of change because I have to have fancy hosting <a href="https://www.patreon.com/posts/i-migrated-ipms-16260203">or my sites go down a lot</a>. If you want to sign up with them, you can click these affiliate links for discounts (and to get me a few dollars thousands-of-dollars-a-year hosting bill): <a href="http://shareasale.com/r.cfm?b=1055761&u=593446&m=41388&urllink=&afftrack=">Discounted Personal Plan</a> or <a href="http://shareasale.com/r.cfm?b=1055765&u=593446&m=41388&urllink=&afftrack=">Discounted Business Plan (what I'm on)</a> at WPEngine.
					</p>
					<p>
						If you want to build a blog <em>exactly</em> like this one, you have everything above you need to get going. All you need to bring to the table is a solid understanding of HTML and CSS, a beginner's understanding of PHP, and a beginner's understanding of jQuery.
					</p>
				</div><!-- .site-info -->
			</div>
		</div><!--/inner-->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script
  src="http://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>
</html>

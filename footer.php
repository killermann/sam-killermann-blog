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

	<footer id="colophon" class="chameleon-bg site-footer">
		<section id="footer-sK" class="hero chameleon-border">
			<div class="grid grid--full grid--center medium-grid--fit">
				<div class="hero--text grid-cell">
					<h2><span class="chameleon-color">Hi there!</span> I’m Sam and I love making things.</h2>
					<p>
						Elsewhere, I've created a bunch of projects that have reached millions of people, been featured in TIME, the New York Times, the Atlantic, NatGeo, &amp; other fancy places, and I've been living as a professional author / activist / comedian person for almost a decade.
					</p>

					<p>Oh, and before you ask: yes, "Killerman<u>n</u>" is my real last name. (sorry<a rel="bookmark" class="asterisk" id="asterisk1" href="#asterisk1-note">&#42;</a>)</p>

					<p class="chameleon-color">
						Here, I write articles for you focusing on topics like happiness, technology, doing-it-yourself, creativity, &amp; hummus.
					</p>
				</div>
				<div class="hero--image spin">
					<svg class="spin"><use xlink:href="#sK-doodle-head"></svg>
				</div>
			</div>

			<div class="button-group grid grid--full medium-grid--fit">
				<div class="grid-cell bigpad">
					<a href="https://patreon.com/killermann" title="Be My Boss" class="button">
						Be My Boss
					</a>
					<div class="description">I'm employed by a fine group of the best people in the world ever on <a href="https://patreon.com/killermann" target="_blank">Patreon</a> i love them srsly wanna be one?</div>
				</div>
				<div class="grid-cell bigpad">
					<a href="https://patreon.com/killermann" title="Be My Boss" class="button">
						View my CV
					</a>
					<div class="description">View <a href="https://samuelkillermann.com" target="_blank">online Curriculum Vitae</a> and see if I'm qualified to be your employee (or just to get a sense of where I'm coming from)</div>
				</div>
				<div class="grid-cell bigpad">
					<a href="https://hues.xyz" title="Buy Merch" class="button">
						Buy Merch
					</a>
					<div class="description">I partially support this site, <a href="https://www.instagram.com/p/BkgEtu2no8W/" title="my puppy, chewbacca">my puppy</a>, and all of <a href="http://healthyunderstoodeducatedsafe.com" title="hues">my social good projects</a>, by selling merch. If you buy <a href="https://hues.xyz/c/apparel/tshirts/" title="t-shirts by sam killermann and friends">a t-shirt</a>, I write an article.</div>
				</div>
			</div>
		</section>
		<section id="site-navigation">
			<nav id="footer--nav" class="sK-nav">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>about" title="About" rel="navigation">
					<svg class="spin-hover"><use xlink:href="#icon-pencil-alt"></svg>
					<span>About</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>subscribe" title="subscribe" rel="navigation">
					<svg class="spin-hover"><use xlink:href="#icon-prescription-bottle-alt"></svg>
					<span>Subscribe</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>popular" title="Popular" rel="navigation">
					<svg class="spin-hover"><use xlink:href="#icon-heartbeat"></svg>
					<span>Popular</span>
				</a>
				<a href="/all/?order=DESC" title="Fresh" rel="navigation">
					<svg class="spin-hover"><use xlink:href="#icon-air-freshener"></svg>
					<span>Fresh</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>books" title="Books" rel="navigation">
					<svg class="spin-hover"><use xlink:href="#icon-books"></svg>
					<span>Books</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" title="Say Hi" rel="navigation">
					<svg class="spin-hover"><use xlink:href="#icon-kiss-wink-heart"></svg>
					<span>Say Hi</span>
				</a>
			</nav><!--/mastheadnav-->
		</section><!-- #site-navigation -->
		<section id="colophon--inner">

			<div class="grid grid--full medium-grid--fit">
				<div class="grid-cell bigpad">
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
				<div class="grid-cell bigpad">
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
			<div class="site-info bigpad">
				<h3>How I Built this Site</h3>
				<p>
					This website is powered by <a href="http://wordpress.org" alt="Wordpress">Wordpress</a> (free, open-source software) using <a href="https://github.com/killermann/sam-killermann-blog" alt="Sam Killermann Blog Theme">a custom theme I built</a> (which I released free &amp; open-source) on top of <a href="http://underscores.me/" alt="underscores starter theme">Underscores</a> (which is, you guessed it, free &amp; open-source).
				</p>
				<p>
					It's hosted with WPEngine, which is <em>incredibly</em> not free, but it's worth the chunk of change because I have to have fancy hosting <a href="https://www.patreon.com/posts/i-migrated-ipms-16260203">or my sites go down a lot</a>. If you want to sign up with them, you can click these affiliate links for discounts (and to get me a few dollars thousands-of-dollars-a-year hosting bill): <a href="http://shareasale.com/r.cfm?b=1055761&u=593446&m=41388&urllink=&afftrack=">Discounted Personal Plan</a> or <a href="http://shareasale.com/r.cfm?b=1055765&u=593446&m=41388&urllink=&afftrack=">Discounted Business Plan (what I'm on)</a> at WPEngine.
				</p>
				<p>
					If you want to build a blog <em>exactly</em> like this one, you have almost everything you need above to get started. The only things missing are a solid understanding of HTML and CSS, a beginner's understanding of PHP, and a beginner's understanding of jQuery.
				</p>
			</div><!-- .site-info -->
		</section><!--/inner-->
	</footer><!-- #colophon -->
	<svg id="icon-pencil-alt" aria-hidden="true" data-prefix="fal" data-icon="pencil-alt" class="spin-hover dont-render-dawg" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.255 56.236l-37.49-37.49c-24.993-24.993-65.515-24.994-90.51 0L12.838 371.162.151 485.346c-1.698 15.286 11.22 28.203 26.504 26.504l114.184-12.687 352.417-352.417c24.992-24.994 24.992-65.517-.001-90.51zM164.686 347.313c6.249 6.249 16.379 6.248 22.627 0L368 166.627l30.059 30.059L174 420.745V386h-48v-48H91.255l224.059-224.059L345.373 144 164.686 324.687c-6.249 6.248-6.249 16.378 0 22.626zm-38.539 121.285l-58.995 6.555-30.305-30.305 6.555-58.995L63.255 366H98v48h48v34.745l-19.853 19.853zm344.48-344.48l-49.941 49.941-82.745-82.745 49.941-49.941c12.505-12.505 32.748-12.507 45.255 0l37.49 37.49c12.506 12.506 12.507 32.747 0 45.255z"></path></svg>
	<svg id="icon-prescription-bottle-alt" aria-hidden="true" data-prefix="fal" data-icon="prescription-bottle-alt" class="spin-hover dont-render-dawg" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M104 320h56v56c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8v-56h56c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8h-56v-56c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v56h-56c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8zM360 0H24C10.8 0 0 10.8 0 24v80c0 13.2 10.8 24 24 24h8v352c0 17.6 14.4 32 32 32h256c17.6 0 32-14.4 32-32V128h8c13.2 0 24-10.8 24-24V24c0-13.2-10.8-24-24-24zm-40 480H64V128h256v352zm32-384H32V32h320v64z"></path></svg>
	<svg id="icon-heartbeat" aria-hidden="true" data-prefix="fal" data-icon="heartbeat" class="spin-hover dont-render-dawg" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M468.7 76.5C423.6 32.2 375 32 362.3 32c-12.7 0-61.5.2-106.3 44.4C211.3 32.3 162.5 32 149.7 32c-12.7 0-61.4.2-106.4 44.5C15.4 104 0 140.7 0 179.9 0 214.1 12.3 246 33.8 272h120.8l29.9-71.8 56.9 126.4c5.5 12.3 22.9 12.7 28.9.6l49.7-99.4 22.1 44.2h136c21.5-26 33.8-57.9 33.8-92.1.1-39.2-15.3-75.9-43.2-103.4zM462.5 240H361.9l-27.6-55.2c-5.9-11.8-22.7-11.8-28.6 0l-48.9 97.9-58.2-129.3c-5.8-12.8-24-12.5-29.4.4L133.3 240H49.5c-9.2-14.6-42.6-82.7 18.3-142.7C90.4 75.1 120 64 149.7 64c33.9 0 54.5 6.3 106.3 57.3C311 67.1 330.5 64 362.3 64c29.7 0 59.3 11.1 81.8 33.3 61 60.1 27.5 128.2 18.4 142.7zM268.7 443.4c-6.2 6.1-16.2 6.1-22.4 0L108.9 304H64l159.9 162.2c18.7 18.5 48.6 18.4 67.3 0L448 304h-44.5L268.7 443.4z"></path></svg>
	<svg id="icon-air-freshener" aria-hidden="true" data-prefix="fal" data-icon="air-freshener" class="spin-hover dont-render-dawg" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 416 512"><path fill="currentColor" d="M406.45 326.27l-68-70.28h11.47c13.63 0 25.94-7.8 31.31-19.86 5.19-11.61 3.06-24.78-5.53-34.34L252.87 64.64C254.8 59.44 256 53.88 256 48c0-26.51-21.49-48-48-48s-48 21.49-48 48c0 5.88 1.21 11.44 3.14 16.64L40.3 201.77c-8.59 9.58-10.72 22.75-5.53 34.36 5.38 12.06 17.69 19.86 31.31 19.86h11.47l-68 70.28c-9.47 9.8-12.13 23.47-6.94 35.67 5.66 13.39 19.44 22.05 35.06 22.05H184v32H63.99c-8.84 0-16 7.16-16 16V496c0 8.84 7.16 16 16 16h288.02c8.84 0 16-7.16 16-16v-64.02c0-8.84-7.16-16-16-16H232v-32h146.32c15.63 0 29.41-8.66 35.06-22.05 5.2-12.2 2.54-25.87-6.93-35.66zM208 32c8.82 0 16 7.18 16 16s-7.18 16-16 16-16-7.18-16-16 7.18-16 16-16zm128.01 415.98V480H79.99v-32.02h256.02zm42.31-96H37.68c-4.13 0-5.66-2.17-5.13-3.47l107.56-111.15c4.89-5.05 1.35-13.5-5.67-13.56l-70.32-.68 119.85-133.8C191.06 93.46 199.2 96 208 96c8.37 0 16.13-2.33 22.98-6.1l118.93 134.09H281.8c-7.06 0-10.66 8.48-5.75 13.56l107.96 111.69c-.03.57-1.56 2.74-5.69 2.74z"></path></svg>
	<svg id="icon-books" aria-hidden="true" data-prefix="fal" data-icon="books" class="spin-hover dont-render-dawg" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M575.33 456.43L399 8.02C397.28 3.1 392.61 0 387.65 0c-3.01 0-4.97 1.03-11.49 3.31-6.46 2.26-9.82 8.24-6.27 18.38-16.46 9.69-59.15 24.09-75.5 26.42-1.33-3.78-1.97-6.62-6.4-9.23V32c0-17.67-14.33-32-32-32h-96c-5.96 0-11.22 2.07-16 4.9C139.22 2.07 133.96 0 128 0H32C14.33 0 0 14.33 0 32v448c0 17.67 14.33 32 32 32h96c5.96 0 11.22-2.07 16-4.9 4.78 2.84 10.04 4.9 16 4.9h96c17.67 0 32-14.33 32-32V118.88l151.43 385.1c1.73 4.92 6.4 8.02 11.35 8.02 3 0 4.96-1.03 11.49-3.31 6.44-2.25 9.83-8.23 6.27-18.38 16.46-9.69 59.15-24.09 75.5-26.42 3.65 10.4 10.13 12.65 16.38 10.46l7.55-2.64c6.23-2.19 9.54-9.07 7.36-15.28zM128 480H32v-64h96v64zm0-96H32V128h96v256zm0-288H32V32h96v64zm128 384h-96v-64h96v64zm0-96h-96V128h96v256zm0-288h-96V32h96v64zm203.15 367.54L303.79 74.88c25.22-4.74 64.01-20.33 75.5-26.42l155.36 388.65c-25.23 4.75-64.01 20.33-75.5 26.43z"></path></svg>
	<svg id="icon-kiss-wink-heart" aria-hidden="true" data-prefix="fal" data-icon="kiss-wink-heart" class="dont-render-dawg spin-hover" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 504 512"><path fill="currentColor" d="M499.6 392.3c-5.2-13.6-15.2-24.3-27.4-31.8 15-31.8 23.8-67 23.8-104.5C496 119 385 8 248 8S0 119 0 256s111 248 248 248c36.1 0 70.2-8.1 101.2-22.1 9.5 11.6 24.7 17.8 40.7 13.7l65.4-16.9c37.5-9.8 58.3-49.8 44.3-86.4zm-176.4 10.1l13.8 49.9c-27.2 12.5-57.2 19.7-89 19.7-119.1 0-216-96.9-216-216S128.9 40 248 40s216 96.9 216 216c0 33.9-8 65.9-22 94.4-1-.1-18.6-30.4-56.1-30.4-41.9 0-74.5 39.8-62.7 82.4zm124 45.3l-65.4 16.9c-4 1.1-8.5-1.3-9.8-5.6l-18-65.1c-5.2-18.9 6.9-38.3 26.8-41.4 17.7-2.8 34 9.5 38.6 26l1.8 6.6 6.7-1.7c14.3-3.7 34.7 1.7 41.8 20.4 7.2 18.8-3.5 38.9-22.5 43.9zM304 308c0-19.2-28.7-41.5-71.5-44-3.8-.4-7.4 2.4-8.2 6.2-.9 3.8 1.1 7.7 4.7 9.2l16.9 7.2c13 5.5 20.7 13.5 20.7 21.5s-7.7 16-20.7 21.5l-17 7.2c-5.7 2.4-6 12.2 0 14.8l16.9 7.2c13 5.5 20.7 13.5 20.7 21.5s-7.7 16-20.7 21.5l-17 7.2c-3.6 1.5-5.6 5.4-4.7 9.2.8 3.6 4.1 6.2 7.8 6.2h.5c42.8-2.5 71.5-24.8 71.5-44 0-13-13.4-27.3-35.2-36C290.6 335.3 304 321 304 308zM168 176c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm235.8 46.1c-4-25.2-34.2-42.1-59.8-42.1s-55.9 16.9-59.8 42.1c-1.8 10.9 11.3 18.4 19.8 10.8l9.5-8.5c14.8-13.2 46.2-13.2 61 0l9.5 8.5c8.6 7.5 21.6.2 19.8-10.8z"></path></svg>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package samkillermannblog
 */

if ( ! function_exists( 'sam_killermann_blog_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function sam_killermann_blog_posted_on() {

		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( '%s', 'post date', 'sam-killermann-blog' ),
			'' . $time_string . ''
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'sam_killermann_blog_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function sam_killermann_blog_posted_by() {

		if ( is_single() ) :
			$byline = sprintf(
				/* translators: %s: post author. */
				esc_html_x( 'by %s', 'post author', 'sam-killermann-blog' ),
				'<span class="author vcard"><a rel="bookmark" class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
			);
		else :
			$byline = sprintf(
				/* translators: %s: post author. */
				esc_html_x( 'by %s', 'post author', 'sam-killermann-blog' ),
				'<span class="author vcard">' . esc_html( get_the_author() ) . '</span>'
			);
		endif;

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'sam_killermann_blog_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function sam_killermann_blog_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ' ', 'sam-killermann-blog' ) );
			if ( $categories_list && is_single() ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( '%1$s', 'sam-killermann-blog' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ' ', 'list item separator', 'sam-killermann-blog' ) );
			if ( $tags_list && is_single() ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( '%1$s', 'sam-killermann-blog' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'sam-killermann-blog' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);

		if ( is_single() ) :

			?>
			<div id="heart-sK">
				<svg class="animated-svg" id="heart-sK" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133.83 66.6"><path stroke-width="5" fill="none" id="heart" d="M22,36.39S20.5,26.67,11.64,23.5s-12.6,3.94-3,16.8S23.61,63.9,23.2,54.23,22.48,20.75,34.14,9.61C43.25.9,51.06,5.09,50.45,17.53c-.76,15.4-20.05,37.6-20.05,37.6"/><path stroke-width="5" fill="none" id="sK" d="M63,36.06a15.16,15.16,0,0,0-11-5.5C44,30.15,37.8,37,54.4,49.41s-19,22.07-11.93,4.84C46.05,45.53,58.78,34.86,64.77,24,71.94,11,74.91-2.56,73.24,5.35c-3.07,14.52-3.71,54.27-3.13,51.17,4.08-21.92,33.81-52.2,31-50.35S69.39,35.07,74.91,33.64,129,21.09,130.83,24.16"/></svg>
			</div>
			<div id="footer-feedburner" class="bigpad">
				<div class="inner bigpad">
					<form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=samkillermannblog', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
						<h2 class="chameleon-color">Do you want new posts in your inbox?</h2>
						<p>I can make that happen. We have the technology. Just don't expect a bunch of emails from me.</p>
						<label for="feedburner-email">Drop your email here 👇<br/></label>
						<input class="chameleon-border" id="feedburner-email" placeholder="youre@awesome.bud" type="email" name="email"/>
						<input type="hidden" value="samkillermannblog" name="uri"/>
						<input type="hidden" name="loc" value="en_US"/>
						<input type="submit" class="button" value="Sign me up." />
						<p class="description">Delivered free and with zero advertising by <a href="https://feedburner.google.com/fb/a/mailverify?uri=samkillermannblog&amp;loc=en_US" target="_blank">FeedBurner</a>. Seriously. Ads are poison. Other <a href="https://samkillermann.com/subscribe" title="Other subscription options">subscription options here</a>.</p>
					</form>
				</div>
				<div class="icon">
					<svg class="chameleon-color"><use xlink:href="#icon-prescription-bottle-alt"></svg>
				</div>
			</div>
			<?php

			// Get Author Data
			$author             = get_the_author();
			$author_description = get_the_author_meta( 'description' );
			$authorID 			= get_the_author_meta('ID');
			$author_twitter 	= get_the_author_meta('twitter');
			$author_url         = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
			$author_avatar      = get_avatar( get_the_author_meta( 'user_email' ), '200' );

			// Only display if author has a description

			if ( $author_description ) : ?>


				<div class="authorBox chameleon-border authorID-<?php echo $authorID ?> clearfix">
					<h4 class="heading">
						<span>
							<?php printf( esc_html__( 'By %s', 'text_domain' ), esc_html( $author ) ); ?>
						</span>
						<?php
						if ($author_twitter) { ?>
						<a href="https://twitter.com/<?php echo $author_twitter ?>" data-size="large" class="twitter-follow-button" data-show-count="true">@<?php echo $author_twitter ?>
						</a>
						<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
						<?php } ?>
					</h4>
					<?php if ( $author_avatar ) { ?>
					<div class="author-avatar">
						<a title="View All Posts by Author" href="<?php echo esc_url( $author_url ); ?>" rel="author">
							<?php echo $author_avatar; ?>
						</a>
					</div><!-- .author-avatar -->
					<?php } ?>
					<div class="author-description">
						<p><?php echo wp_kses_post( $author_description ); ?></p>
					</div><!-- .author-description -->
				</div><!-- .author-info -->

			<?php endif;
		endif;
	}
endif;

function sam_killermann_blog_primary_category() {

	// SHOW YOAST PRIMARY CATEGORY, OR FIRST CATEGORY
	// By https://joshuawinn.com/using-yoasts-primary-category-in-wordpress-theme/
	$category = get_the_category();
	$useCatLink = true;
	// If post has a category assigned.
	if ($category){
		$category_display = '';
		$category_link = '';
		if ( class_exists('WPSEO_Primary_Term') )
		{
			// Show the post's 'Primary' category, if this Yoast feature is available, & one is set
			$wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
			$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
			$term = get_term( $wpseo_primary_term );
			if (is_wp_error($term)) {
				// Default to first category (not Yoast) if an error is returned
				$category_display = $category[0]->name;
				$category_link = get_category_link( $category[0]->term_id );
			} else {
				// Yoast Primary category
				$category_display = $term->name;
				$category_link = get_category_link( $term->term_id );
			}
		}
		else {
			// Default, display the first category in WP's list of assigned categories
			$category_display = $category[0]->name;
			$category_link = get_category_link( $category[0]->term_id );
		}
		// Display category
		if ( !empty($category_display) ){
		    if ( $useCatLink == true && !empty($category_link) ){
			echo '<span class="primary-category">';
			if ( is_single() ) {
				echo '<a href="'.$category_link.'">'.htmlspecialchars($category_display).'</a>';
			}
			else {
				echo htmlspecialchars($category_display);
			}
			echo '</span>';
		    } else {
			echo '<span class="primary-category">'.htmlspecialchars($category_display).'</span>';
		    }
		}
	}
}


function getLoopSubscribe() { ?>

	<article class="subscribeLoop clearfix yellow-bg rounded">
		<h3 class="subscribe-heading">Subscribe</h3>
		<h4>Never miss a new episode<br/>
			<small>(unless you want to)</small></h4>
		<ul class="hostingPlatforms">
			<li>
				<a data-ot="Email List" data-ot-delay=".2" data-ot-tip-joint="top" data-ot-target-joint="bottom" data-ot-target="true" target="_blank" id="email" href="">
					💌
				</a>
			</li>
		</ul>
	</article>

<?php }

function get_loop_mailing_lists() {?>
	<section class="interstitial chameleon-bg">
		<div class="email-interstitial inner bigpad">
			<h3 class="chameleon-color">
				You want emails from me?<br/>
				<strong>Here are two options.</strong>
			</h3>
			<div class="button-group grid medium-grid--fit small-grid--full">
				<div class="grid-cell">
					<a class="button" href="https://feedburner.google.com/fb/a/mailverify?uri=samkillermannblog" target="_blank">
						Posts in Your Inbox
					</a>
					<div class="description">Powered by Feedburner, totally free for both of us. You'll only get an email when there is a new post here.</div>
				</div>
				<div class="grid-cell">
					<a class="button button-secondary" target="_blank" href="https://app.convertkit.com/landing_pages/402557?v=7" title="Sam Killermann Email List">
						Join my Mailing List
					</a>
					<div class="description">Get emails about my projects, social good stuff, books, and activism. I send a few emails a month -- tops.</div>
				</div>
			</div>
		</div>
		<!--/email-inter-->
	</section>
<?php }

function get_loop_post_formats() {?>
	<section class="chameleon-bg interstitial">
		<div class="post-formats-interstitial inner bigpad">
			<h3>
				Browse by Format
			</h3>
			<nav>
				<a href="<?php echo esc_url( home_url() );?>/articles" title="Articles" rel="bookmark" class="svg-containment-system">
					<svg aria-hidden="true" data-prefix="fal" data-icon="paragraph" class="draw-me svg-inline--fa fa-paragraph fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M372 32H159.529C72.194 32 .245 102.216.001 189.551-.243 276.877 70.729 348 158 348v120c0 6.627 5.373 12 12 12h12c6.627 0 12-5.373 12-12V68h60v400c0 6.627 5.373 12 12 12h12c6.627 0 12-5.373 12-12V68h82c6.627 0 12-5.373 12-12V44c0-6.627-5.373-12-12-12zM158 312c-67.271 0-122-54.729-122-122S90.729 68 158 68v244z"></path></svg>
					<span>Articles</span>
				</a>
				<a href="<?php echo esc_url( home_url() );?>/type/quote" title="Quotes" rel="bookmark">
					<svg aria-hidden="true" data-prefix="fal" data-icon="quote-right" class="svg-inline--fa fa-quote-right fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M176 32H64C28.7 32 0 60.7 0 96v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56H56c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136H56c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56H64c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216zM448 32H336c-35.3 0-64 28.7-64 64v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56h-16c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136h-16c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56h-96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216z"></path></svg>
					<span>Quotes</span>
				</a>
				<a href="<?php echo esc_url( home_url() );?>/type/link" title="Links" rel="bookmark">
					<svg aria-hidden="true" data-prefix="fal" data-icon="link" class="svg-inline--fa fa-link fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M301.148 394.702l-79.2 79.19c-50.778 50.799-133.037 50.824-183.84 0-50.799-50.778-50.824-133.037 0-183.84l79.19-79.2a132.833 132.833 0 0 1 3.532-3.403c7.55-7.005 19.795-2.004 20.208 8.286.193 4.807.598 9.607 1.216 14.384.481 3.717-.746 7.447-3.397 10.096-16.48 16.469-75.142 75.128-75.3 75.286-36.738 36.759-36.731 96.188 0 132.94 36.759 36.738 96.188 36.731 132.94 0l79.2-79.2.36-.36c36.301-36.672 36.14-96.07-.37-132.58-8.214-8.214-17.577-14.58-27.585-19.109-4.566-2.066-7.426-6.667-7.134-11.67a62.197 62.197 0 0 1 2.826-15.259c2.103-6.601 9.531-9.961 15.919-7.28 15.073 6.324 29.187 15.62 41.435 27.868 50.688 50.689 50.679 133.17 0 183.851zm-90.296-93.554c12.248 12.248 26.362 21.544 41.435 27.868 6.388 2.68 13.816-.68 15.919-7.28a62.197 62.197 0 0 0 2.826-15.259c.292-5.003-2.569-9.604-7.134-11.67-10.008-4.528-19.371-10.894-27.585-19.109-36.51-36.51-36.671-95.908-.37-132.58l.36-.36 79.2-79.2c36.752-36.731 96.181-36.738 132.94 0 36.731 36.752 36.738 96.181 0 132.94-.157.157-58.819 58.817-75.3 75.286-2.651 2.65-3.878 6.379-3.397 10.096a163.156 163.156 0 0 1 1.216 14.384c.413 10.291 12.659 15.291 20.208 8.286a131.324 131.324 0 0 0 3.532-3.403l79.19-79.2c50.824-50.803 50.799-133.062 0-183.84-50.802-50.824-133.062-50.799-183.84 0l-79.2 79.19c-50.679 50.682-50.688 133.163 0 183.851z"></path></svg>
					<span>Links</span>
				</a>
				<a href="<?php echo esc_url( home_url() );?>/type/video" title="Videos" rel="bookmark">
					<svg aria-hidden="true" data-prefix="fal" data-icon="film-alt" class="svg-inline--fa fa-film-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M488 64h-8v20c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12V64H96v20c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12V64h-8C10.7 64 0 74.7 0 88v336c0 13.3 10.7 24 24 24h8v-20c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v20h320v-20c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v20h8c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24zM96 372c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm288 224c0 6.6-5.4 12-12 12H140c-6.6 0-12-5.4-12-12V108c0-6.6 5.4-12 12-12h232c6.6 0 12 5.4 12 12v296zm96-32c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40z"></path></svg>
					<span>Videos</span>
				</a>
				<a href="<?php echo esc_url( home_url() );?>/type/image" title="Images" rel="bookmark">
					<svg aria-hidden="true" data-prefix="fal" data-icon="camera-retro" class="svg-inline--fa fa-camera-retro fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M32 58V38c0-3.3 2.7-6 6-6h116c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H38c-3.3 0-6-2.7-6-6zm344 230c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88zm-120 0c0-17.6 14.4-32 32-32 8.8 0 16-7.2 16-16s-7.2-16-16-16c-35.3 0-64 28.7-64 64 0 8.8 7.2 16 16 16s16-7.2 16-16zM512 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h136l33.6-44.8C226.7 39.1 240.9 32 256 32h208c26.5 0 48 21.5 48 48zM224 96h240c5.6 0 11 1 16 2.7V80c0-8.8-7.2-16-16-16H256c-5 0-9.8 2.4-12.8 6.4L224 96zm256 48c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v288c0 8.8 7.2 16 16 16h416c8.8 0 16-7.2 16-16V144z"></path></svg>
					<span>Images</span>
				</a>
				<a href="<?php echo esc_url( home_url() );?>/type/status" title="Statuses" rel="bookmark">
					<svg aria-hidden="true" data-prefix="fal" data-icon="comment-alt-lines" class="svg-inline--fa fa-comment-alt-lines fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M448 0H64C28.7 0 0 28.7 0 64v288c0 35.3 28.7 64 64 64h96v84c0 7.1 5.8 12 12 12 2.4 0 4.9-.7 7.1-2.4L304 416h144c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64zm32 352c0 17.6-14.4 32-32 32H293.3l-8.5 6.4L192 460v-76H64c-17.6 0-32-14.4-32-32V64c0-17.6 14.4-32 32-32h384c17.6 0 32 14.4 32 32v288zM280 240H136c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h144c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zm96-96H136c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8z"></path></svg>
					<span>Statuses</span>
				</a>
			</nav>
		</div>
		<!--/email-inter-->
	</section>
<?php }



if ( ! function_exists( 'sam_killermann_blog_post_thumbnail' ) ) :
/**
 * Displays an optional post thumbnail.
 *
 */
function sam_killermann_blog_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( !is_single() ) : ?>
	<a class="post-thumbnail chameleon-bg" href="<?php the_permalink(); ?>" aria-hidden="true"><?php
	else : ?><div class="post-thumbnail chameleon-bg">
	<?php endif;?>
		<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );

	if ( !is_single() ) : ?></a><?php else: ?></div><?php endif;?>

	<?php
} endif;

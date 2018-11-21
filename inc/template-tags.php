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
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'sam_killermann_blog_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function sam_killermann_blog_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'sam-killermann-blog' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

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
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( '%1$s', 'sam-killermann-blog' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ' ', 'list item separator', 'sam-killermann-blog' ) );
			if ( $tags_list ) {
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
						<a href="<?php echo esc_url( $author_url ); ?>" rel="author">
							<?php echo $author_avatar; ?>
						</a>
						<a class="button" href="<?php echo esc_url( $author_url ); ?>" title="<?php esc_html_e( 'View all posts', 'text_domain' ); ?>">
						View all posts
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
			echo '<a href="'.$category_link.'">'.htmlspecialchars($category_display).'</a>';
			echo '</span>';
		    } else {
			echo '<span class="post-category">'.htmlspecialchars($category_display).'</span>';
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



function getMailingList() { ?>

	<div class="hereticMailingListWrap clearfix">
		<div class="hereticMailingList clearfix">
			<h3>💌 Do you want an email when<br/> new episodes come out?</h3>
			<ul class="buttonList flexcontainer">
				<li>
					<a class="button" alt="Get emails with new episodes" target="_blank" href="">
						🤓 Yes, please.
					</a>
				</li>
				<li>
					<a class="button button-grey" href="<?php echo home_url(); ?>/subscribe" alt="Subscribe to the Podcast">
						🖱 Other options?
					</a>
				</li>
			</ul>
		</div>
	</div>

<?php }



if ( ! function_exists( 'sam_killermann_blog_post_thumbnail' ) ) :
/**
 * Displays an optional post thumbnail.
 *
 */
function sam_killermann_blog_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}?>

	<a class="post-thumbnail chameleon-bg" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
		?>
	</a>

	<?php
} endif;

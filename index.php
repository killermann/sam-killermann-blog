<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */

global $wp_query;

$modifyargs = array();

if( !empty( $_GET['catname'] ) ) {
	$modifyargs['category_name'] = $_GET['catname'];
}

$args = array_merge(
	$wp_query->query_vars,
	$modifyargs
);

query_posts( $args );

get_header(); ?>

		<main id="main" class="loop">

			<nav class="post-filters">
				<form>
					<div class="post-filter">
						<label for="orderby">Showing</label>
						<select id="order" name="order" onchange="this.form.submit()">
							<?php
								$order_options = array(
									'DESC' => 'The Latest',
									'ASC' => 'The Oldest'
								);
								foreach( $order_options as $value => $label ) {
									echo "<option ".selected( $_GET['order'], $value )." value='$value'>$label</option>";
								}
							?>
						</select>
					</div>
					<div class="post-filter">
						<label for="catname">Posts about</label>
						<select id="catname" name="catname" onchange="this.form.submit()">
							<?php
								$cat_options = array(
									'' => 'All Topics',
									'better-humaning' => 'Better Humaning',
									'diy' => 'DIY',
									'happiness' => 'Happiness',
									'technology' => 'Technolophizing',
									'travel' => 'Travel',
									'work-dot-com' => 'Work dot com'
								);
								foreach( $cat_options as $value => $label ) {
									echo "<option ".selected( $_GET['catname'], $value )." value='$value'>$label</option>";
								}
							?>
						</select>
					</div>
				</form>
			</nav><!--/post-filters-->


		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */

			$count = 0;

			while ( have_posts() ) : the_post();

				if ($count == 2) :
					get_loop_post_formats();
				elseif ($count == 6) :
					get_loop_mailing_lists();
				endif;

				get_template_part( 'template-parts/loop' );

				$count++;

			endwhile;

			the_posts_navigation();


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->

<?php
get_sidebar();
get_footer();

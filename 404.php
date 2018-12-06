<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package samkillermannblog
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found bigpad">
				<header class="page-header text-wrap">
					<h1 class="page-title"><?php esc_html_e( 'Oof. That page is lost to history.', 'sam-killermann-blog' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content text-wrap">
					<p><?php esc_html_e( 'This is not the thing you were looking for. I may have deleted whatever it was (I do that sometimes), or the URL might have a tpyo in it. In any case, sorry you are here, and not there. Can I offer you the links below as an apology?', 'sam-killermann-blog' ); ?></p>

					<h2>Popular Posts</h2>
					<ol><li><a href="/my-list-of-100-dreams/">My List of 100 Dreams</a></li><li><a href="/genital-xenophobia-vs-genital-wanderlust/">Genital Xenophobia and Genital Wanderlust: Show Me Yours and I’ll Show You Mine</a></li><li><a href="/proud-humbled-misunderstanding/">&#8220;Proud&#8221; and &#8220;Humbled&#8221;: I do not think it means what you think it means</a></li><li><a href="/im-glad-chivalry-is-dead/">Why I&#8217;m Glad Chivalry is Dead</a></li><li><a href="/alone-not-lonely/">Being Alone Isn&#8217;t the Same As Being Lonely</a></li><li><a href="/stop-being-harder-on-self/">How I Rationalize Being So Hard On Myself, and How I&#8217;m Going to Stop</a></li><li><a href="/single-serving-friends/">Single Serving Friends</a></li></ol>

					<?php
						the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2><?php esc_html_e( 'Most Used Categories', 'sam-killermann-blog' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 7,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'sam-killermann-blog' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

<?php
/**
 * samkillermannblog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package samkillermannblog
 */

if ( ! function_exists( 'sam_killermann_blog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sam_killermann_blog_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on samkillermannblog, use a find and replace
		 * to change 'sam-killermann-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sam-killermann-blog', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'sam-killermann-blog' ),
		) );

		add_theme_support( 'align-wide' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		/*
		 * Enable Gutenberg Color Scheme Picker

		add_theme_support( 'editor-color-palette',
			'#000',
			'#fff',
			'#467cbf',
			'#42b4e3',
			'#31307e',
			'#40ae49',
			'#008345',
			'#81bc41',
			'#ccdb29',
			'#fcdc00',
			'#ffcd00',
			'#ed7623',
			'#f5a81c',
			'#e02828',
			'#b4292e',
			'#cb2044',
			'#e81d76',
			'#8e1e58',
			'#99298b',
			'#AF6EE2',
			'#803c96'
		); */

		/**
		 * Enqueue WordPress theme styles within Gutenberg.
		 */
		function sam_killermann_blog_gutenberg_styles() {
			// Load the theme styles within Gutenberg.
			 wp_enqueue_style( 'sam-killermann-blog-gutenberg', get_theme_file_uri( 'gutenberg.css' ), false, '@@pkg.version', 'all' );
		}
		add_action( 'enqueue_block_editor_assets', 'sam_killermann_blog_gutenberg_styles' );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'sam_killermann_blog_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'sam_killermann_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sam_killermann_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sam_killermann_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'sam_killermann_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sam_killermann_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sam-killermann-blog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sam-killermann-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sam_killermann_blog_widgets_init' );

/**
 * Remove WP Embed
 */
function sK_blog_include_custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'sK_blog_include_custom_jquery');

/**
 * Remove WP Embed
 */
function sK_deregister_wp_embed(){
 wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'sK_deregister_wp_embed' );

/**
 * Enqueue scripts and styles.
 */
function sam_killermann_blog_scripts() {
	wp_enqueue_style( 'sam-killermann-blog-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sam-killermann-blog-scripts', get_template_directory_uri() . '/js/scripts-dist.js', array(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'sam_killermann_blog_scripts', 50 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Post Formats Support
 */

 function sam_killermann_blog_add_post_formats() {
	add_theme_support( 'post-formats', array(
		'gallery',
		'quote',
		'video',
		'aside',
		'image',
		'link',
		'status',
		'audio',
		'chat'
	) );
}
add_action( 'after_setup_theme', 'sam_killermann_blog_add_post_formats' );


/**
 * Mailing List Shortcode [mailinglist]
*/


function mailingListShortcode(){

    $heyHeyLookMailingList = '
		<div class="in-text--mailing-list chameleon-border">
	        <div class="mailing-list">
	            <h3 class="chameleon-color">Fear of Missing Out?</h3>
	            <p>
					<strong>Join the mailing list</strong>, get posts in your inbox, or subscribe in other ways to get the latest &amp; greatest.
	            </p>

				<a target="_blank" title="View Subscription Options" class="button" href="https://www.samkillermann.com/subscribe">Show me options.</a>
	        </div>
		</div>';
    return $heyHeyLookMailingList;
}

add_shortcode('mailinglist', 'mailingListShortcode');

/**
 * Custom Log-in Page
*/

function sam_killermann_login_logo() { ?>
    <style type="text/css">
		body {
			background-color:#fff !important;
			font-family:-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
			$serif: Georgia, Cambria,"Times New Roman", Times, "Times New Roman", Times New Roman, "Times",serif !important;
		}

		#login form {
			box-shadow:none;
			border-radius:2px;
		}

		#login form input[type=submit] {
			background:#444;
			border:none;
			display:block;
			border-radius:2px;
			text-shadow:none;
			font-size:17px;
			padding:.7em 1em;
			height:auto;
			width:auto;
			box-shadow:3px 3px 0 0 rgba(0,0,0,.2);
		}

		#login form input[type=submit]:hover {
			background:#AF6EE2;
			box-shadow:4px 4px 1px 0 rgba(0,0,0,.2);
		}

		#login form input[type=submit]:active {
			background:#000;
			color:rgba(255,255,255,.8);
			box-shadow:none;
		}

		#login form p label {
			font-weight:bold;
			font-size:17px;
			color:#000;
		}
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/sam-killermann-headshot-doodle.svg);
			height:200px;
			width:200px;
			background-size:contain;
			background-repeat: no-repeat;
        	padding-bottom: 30px;
        }

		#login h1 a:hover {
			transform:translateY(-2px);
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'sam_killermann_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Back to the Blog';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


/*** CUSTOMIZE AMP FOR WORDPRESS PLUGIN **/

add_action( 'amp_post_template_css', function( $amp_template ) { ?>

	html {
		background:#AF6EE2;
	}

	body {
		font-family: "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
		line-height:1.55;
	}

	h1, h2, h3, h4, h5 {
		line-height:1.2;
	}

	hr {
		border:none;
		opacity:.5;
		height:1px;
		background:#AF6EE2;
	}

	a,
	a:visited,
	.amp-wp-article-content a{
		color:black;
		text-decoration-color:#AF6EE2;
	}

    nav.amp-wp-title-bar {background: #000;}

	.amp-site-title {
		font-weight:700;
		color:white;
		text-shadow:0px 1px 1px rgba(0,0,0,.5);
	}

	.amp-wp-header {
		background:#AF6EE2;
		color:black;
		font-weight:bold;
	}

	.amp-wp-header .amp-wp-site-icon, .amp-wp-byline amp-img {
		background:none;
		border:none;
	}

	.amp-wp-header div {
		padding:7px 12px;
	}

	.amp-wp-header a {
		display:block;
		text-indent:-9999px;
		background-image:url(https://www.samkillermann.com/wp-content/themes/sam-killermann-blog/amp/sam-killermann-blog-logo.png);
		background-repeat:no-repeat;
		background-size:contain;
		margin:0 auto 0 0;
		height:24px;
		width:112px;
	}

	.amp-wp-header .amp-wp-site-icon {
		display:none;
	}

	.amp-wp-article-featured-image amp-img {
		width:100%;
		height:auto;
	}

	.in-text--mailing-list {
		border: 2px solid #AF6EE2;
		border-radius:3px;
		border-left:none;
		width:44%;
		border-bottom:none;
		margin:0em 1em 1em -14px;
		padding:18px 16px 4px 14px;
		font-size:1em;
		float:left;
	}

		.in-text--mailing-list h3 {
			font-weight:900;
			line-height:1;
			margin:0 auto 15px;
		}

		.in-text--mailing-list p {
			margin:0;
			font-size:.75em;
			font-family:"Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
			line-height:1.2;
		}

		.in-text--mailing-list .button {
			display:block;
			font-size:.75em;
			background:#AF6EE2;
			color:white;
			padding:.5em .3em;
			border-radius:4px;
			box-shadow:4px 4px 0px rgba(0,0,0,.2);
			text-align:center;
			line-height:1.2;
			font-weight:bold;
			text-decoration:uppercase;
			margin:15px 0 0;
		}

	ul.jp-amp-list {
        list-style: none;
        display: inline;
		color:#696969;
		padding:0;
		margin:0;
    }

	    ul.jp-amp-list li {
	        display: inline-block;
			padding:0;
	        margin: 0 10px 0 0;
	    }

	.amp-wp-footer p {
		line-height:1.2;
	}

    <?php
});

add_action( 'pre_amp_render_post', function () {
    add_filter( 'the_content', function( $content ){
        $share = '<hr />
		<ul id="amp-subscribe" class="jp-amp-list">Subscribe (free):
			<li id="feedburner">
				<a target="_blank" href="https://feedburner.google.com/fb/a/mailverify?uri=samkillermannblog" title="Get posts in your inbox">Get Posts in Your Inbox</a>
			</li>
			<li id="mailing-list">
				<a target="_blank" href="https://app.convertkit.com/landing_pages/402557?v=7" title="Join My List">Join My Personal Mailing List</a>
			</li>
		</ul><hr />';
        $content  .= $share;
        return $content;
    }, 1000 );
});
add_filter( 'amp_post_template_data', 'sam_killermann_blog_amp_set_site_icon_url' );

function sam_killermann_blog_amp_set_site_icon_url( $data ) {
	// Ideally a 32x32 image
	$data['site_icon_url'] = get_stylesheet_directory_uri() . '/amp/sam-killermann-blog-logo.png';
	return $data;
}

/**
 * Make the AMP structured data (metadata) use the last modified date as the published date
 */

add_filter( 'amp_post_template_metadata', 'amp_metadata_date_modified', 10, 2 );

function amp_metadata_date_modified( $metadata, $post ) {

    $metadata['datePublished'] = $metadata['dateModified'];

    return $metadata;
}

/**
 * Add Custom Publisher logo to AMP Metadata
 */

add_filter( 'amp_post_template_metadata', 'amp_modify_json_metadata', 10, 2 );

function amp_modify_json_metadata( $metadata, $post ) {

   if( 'post'=== $post->post_type  ){

		$metadata['@type'] = 'Article';

		$metadata['publisher']['name'] = ' sK&#039;s Blog ';

		$metadata['publisher']['logo'] = array(
			'@type' => 'ImageObject',
			'url' => get_stylesheet_directory_uri().'/amp/sam-killerman-blog-logo.png',
			'height' => 60,
			'width' => 280,
		);

   return $metadata;

  }
}

/**
 * Do not load Merriweather Google fonts on AMP pages
 */
add_action( 'amp_post_template_head', 'isa_remove_amp_google_fonts', 2 );
function isa_remove_amp_google_fonts() {
    remove_action( 'amp_post_template_head', 'amp_post_template_add_fonts' );
}

/** CLEANING UP HEAD BY REMOVING UNUSED STUFF **/

remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/*------------------------------------*\
	Lazy Load All the Images
\*------------------------------------*/

/**
 * Use Lozad (lazy loading) for images within the posts
 */

add_filter('the_content', function ($content) {

	// Bail on amp
	if (function_exists( 'is_amp_endpoint' ) && is_amp_endpoint()) {
		return $content;
	}
	//-- Change src/srcset to data attributes.
	$content = preg_replace("/<img(.*?)(src=|srcset=)(.*?)>/i", '<img$1data-$2$3>', $content);

	//-- Add .lazy-load class to each image that already has a class.
	$content = preg_replace('/<img(.*?)class=\"(.*?)\"(.*?)>/i', '<img$1class="$2 lazy-load"$3>', $content);

	//-- Add .lazy-load class to each image that doesn't already have a class.
	$content = preg_replace('/<img((?:(?!class=).)*?)>/i', '<img class="lazy-load"$1>', $content);

	return $content;
});

/**
* Use Lozad (lazy loading) for attachments/featured images
*/
add_filter('wp_get_attachment_image_attributes', function ($attr, $attachment) {
	// Bail on admin
	if (is_admin()) {
	 	return $attr;
	}

	// Bail on amp
	if (function_exists( 'is_amp_endpoint' ) && is_amp_endpoint()) {
		return $attr;
	}

	$attr['data-src'] = $attr['src'];
	$attr['data-src-set'] = $attr['src-set'];
	$attr['class'] .= ' lazy-load';
	unset($attr['src']);
	unset($attr['src-set']);

	return $attr;
}, 10, 2);

/*------------------------------------*\
	Customize Admin Area
\*------------------------------------*/

function remove_dashboard_widgets() {
    global $wp_meta_boxes;
	remove_action('welcome_panel', 'wp_welcome_panel');
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['jetpack_summary_widget']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['wpseo-dashboard-overview']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['pressable_dashboard_widget']);
}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}

add_action('after_setup_theme', 'remove_admin_bar');


function set_default_admin_color($user_id) {
    $args = array(
        'ID' => $user_id,
        'admin_color' => 'light'
    );
    wp_update_user( $args );
}
add_action('user_register', 'set_default_admin_color');

<?php
/**
 * our functions and definitions
 *
 * @package our
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'our_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function our_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on our, use a find and replace
	 * to change 'our' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'our', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
        'secondary' => __( 'Secondary Menu', 'THEMENAME' ),
        'tertiary' => __( 'Tertiary Menu', 'THEMENAME' ),
        'footer' => __( 'Footer Menu', 'THEMENAME' ),
        'sidebar' => __( 'Sidebar Menu', 'THEMENAME' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'our_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // our_setup
add_action( 'after_setup_theme', 'our_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function our_widgets_init() {
	register_sidebars(4, array(
		'name'          => __( 'Sidebar %d', 'our' ),
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'our_widgets_init' );

/**
 * Enqueue scripts and styles.
**/
function our_scripts() {
    
   wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css');
    
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );
    
	wp_enqueue_style( 'our-style', get_stylesheet_uri() );

	wp_enqueue_script( 'our-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'our-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'our_scripts' );
// Register Custom Navigation Walker
require_once('lib/bootstrap/wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
    'secondary' => __( 'Secondary Menu', 'THEMENAME' ),
    'tertiary' => __( 'Tertiary Menu', 'THEMENAME' ),
    'footer' => __( 'Footer Menu', 'THEMENAME' ),
    'sidebar' => __( 'Sidebar Menu', 'THEMENAME' ),
) );

/**
 * Custom template tags for this theme.
**/
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
**/
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
**/
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
**/
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Featured Image
**/
add_theme_support( 'post-thumbnails' );

/**
 * Include the TGM_Plugin_Activation class.
**/
require_once get_template_directory() . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'ourmg_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function ourmg_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Easy Updates Manager',
			'slug'      => 'stops-core-theme-and-plugin-updates',
			'required'  => true,
		),
        array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),
        array(
			'name'      => 'Yoast SEO',
			'slug'      => 'wordpress-seo',
			'required'  => true,
		),
        array(
			'name'      => 'BackUP Guard',
			'slug'      => 'backup',
			'required'  => true,
		),
        array(
			'name'      => 'Wordfence Security',
			'slug'      => 'wordfence',
			'required'  => true,
		),
        array(
			'name'      => 'WP Super Cache',
			'slug'      => 'wp-super-cache',
			'required'  => true,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'ourmg',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'ourmg' ),
			'menu_title'                      => __( 'Install Plugins', 'ourmg' ),
			'installing'                      => __( 'Installing Plugin: %s', 'ourmg' ), // %s = plugin name.
			'oops'                            => __( 'Something went wrong with the plugin API.', 'ourmg' ),
			'notice_can_install_required'     => _n_noop(
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'ourmg'
			), // %1$s = plugin name(s).
			'notice_can_install_recommended'  => _n_noop(
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'ourmg'
			), // %1$s = plugin name(s).
			'notice_cannot_install'           => _n_noop(
				'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
				'ourmg'
			), // %1$s = plugin name(s).
			'notice_ask_to_update'            => _n_noop(
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'ourmg'
			), // %1$s = plugin name(s).
			'notice_ask_to_update_maybe'      => _n_noop(
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'ourmg'
			), // %1$s = plugin name(s).
			'notice_cannot_update'            => _n_noop(
				'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
				'ourmg'
			), // %1$s = plugin name(s).
			'notice_can_activate_required'    => _n_noop(
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'ourmg'
			), // %1$s = plugin name(s).
			'notice_can_activate_recommended' => _n_noop(
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'ourmg'
			), // %1$s = plugin name(s).
			'notice_cannot_activate'          => _n_noop(
				'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
				'ourmg'
			), // %1$s = plugin name(s).
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'ourmg'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'ourmg'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'ourmg'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'ourmg' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'ourmg' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'ourmg' ),
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'ourmg' ),  // %1$s = plugin name(s).
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'ourmg' ),  // %1$s = plugin name(s).
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'ourmg' ), // %s = dashboard link.
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'ourmg' ),

			'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		),
		*/
	);

	tgmpa( $plugins, $config );
}

/**
 * Include the custom functions.
**/

require_once get_template_directory() . '/inc/custom-functions.php';

/**
 * Include the custom metaboxes.
**/

require get_template_directory() . '/lib/meta-box/meta-box.php';

/**
 * Adds new role on theme activation or removes on deactivation
**/

add_action( 'after_switch_theme', 'add_client_role' );
    
function add_client_role() {
    add_role( 'client_role', 'Client Role',
        array (
            'read' => true,
            'delete_posts' => true,
            'edit_posts' => true,
            'delete_published_posts' => true,
            'publish_posts' => true,
            'upload_files' => true,
            'edit_published_posts' => true,
            'unfiltered_html' => true,
            'read_private_pages' => true,
            'edit_private_pages' => true,
            'delete_private_pages' => true,
            'read_private_posts' => true,
            'edit_private_posts' => true,
            'delete_private_posts' => true,
            'delete_others_posts' => true,
            'delete_published_pages' => true,
            'delete_others_pages' => true,
            'delete_pages' => true,
            'publish_pages' => true,
            'edit_published_pages' => true,
            'edit_others_pages' => true,
            'edit_pages' => true,
            'edit_others_posts' => true,
            'manage_links' => true,
            'manage_categories' => true,
            'moderate_comments' => true,
            'customize' => true,
            'remove_users' => true,
            'list_users' => true,
            'edit_users' => true,
            'edit_theme_options' => true,
            'delete_users' => true,
            'create_users' => true,
            
        )
    );
}

add_action( 'switch_theme', 'remove_client_role' );

function remove_client_role() {
    if( get_role('client_role') ){
        remove_role('client_role');
    }
}

/**
 * Allow SVG to upload in media library
**/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['eps'] = 'image/eps+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Update CSS within in Admin
**/
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri() . '/css/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


/**
 * Pagination
**/
function pagination($pages = '', $range = 3)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

<?php
/**
 * Turtlemint functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Turtlemint
 */

if ( ! function_exists( 'turtlemint_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function turtlemint_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Turtlemint, use a find and replace
		 * to change 'turtlemint' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'turtlemint', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'turtlemint' ),
		) );

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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'turtlemint_custom_background_args', array(
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
add_action( 'after_setup_theme', 'turtlemint_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function turtlemint_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'turtlemint_content_width', 640 );
}
add_action( 'after_setup_theme', 'turtlemint_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function turtlemint_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'turtlemint' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'turtlemint' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'turtlemint_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function turtlemint_scripts() {
	wp_enqueue_style( 'turtlemint-style', get_stylesheet_uri() );

	wp_enqueue_script( 'turtlemint-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'turtlemint-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'turtlemint_scripts' );

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
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * For applying specific classes - template-wise & page-wise
 */
function prefix_conditional_body_class( $classes ) {
    $classes[] = 'body-style';
    if( is_page_template('page-content-e.php') || is_page_template('page-content-e-2tier.php') || is_single() )
        $classes[] = 'tm-seo';

    if ( is_page('terms') || is_page('privacy')){ /*Terms & privacy page have same format*/
        $classes[] = 'terms';
    }

    if( is_404()) /*404 has same format as Terms*/
    {    $classes[] = 'terms';}


    if ( is_page('irda-license')){
        $classes[] = 'irda-license';
    }

    if ( is_page('general-insurance-companies-in-india')){
        $classes[] = 'gi';
    }

    return $classes;
}

add_filter( 'body_class', 'prefix_conditional_body_class' );

/**
 * For Dynamic Breadcrumbs on Pages
 */
function get_hansel_and_gretel_breadcrumbs()
{
    // Set variables for later use
    $here_text        = '';//__( '' );
    $home_link        = '';//home_url('/');
    $home_text        = '';//__( 'Home' );
    $home_text        = '';//'<img src="'. $blogdir.'/assets/images/home.svg" alt="turtlemint insurance" class="breadcrumb-icon"/>';
    $link_before      = '<li>';
    $link_after       = '</li>';
    $link_attr        = ' rel="v:url" property="v:title" class="breadcrum-style"';
    $link             = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $delimiter        = ''; //' &raquo; ';              // Delimiter between crumbs
    $before           = '<li><a class="breadcrum-text">'; //'<span class="current">'; // Tag before the current crumb
    $after            = '</a></li>'; //'</span>';                // Tag after the current crumb
    $page_addon       = '';                       // Adds the page number if the query is paged
    $breadcrumb_trail = '';
    $category_links   = '';

    /** 
     * Set our own $wp_the_query variable. Do not use the global variable version due to 
     * reliability
     */
    $wp_the_query   = $GLOBALS['wp_the_query'];
    $queried_object = $wp_the_query->get_queried_object();

    // Handle single post requests which includes single pages, posts and attatchments
    if ( is_singular() ) 
    {
        /** 
         * Set our own $post variable. Do not use the global variable version due to 
         * reliability. We will set $post_object variable to $GLOBALS['wp_the_query']
         */
        $post_object = sanitize_post( $queried_object );

        // Set variables 
        $title          = apply_filters( 'the_title', $post_object->post_title );
        $parent         = $post_object->post_parent;
        $post_type      = $post_object->post_type;
        $post_id        = $post_object->ID;
        $post_link      = $before . $title . $after;
        $parent_string  = '';
        $post_type_link = '';

        if ( 'post' === $post_type ) 
        {
            // Get the post categories
            $categories = get_the_category( $post_id );
            if ( $categories ) {
                // Lets grab the first category
                $category  = $categories[0];

                $category_links = get_category_parents( $category, true, $delimiter );
                $category_links = str_replace( '<a',   $link_before . '<a' . $link_attr, $category_links );
                $category_links = str_replace( '</a>', '</a>' . $link_after,             $category_links );
            }
        }

        if ( !in_array( $post_type, ['post', 'page', 'attachment'] ) )
        {
            $post_type_object = get_post_type_object( $post_type );
            $archive_link     = esc_url( get_post_type_archive_link( $post_type ) );

            $post_type_link   = sprintf( $link, $archive_link, $post_type_object->labels->singular_name );
        }

        // Get post parents if $parent !== 0
        if ( 0 !== $parent ) 
        {
            $parent_links = [];
            while ( $parent ) {
                $post_parent = get_post( $parent );

                $parent_links[] = sprintf( $link, esc_url( get_permalink( $post_parent->ID ) ), get_the_title( $post_parent->ID ) );

                $parent = $post_parent->post_parent;
            }

            $parent_links = array_reverse( $parent_links );

            $parent_string = implode( $delimiter, $parent_links );
        }

        // Lets build the breadcrumb trail
        if ( $parent_string ) {
            $breadcrumb_trail = $parent_string . $delimiter . $post_link;
        } else {
            $breadcrumb_trail = $post_link;
        }

        if ( $post_type_link )
            $breadcrumb_trail = $post_type_link . $delimiter . $breadcrumb_trail;

        if ( $category_links )
            $breadcrumb_trail = $category_links . $breadcrumb_trail;
    }

    // Handle archives which includes category-, tag-, taxonomy-, date-, custom post type archives and author archives
    if( is_archive() )
    {
        if (    is_category()
             || is_tag()
             || is_tax()
        ) {
            // Set the variables for this section
            $term_object        = get_term( $queried_object );
            $taxonomy           = $term_object->taxonomy;
            $term_id            = $term_object->term_id;
            $term_name          = $term_object->name;
            $term_parent        = $term_object->parent;
            $taxonomy_object    = get_taxonomy( $taxonomy );
            $current_term_link  = $before . $taxonomy_object->labels->singular_name . ': ' . $term_name . $after;
            $parent_term_string = '';

            if ( 0 !== $term_parent )
            {
                // Get all the current term ancestors
                $parent_term_links = [];
                while ( $term_parent ) {
                    $term = get_term( $term_parent, $taxonomy );

                    $parent_term_links[] = sprintf( $link, esc_url( get_term_link( $term ) ), $term->name );

                    $term_parent = $term->parent;
                }

                $parent_term_links  = array_reverse( $parent_term_links );
                $parent_term_string = implode( $delimiter, $parent_term_links );
            }

            if ( $parent_term_string ) {
                $breadcrumb_trail = $parent_term_string . $delimiter . $current_term_link;
            } else {
                $breadcrumb_trail = $current_term_link;
            }

        } elseif ( is_author() ) {

            $breadcrumb_trail = __( 'Author archive for ') .  $before . $queried_object->data->display_name . $after;

        } elseif ( is_date() ) {
            // Set default variables
            $year     = $wp_the_query->query_vars['year'];
            $monthnum = $wp_the_query->query_vars['monthnum'];
            $day      = $wp_the_query->query_vars['day'];

            // Get the month name if $monthnum has a value
            if ( $monthnum ) {
                $date_time  = DateTime::createFromFormat( '!m', $monthnum );
                $month_name = $date_time->format( 'F' );
            }

            if ( is_year() ) {

                $breadcrumb_trail = $before . $year . $after;

            } elseif( is_month() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ), $year );

                $breadcrumb_trail = $year_link . $delimiter . $before . $month_name . $after;

            } elseif( is_day() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ),             $year       );
                $month_link       = sprintf( $link, esc_url( get_month_link( $year, $monthnum ) ), $month_name );

                $breadcrumb_trail = $year_link . $delimiter . $month_link . $delimiter . $before . $day . $after;
            }

        } elseif ( is_post_type_archive() ) {

            $post_type        = $wp_the_query->query_vars['post_type'];
            $post_type_object = get_post_type_object( $post_type );

            $breadcrumb_trail = $before . $post_type_object->labels->singular_name . $after;

        }
    }   

    // Handle the search page
    if ( is_search() ) {
        $breadcrumb_trail = __( 'Search query for: ' ) . $before . get_search_query() . $after;
    }

    // Handle 404's
    if ( is_404() ) {
        $breadcrumb_trail = $before . __( 'Error 404' ) . $after;
    }

    // Handle paged pages
    if ( is_paged() ) {
        $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
        $page_addon   = $before . sprintf( __( ' ( Page %s )' ), number_format_i18n( $current_page ) ) . $after;
    }

    $breadcrumb_output_link  = '';
    $breadcrumb_output_link .= '';//'<!--<div class="breadcrumb">-->';
    $breadcrumb_output_link_2 = '';
    if (    is_home()
         || is_front_page()
    ) {
        // Do not show breadcrumbs on page one of home and frontpage
        if ( is_paged() ) {
            //$breadcrumb_output_link .= $here_text . $delimiter;
            //$breadcrumb_output_link_2 = 'sfsf<li><a href="/"><img src="'. $blogdir.'/assets/images/home.svg" alt="turtlemint insurance" class="breadcrumb-icon"/></a></li>';
            //$breadcrumb_output_link_2 .= $page_addon;
        }
    } else {
        //$breadcrumb_output_link .= $here_text . $delimiter;
        // $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title"  class="breadcrum-style">' . $home_text . '</a>';
        //$breadcrumb_output_link_2 = 'sssss<li><a href="/" class="breadcrum-style"><img src="'. $blogdir.'/assets/images/home.svg" alt="turtlemint insurance" class="breadcrumb-icon"/></a></li>';
        //$breadcrumb_output_link_2 .= $delimiter;
        $breadcrumb_output_link_2 = $breadcrumb_trail;
        //$breadcrumb_output_link_2 .= $page_addon;
    }
    $breadcrumb_output_link_2 .= '';//'<!--</div>--><!-- .breadcrumbs -->';

    return $breadcrumb_output_link_2;
}


/*
https://www.advancedcustomfields.com/resources/moving-wp-elements-content-editor-within-acf-fields/*/
add_action('acf/input/admin_head', 'my_acf_admin_head');
function my_acf_admin_head() {
    ?>
    <script type="text/javascript">
    (function($) {
        $(document).ready(function(){
            //$('.acf-field-54cf2c4fcfbfe .acf-input').append( $('#postdivrich') );
            $('.acf-field-5d8de7ad58f4f .acf-input').append( $('#postdivrich') );
        });
    })(jQuery);    
    </script>
    <style type="text/css">
        .acf-field #wp-content-editor-tools {
            background: transparent;
            padding-top: 0;
        }
        .acf-field tr.acf-row td.acf-fields div.acf-field-wysiwyg textarea.wp-editor-area{
            height: 100px !important;
            background-color: antiquewhite;/*#ffda96;*/
        }
        .acf-field tr.acf-row td.acf-fields div.acf-field-textarea textarea.wp-editor-area{
            background-color: antiquewhite;
        }
        .acf-field tr.acf-row td.acf-fields input[type="text"]{
            background-color: antiquewhite;
        }
    </style>
    <?php    
}

/*
https://wordpress.stackexchange.com/questions/41272/how-to-show-related-posts-by-category
*/
function get_related_category_post() {

    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );

    if(!empty($categories) && is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;

    $current_post_type = get_post_type($post_id);
    $query_args = array( 

        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post_not_in'    => array($post_id),
        'posts_per_page'  => '3'


     );

    $related_cats_post = new WP_Query( $query_args );

    if($related_cats_post->have_posts()):
         while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
            <ul>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                    <?php //the_content(); ?>
                </li>
            </ul>
        <?php endwhile;

        // Restore original Post Data
        wp_reset_postdata();
     endif;

}

/*https://stackoverflow.com/questions/23329494/how-to-add-class-on-wp-list-pages-children*/
class WPSE_Walker_Page extends Walker_Page {
    /**
     * @see Walker::start_lvl()
     * @since 2.1.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of page. Used for padding.
     * @param array $args
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<li class='li widget-list-style'>\n"; // MAKE SURE TO CHANGE CLASSES HERE
    }
}

/**
 * Get current page depth
 *
 * @return integer
 */
function get_current_page_depth(){
    global $wp_query;
     
    $object = $wp_query->get_queried_object();
    $parent_id  = $object->post_parent;
    $depth = 0;
    while($parent_id > 0){
        $page = get_page($parent_id);
        $parent_id = $page->post_parent;
        $depth++;
    }
  
    return $depth;
}

/*
* https://www.devdevote.com/cms/wordpress-hacks/get_depth.html
*/
function get_depth($id = '', $depth = '', $i = 0)
{
    global $wpdb;

    if($depth == '')
    {
        if(is_page())
        {
            if($id == '')
            {
                global $post;
                $id = $post->ID;
            }
            $depth = $wpdb->get_var("SELECT post_parent FROM $wpdb->posts WHERE ID = '".$id."'");
            return get_depth($id, $depth, $i);
        }
        elseif(is_category())
        {

            if($id == '')
            {
                global $cat;
                $id = $cat;
            }
            $depth = $wpdb->get_var("SELECT parent FROM $wpdb->term_taxonomy WHERE term_id = '".$id."'");
            return get_depth($id, $depth, $i);
        }
        elseif(is_single())
        {
            if($id == '')
            {
                $category = get_the_category();
                $id = $category[0]->cat_ID;
            }
            $depth = $wpdb->get_var("SELECT parent FROM $wpdb->term_taxonomy WHERE term_id = '".$id."'");
            return get_depth($id, $depth, $i);
        }
    }
    elseif($depth == '0')
    {
        return $i;
    }
    elseif(is_single() || is_category())
    {
        $depth = $wpdb->get_var("SELECT parent FROM $wpdb->term_taxonomy WHERE term_id = '".$depth."'");
        $i++;
        return get_depth($id, $depth, $i);
    }
    elseif(is_page())
    {
        $depth = $wpdb->get_var("SELECT post_parent FROM $wpdb->posts WHERE ID = '".$depth."'");
        $i++;
        return get_depth($id, $depth, $i);
    }
}


/**
 * Recursively get taxonomy hierarchy
 *
 * @source http://www.daggerhart.com/wordpress-get-taxonomy-hierarchy-including-children/
 * @param string $taxonomy
 * @param int    $parent - parent term id
 *
 * @return array
 */
function get_taxonomy_hierarchy( $taxonomy, $parent = 0 ) {
    // only 1 taxonomy
    $taxonomy = is_array( $taxonomy ) ? array_shift( $taxonomy ) : $taxonomy;
    // get all direct decendents of the $parent
    $terms = get_terms( $taxonomy, array('parent' => $parent) );
    // prepare a new array.  these are the children of $parent
    // we'll ultimately copy all the $terms into this new array, but only after they
    // find their own children
    $children = array();
    // go through all the direct decendents of $parent, and gather their children
    foreach( $terms as $term ) {
        // recurse to get the direct decendents of "this" term
        $term->children = get_taxonomy_hierarchy( $taxonomy, $term->term_id );
        // add the term to our new array
        $children[ $term->term_id ] = $term;
    }
    // send the results back to the caller
    return $children;
}


/**
 * Register Custom Footer widget area 20191030.
 *
 */
/*class _turtlemint_footer_widget extends WP_Widget{
    public function __construct(){
        parent::__construct(
            '_turtlemint_footer_widget',
            esc_html__('TM Footer Widget', '_turtlemint'),
            array(
                'description' => esc_html__('some description', '_turtlemint')
            )
        );
    }

    public function form($instance){
        var_dump($instance);
        if(isset($instance['title'])){
            $title = $instance['title'];
        } else {
            $title = "default text";
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title') ?>"><?php esc_html_e('Title:', '_turtlemint'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('post_count') ?>"><?php esc_html_e('Number of Posts:', '_turtlemint'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('post_count') ?>" name="<?php echo $this->get_field_name('post_count') ?>" type="number" min=1 >
        </p>
        <p>
            <input type="checkbox" id="<?php echo $this->get_field_id('include_date') ?>" name="<?php echo $this->get_field_name('include_date') ?>" >
            <label for="<?php echo $this->get_field_id('include_date') ?>"><?php esc_html_e('Include Date?', '_turtlemint'); ?></label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('sort_by') ?>"><?php esc_html_e('Sort By:', '_turtlemint'); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id('sort_by') ?>" name="<?php echo $this->get_field_name('sort_by') ?>">
                <option value="date"><?php esc_html_e('Most Recent', "_turtlemint") ?></option>
                <option value="rand"><?php esc_html_e('Random', "_turtlemint") ?></option>
                <option value="comment_count"><?php esc_html_e('Number Of Comments', "_turtlemint") ?></option>
            </select>
        </p>
        <?php
    }
    public function widget($args, $instance){
        var_dump($args);
        echo 'wqwq';
    }
    public function update($new_instance,$old_instance){
        $instance = array();
        //$instance['title'] = isset($new_instance['title']) ? sanitize_text_field($new_instance['title']) : ''; //No need to check as update() runs after form() where it is already checked
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['post_count'] = intval(
        return $instance;

    }

}
function _turtlemint_register_footer_widget() {
    register_widget('_turtlemint_footer_widget');

}
add_action( 'widgets_init', '_turtlemint_register_footer_widget' );*/

//Exclude pages from WordPress Search
if (!is_admin()) {
    function wpb_search_filter($query) {
    if ($query->is_search) {
    $query->set('post_type', 'post');
    }
    return $query;
    }
    add_filter('pre_get_posts','wpb_search_filter');
}

/**
 * Google recaptcha add before the submit button
 */
function add_google_recaptcha($submit_field) {
    $submit_field['submit_field'] = '<div class="g-recaptcha" data-sitekey="6LfygvAUAAAAAE31HF9lgLZ8vhLh5jxOCYJwVAs2"></div><br>' . $submit_field['submit_field'];
    return $submit_field;
}
if (!is_user_logged_in()) {
    add_filter('comment_form_defaults','add_google_recaptcha');
}
 
/**
 * Google recaptcha check, validate and catch the spammer
 */
function is_valid_captcha($captcha) {
$captcha_postdata = http_build_query(array(
                            'secret' => '6LfygvAUAAAAANXdMMKT9548ECqCS9IBlJwaJ9uq',
                            'response' => $captcha,
                            'remoteip' => $_SERVER['REMOTE_ADDR']));
$captcha_opts = array('http' => array(
                      'method'  => 'POST',
                      'header'  => 'Content-type: application/x-www-form-urlencoded',
                      'content' => $captcha_postdata));
$captcha_context  = stream_context_create($captcha_opts);
$captcha_response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify" , false , $captcha_context), true);
if ($captcha_response['success'])
    return true;
else
    return false;
}
 
function verify_google_recaptcha() {
$recaptcha = $_POST['g-recaptcha-response'];
if (empty($recaptcha))
    wp_die( __("<b>ERROR:</b> please select <b>I'm not a robot!</b><p><a href='javascript:history.back()'>« Back</a></p>"));
else if (!is_valid_captcha($recaptcha))
    wp_die( __("<b>Go away SPAMMER!</b>"));
}
if (!is_user_logged_in()) {
    add_action('pre_comment_on_post', 'verify_google_recaptcha');
}

/**
 * Remove URL Input from Comments
 */
add_filter('comment_form_default_fields', 'unset_url_field'); 
function unset_url_field($fields){ 
    if(isset($fields['url'])) unset($fields['url']); 
    return $fields; 
}
/**
 * Change Default Sender Email
 */
// Function to change email address
//function wpb_sender_email( $original_email_address ) {
//    return 'tim.smith@example.com';
//}
 
// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'Turtlemint';
}
 
// Hooking up our functions to WordPress filters 
//add_filter( 'wp_mail_from', 'wpb_sender_email' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );

/**
 * Blog Template for PR 20210823
 ***/
/*define(SINGLE_PATH, TEMPLATEPATH); error in php8 */
define('SINGLE_PATH', get_template_directory());
/** Filter the single_template with our custom function */
add_filter('single_template', 'company_updates_single_template');
 
/*** Single template function which will choose our template*/
function company_updates_single_template($single) {
global $wp_query, $post;

/*** Checks for single template by category
 * * Check by category slug
*/
foreach((array)get_the_category() as $cat) :

if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
    
else
return TEMPLATEPATH . '/single.php';

endforeach;
}

add_filter('jpeg_quality', function($arg){return 100;});
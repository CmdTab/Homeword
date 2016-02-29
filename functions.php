<?php
/**
 * Home Word functions and definitions
 *
 * @package Home Word
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'homeword_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function homeword_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Home Word, use a find and replace
	 * to change 'homeword' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'homeword', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'footer' => __( 'Footer Links', 'homeword' ),
		'families' => __( 'Familiy Menu', 'homeword' ),
		'church' => __( 'Church Leader Menu', 'homeword' ),
		'about' => __( 'About Us Menu', 'homeword' ),
		'cust' => __( 'Customer Service Menu', 'homeword' ),
		'format' => __( 'Format Menu', 'homeword' ),
		'author' => __( 'Author Menu', 'homeword' ),
		'devo' => __( 'Devo Menu', 'homeword' ),
		'blog' => __( 'Blog Menu', 'homeword' ),
		'seminar' => __( 'Seminar Menu', 'homeword' ),
		'intentional' => __( 'Intentional Nav', 'homeword' ),
		'download' => __( 'Download Nav', 'homeword' ),
		'famnetwork' => __( 'Fam Network Nav', 'homeword' ),
	) );
	//Get variable at end of menu
	add_filter( 'wp_nav_menu_objects', 'add_var', 10, 2 );

function add_var( $items, $args ) {
    $out = array();
    if( $args->theme_location == 'families' ) {
    	foreach ( $items as $item ) {
	        if ( isset ( $item->url ) ) {
	        	$item->url .= '?cat=families';
	        }
			$out[] = $item;
	    }
    } elseif ( $args->theme_location == 'church' ) {
    	foreach ( $items as $item ) {
	        if ( isset ( $item->url ) ) {
	        	$item->url .= '?cat=church';
	        }
			$out[] = $item;
	    }

	} else {
    	$out = $items;
    }


    return $out;
}

	// Enable support for Post Formats.
	//add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
	add_theme_support( 'post-thumbnails' );

	// Setup the WordPress core custom background feature.
	/*add_theme_support( 'custom-background', apply_filters( 'homeword_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );*/
}
endif; // homeword_setup
add_action( 'after_setup_theme', 'homeword_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function homeword_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Family Widgets', 'homeword' ),
		'id'            => 'family-widgets',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',

	) );
	register_sidebar( array(
		'name'          => __( 'Church Widgets', 'homeword' ),
		'id'            => 'church-widgets',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => __( 'About Widgets', 'homeword' ),
		'id'            => 'about-widgets',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	) );
}
add_action( 'widgets_init', 'homeword_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function homeword_scripts() {
	wp_enqueue_style( 'homeword-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if(is_page_template( 'page-intentional.php' ) ) {
		wp_dequeue_style('homeword-style');
		wp_enqueue_style( 'intentional-style', get_template_directory_uri() . '/intentional.css' );
	}
	if(is_page_template( 'page-download-free.php' ) ) {
		wp_dequeue_style('homeword-style');
		wp_enqueue_style( 'intentional-style', get_template_directory_uri() . '/intentional.css' );
	}
	if(is_page_template( 'page-download-now.php' ) ) {
		wp_dequeue_style('homeword-style');
		wp_enqueue_style( 'intentional-style', get_template_directory_uri() . '/intentional.css' );
	}
	if(is_page_template( 'page-famnetwork.php' ) ) {
		wp_dequeue_style('homeword-style');
		wp_enqueue_style( 'famnetwork-style', get_template_directory_uri() . '/famnetwork.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'homeword_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/*Custom Taxonomy*/
add_action( 'init', 'create_tax' );
function create_tax() {
	register_taxonomy(
		'area',
		array('post', 'articles', 'devotionals'),
		array(
			'label' => __( 'Area' ),
			'rewrite' => array( 'slug' => 'area' ),
			'hierarchical' => true,
		)
	);
	/*register_taxonomy(
		'type',
		array('product'),
		array(
			'label' => __( 'Type' ),
			'rewrite' => array( 'slug' => 'type' ),
			'hierarchical' => true,
		)
	);
	register_taxonomy(
		'author',
		array('product'),
		array(
			'label' => __( 'Author' ),
			'rewrite' => array( 'slug' => 'author' ),
			'hierarchical' => true,
		)
	);*/
}
/*Custom Post Types*/
function create_post_type() {
	$articleArgs = array(
		'label'  => 'Advice Articles',
		'labels' => array(
			'singular_name' => 'Advice'
			),
		'public' => true,
		'has_archive' => true,
		'menu_position' => 5,
		'taxonomies' => array('category', 'area'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'author')
	);
	register_post_type( 'articles', $articleArgs );
	$devotionArgs = array(
		'label'  => 'Devotionals',
		'labels' => array(
			'singular_name' => 'Devotion'
			),
		'public' => true,
		'has_archive' => true,
		'menu_position' => 5,
		'taxonomies' => array('category', 'area'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'author')
	);
	register_post_type( 'devotionals', $devotionArgs );
	$sliderArgs = array(
		'label'  => 'Sliders',
		'labels' => array(
			'singular_name' => 'Slider'
			),
		'public' => true,
		'has_archive' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'author')
	);
	register_post_type( 'sliders', $sliderArgs );
}
add_action( 'init', 'create_post_type' );
/*Rename Posts*/
function change_post_menu_label() {
    global $menu;
    $menu[5][0] = 'Culture Blog';
}
add_action( 'admin_menu', 'change_post_menu_label' );
/*Remove Tags*/
function remove_tags() {
	remove_meta_box( 'tagsdiv-post_tag', 'post', 'normal' );
	remove_meta_box( 'postcustom', 'post', 'normal' );
	remove_meta_box( 'formatdiv', 'post', 'normal' );
}
add_action( 'admin_menu', 'remove_tags' );
/*Excerpt*/
function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
remove_filter( 'the_excerpt', 'wpautop' );
function get_excerpt($limit, $source = null){

    if($source == "content" ? ($excerpt = get_the_content()) : ($excerpt = get_the_excerpt()));
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $limit);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'...';
    return $excerpt;
}
/*WooCommerce*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div class="content-section">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}
add_theme_support( 'woocommerce' );
function change_product_layout() {

	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash' );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs' );
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count' );


	add_action( 'woocommerce_single_product_cart', 'woocommerce_template_single_price', 20 );
	add_action( 'woocommerce_single_product_cart', 'woocommerce_template_single_add_to_cart', 25 );

}
add_action ('init', 'change_product_layout');

/*function woocommerce_quantity_input() {
    global $product;

	$defaults = array(
		'input_name'  	=> 'quantity',
		'input_value'  	=> '1',
		'max_value'  	=> apply_filters( 'woocommerce_quantity_input_max', '', $product ),
		'min_value'  	=> apply_filters( 'woocommerce_quantity_input_min', '', $product ),
		'step' 		=> apply_filters( 'woocommerce_quantity_input_step', '1', $product ),
		'style'		=> apply_filters( 'woocommerce_quantity_style', 'float:left; margin-right:10px;', $product )
	);
	if ( ! empty( $defaults['min_value'] ) )
		$min = $defaults['min_value'];
	else $min = 1;

	if ( ! empty( $defaults['max_value'] ) )
		$max = $defaults['max_value'];
	else $max = 20;

	if ( ! empty( $defaults['step'] ) )
		$step = $defaults['step'];
	else $step = 1;

	$options = '';
	for ( $count = $min; $count <= $max; $count = $count+$step ) {
		$options .= '<option value="' . $count . '">' . $count . '</option>';
	}
	echo '<div class="quantity_select"><label>Qty:</label><span class="select-qty"><select name="' . esc_attr( $defaults['input_name'] ) . '" title="' . _x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) . '" class="qty">' . $options . '</select></span></div>';
}*/
add_filter( 'woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url' );
function woo_custom_breadrumb_home_url() {
    return 'http://homeword.com/store';
}
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_change_breadcrumb_home_text' );
function jk_change_breadcrumb_home_text( $defaults ) {
    // Change the breadcrumb home text from 'Home' to 'Appartment'
	$defaults['home'] = 'Store';
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_change_breadcrumb_delimiter' );
function jk_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = ' > ';
	return $defaults;
}
/***Author Fields***/
// Display Fields
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );

// Save Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

function woo_add_custom_general_fields() {
	global $woocommerce, $post;
	echo '<div class="options_group">';
	// Author Field
	woocommerce_wp_text_input(
		array(
			'id'          => '_author_field',
			'label'       => __( 'Author', 'woocommerce' ),
			'placeholder' => 'Name',
			'desc_tip'    => 'true',
			'description' => __( 'Enter the name of the author or leave blank if there is none.', 'woocommerce' )
		)
	);
	// Publisher Field
	woocommerce_wp_text_input(
		array(
			'id'          => '_publisher_field',
			'label'       => __( 'Publisher', 'woocommerce' ),
			'placeholder' => 'Name',
			'desc_tip'    => 'true',
			'description' => __( 'Enter the name of the Publisher or leave blank if there is none.', 'woocommerce' )
		)
	);
	// Year Field
	woocommerce_wp_text_input(
		array(
			'id'          => '_year_field',
			'label'       => __( 'Year Published', 'woocommerce' ),
			'placeholder' => 'YYYY',
			'desc_tip'    => 'true',
			'description' => __( 'Enter the year it was published or leave blank if there is none.', 'woocommerce' )
		)
	);
	// Format Field
	woocommerce_wp_text_input(
		array(
			'id'          => '_format_field',
			'label'       => __( 'Format', 'woocommerce' ),
			'placeholder' => 'Ex: Softcover',
			'desc_tip'    => 'true',
			'description' => __( 'Enter the format the book is in or leave blank if there is none.', 'woocommerce' )
		)
	);
	// Pages Field
	woocommerce_wp_text_input(
		array(
			'id'          => '_pages_field',
			'label'       => __( 'No. Pages', 'woocommerce' ),
			'placeholder' => '###',
			'desc_tip'    => 'true',
			'description' => __( 'Enter the number of pages or leave blank if there is none.', 'woocommerce' )
		)
	);
	echo '</div>';
}
function woo_add_custom_general_fields_save( $post_id ){
	// Author Field
	$woocommerce_text_field = $_POST['_author_field'];
	if( !empty( $woocommerce_text_field ) )
		update_post_meta( $post_id, '_author_field', esc_attr( $woocommerce_text_field ) );
	// Publisher Field
	$woocommerce_publisher_field = $_POST['_publisher_field'];
	if( !empty( $woocommerce_publisher_field ) )
		update_post_meta( $post_id, '_publisher_field', esc_attr( $woocommerce_publisher_field ) );
	// Year Field
	$woocommerce_year_field = $_POST['_year_field'];
	if( !empty( $woocommerce_year_field ) )
		update_post_meta( $post_id, '_year_field', esc_attr( $woocommerce_year_field ) );
	// Format Field
	$woocommerce_format_field = $_POST['_format_field'];
	if( !empty( $woocommerce_format_field ) )
		update_post_meta( $post_id, '_format_field', esc_attr( $woocommerce_format_field ) );
	// Pages Field
	$woocommerce_pages_field = $_POST['_pages_field'];
	if( !empty( $woocommerce_pages_field ) )
		update_post_meta( $post_id, '_pages_field', esc_attr( $woocommerce_pages_field ) );
}
add_filter( 'woocommerce_default_address_fields' , 'custom_override_default_address_fields' );

// Our hooked in function - $address_fields is passed via the filter!
function custom_override_default_address_fields( $address_fields ) {
     $address_fields['address_2']['label'] = 'Address 2';

     return $address_fields;
}
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );
function update_cart_total_cookie() {
    global $woocommerce;
    if ($woocommerce->cart->cart_contents_count) {
	    $cart_total = $woocommerce->cart->cart_contents_count;
	    setcookie('woocommerce_cart_total', $cart_total, 0, '/');
	}
}
add_action('init', 'update_cart_total_cookie');
// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();
	
	?>
	<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><span aria-hidden="true" data-icon="&#x76;"></span><span class="cart-count"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span></a>
	<?php

	$fragments['a.cart-contents'] = ob_get_clean();

	return $fragments;

}

add_filter( 'woocommerce_enqueue_styles', '__return_false' );
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10 );
/*Custom Attribute Menus*/
add_filter('woocommerce_attribute_show_in_nav_menus', 'wc_reg_for_menus', 1, 2);

function wc_reg_for_menus( $register, $name = '' ) {
     if ( $name == 'pa_format' ) $register = true;
     return $register;

}
add_filter('woocommerce_attribute_show_in_nav_menus', 'wc_reg_author_menus', 1, 2);

function wc_reg_author_menus( $register, $name = '' ) {
     if ( $name == 'pa_authors' ) $register = true;
     return $register;

}

/*Custom Post Type Archive*/
function namespace_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'articles', 'devotionals'
		));
	  return $query;
	}
}
//add_filter( 'pre_get_posts', 'namespace_add_custom_types' );
/*Social Shortcode*/
function socialicon_func( $atts ) {
	extract( shortcode_atts( array(
		'name' => 'homeword',
	), $atts ) );
	if($name === 'jim') {
		return '<div class="social-links"><a href = "https://twitter.com/drjimburns"><span aria-hidden="true" data-icon="&#x74;"></span><span class="assistive-text">Twitter</span></a><a href = "https://www.facebook.com/jim.burns.395454?fref=ts"><span aria-hidden="true" data-icon="&#x66;"></span><span class="assistive-text">Facebook</span></a></div>';
	} elseif($name === 'doug') {
		return '<div class="social-links"><a href = "https://twitter.com/dougfields"><span aria-hidden="true" data-icon="&#x74;"></span><span class="assistive-text">Twitter</span></a><a href = "https://www.facebook.com/dougfields"><span aria-hidden="true" data-icon="&#x66;"></span><span class="assistive-text">Facebook</span></a><a href = "http://instagram.com/dougfields"><span aria-hidden="true" data-icon="&#x69;"></span><span class="assistive-text">Instagram</span></a></div>';
	} else {
		return '<div class="social-links"><a href = "https://www.facebook.com/Homeword"><span aria-hidden="true" data-icon="&#x66;"></span><span class="assistive-text">Facebook</span></a><a href = "https://twitter.com/drjimburns"><span aria-hidden="true" data-icon="&#x74;"></span><span class="assistive-text">Twitter</span></a><a href = "http://www.pinterest.com/homewordcenter"><span aria-hidden="true" data-icon="&#x70;"></span><span class="assistive-text">Pinterest</span></a><a href = "http://instagram.com/homewordcenteratapu"><span aria-hidden="true" data-icon="&#x69;"></span><span class="assistive-text">Instagram</span></a></div>';
	}
}
add_shortcode( 'socialicon', 'socialicon_func' );
/*function custom_post_author_archive( &$query )
{
    if ( $query->is_author )
        $query->set( 'post_type', array('articles', 'post', 'devotionals') );
    remove_action( 'pre_get_posts', 'custom_post_author_archive' ); // run once!
}
add_action( 'pre_get_posts', 'custom_post_author_archive' );*/
function add_custom_types( $query ) {
  if( is_author() ) {
    $query->set( 'post_type', array('post', 'devotionals', 'articles', 'nav_menu_item'));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'add_custom_types' );
// Define what post types to search
function searchAll( $query ) {
	if ( $query->is_search ) {
		$query->set( 'post_type', array( 'post', 'page', 'feed', 'articles', 'devotionals'));
	}
	return $query;
}

// The hook needed to search ALL content
add_filter( 'the_search_query', 'searchAll' );
//Function to add featured image in RSS feeds
add_image_size( 'email-thumb', 230, 230 );
function featured_image_in_rss($content)
{
    // Global $post variable
    global $post;
    // Check if the post has a featured image
    if (has_post_thumbnail($post->ID))
    {
        $content = get_the_post_thumbnail($post->ID, 'email-thumb') .'<br/>'. $content;
    }
    return $content;
}

//Add the filter for RSS feeds Excerpt
add_filter('the_excerpt_rss', 'featured_image_in_rss');
//Add the filter for RSS feed content
add_filter('the_content_feed', 'featured_image_in_rss');

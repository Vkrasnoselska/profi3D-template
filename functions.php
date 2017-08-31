<?php
/**
 * Print shop functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Print_shop
 */


if (!function_exists('print_shop_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function print_shop_setup()
  {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Print shop, use a find and replace
     * to change 'print-shop' to the name of your theme in all the template files.
     */
    load_theme_textdomain('print-shop', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');
    // Register image size
   add_image_size('home_page_tabs', 120, 100);
   add_image_size('archive-blog-image', 440, 295);
   add_image_size('menu-image', 120, 90, true);


    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
      'primary' => esc_html__('Primary', 'print-shop'),
      'footer' => esc_html__('Footer', 'print-shop'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('print_shop_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    )));
  }
endif;
add_action('after_setup_theme', 'print_shop_setup');


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function print_shop_content_width()
{
  $GLOBALS['content_width'] = apply_filters('print_shop_content_width', 640);
}

add_action('after_setup_theme', 'print_shop_content_width', 0);


/**
 * Enqueue scripts and styles.
 */
function print_shop_scripts() {
    wp_enqueue_style('print-shop-style', get_stylesheet_uri());

//  wp_enqueue_script('print-shop-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true);

// wp_enqueue_script('print-shop-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true);

//  wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/libs/waypoints/waypoints.min.js', array('jquery'), '20151215', true);

//  wp_enqueue_script('animate', get_template_directory_uri() . '/assets/libs/animate/animate-css.js', array('jquery'), '20151215', true);

//  wp_enqueue_script('plugins-scroll', get_template_directory_uri() . '/assets/libs/plugins-scroll/plugins-scroll.js', array('jquery'), '20151215', true);

  wp_enqueue_script('libs-js', get_template_directory_uri() . '/assets/js/libs.js', array('jquery'), '20151215', true);

  wp_enqueue_script('images-loaded', get_template_directory_uri() . '/assets/libs/imagesloaded-master/imagesloaded.pkgd.min.js', array('jquery'), '20151215', true);

  wp_enqueue_script('infinite-scroll', get_template_directory_uri() . '/assets/libs/infinite-scroll-master/jquery.infinitescroll.min.js', array('jquery'), '20151215', true);

function wooc_extra_register_fields() {?>

<p class="form-row form-row-first">
       <label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?><span class="required">*</span></label>
       <input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" required value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
       </p> 
       <p class="form-row form-row-last">
       <label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?><span class="required">*</span></label>
       <input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name"  required value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
       </p>
<p class="form-row form-row-wide">
       <label for="reg_billing_company"><?php _e( 'Company', 'woocommerce' ); ?><span class="required">*</span></label>
       <input type="text" class="input-text" name="billing_company" id="reg_billing_company" required value="<?php esc_attr_e( $_POST['billing_company'] ); ?>" />
       </p>

<p class="form-row form-row-wide">
       <label for="reg_billing_address_1"><?php _e( 'Address', 'woocommerce' ); ?><span class="required">*</span></label>
       <input type="text" class="input-text" name="billing_address_1" required id="reg_billing_address_1" value="<?php esc_attr_e( $_POST['billing_address_1'] ); ?>" />
       </p>
<p class="form-row form-row-first">
       <label for="reg_billing_postcode"><?php _e( 'Postcode', 'woocommerce' ); ?></label>
       <input type="text" class="input-text" name="billing_postcode" required id="reg_billing_postcode" value="<?php esc_attr_e( $_POST['billing_postcode'] ); ?>" />
       </p>
   <p class="form-row form-row-last">
       <label for="reg_billing_phone"><?php _e( 'Phone', 'woocommerce' ); ?></label>
       <input type="text" class="input-text" name="billing_phone" required id="reg_billing_phone" value="<?php esc_attr_e( $_POST['billing_phone'] ); ?>" />
       </p>
       
       <div class="clear"></div>
       <?php
 }
 add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );


  //waitMe

//  wp_enqueue_style('waitMe', get_template_directory_uri() . '/assets/libs/waitMe/waitMe.min.css');

//  wp_enqueue_script('waitMe', get_template_directory_uri() . '/assets/libs/waitMe/waitMe.min.js', array('jquery'), '20151215', true);

  // jQueryFormStyler

//	wp_enqueue_style( 'FormStyler', get_template_directory_uri() . '/assets/libs/jQueryFormStyler/jquery.formstyler.css' );

  wp_enqueue_script('common-js', get_template_directory_uri() . '/assets/js/common.js', array('jquery'), '20151215', true);

  wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '20151215', true);


}
add_action('wp_enqueue_scripts', 'print_shop_scripts');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

/*-----------------------------------Custom function----------------------------------------------------*/

// Woocommerce support
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support() {
 add_theme_support('woocommerce');
}

// Disable woocommerce style
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Register shop sidebar
add_action('widgets_init', 'register_custom_sidebars');
function register_custom_sidebars()
{
 register_sidebar(array(
   'name' => __('Shop Sidebar', 'print_shop'),
   'id' => "shop-sidebar",
   'description' => '',
   'class' => '',
 ));

 register_sidebar(array(
   'name' => __('Footer Second Column', 'print_shop'),
   'id' => "footer_second_col",
   'description' => '',
   'class' => '',
   'before_widget' => '',
   'after_widget'  => ''
 ));

}

// Ajax update quantity in mini cart
add_action('wp_ajax_quantity', 'mimi_cart_quantity');
add_action('wp_ajax_nopriv_quantity', 'mimi_cart_quantity');
function mimi_cart_quantity() {
 //the cart key stores information about cart
 $cartKeySanitized = filter_var($_POST['cart_item_key'], FILTER_SANITIZE_STRING);
 //the new qty you want for the product in cart
 $cartQtySanitized = filter_var($_POST['cart_item_qty'], FILTER_SANITIZE_STRING);
 //update the quantity
 global $woocommerce;
 ob_start();
 $woocommerce->cart->set_quantity($cartKeySanitized, $cartQtySanitized);
 ob_get_clean();
 echo wc_get_template('cart/mini-cart.php');
 wp_die();
}

// Ajax delete product in mini cart
add_action('wp_ajax_product_remove', 'product_remove');
add_action('wp_ajax_nopriv_product_remove', 'product_remove');
function product_remove() {
 $cart = WC()->instance()->cart;
 $cart_id = $_POST['product_id'];
 $cart_item_id = $cart->find_product_in_cart($cart_id);

 if ($cart_item_id) {
   $cart->set_quantity($cart_item_id, 0);
   echo wc_get_template('cart/mini-cart.php');
 }
 die();
}

// Ajax update cart product count
add_action('wp_ajax_cart_product_count', 'update_cart_product_count');
add_action('wp_ajax_nopriv_cart_product_count', 'update_cart_product_count');
function update_cart_product_count()
{
 echo WC()->cart->get_cart_contents_count();
 die();
}

// Update after press add to cart button
add_filter('woocommerce_add_to_cart_redirect', 'custom_add_to_cart_redirect');
function custom_add_to_cart_redirect() {
 $current_url = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 return $current_url;
}

// Ajax get woocommerce template
add_action('wp_ajax_cs_wc_get_template', 'cs_wc_get_template');
add_action('wp_ajax_nopriv_cs_wc_get_template', 'cs_wc_get_template');
function cs_wc_get_template() {
 $templane_name = $_POST['template'];
 echo wc_get_template($templane_name);
 die();
}

// Ajax  woocommerce template shortcode
add_action('wp_ajax_cs_wc_do_shortcode', 'cs_wc_do_shortcode');
add_action('wp_ajax_nopriv_cs_wc_do_shortcode', 'cs_wc_do_shortcode');
function cs_wc_do_shortcode() {
 $shortcode_name = $_POST['shortcode'];
 echo do_shortcode($shortcode_name);
 die();
}

// Views counter
add_action('wp_head', 'kama_postviews');
function kama_postviews() {
 $meta_key = 'views';
 $who_count = 0;
 $exclude_bots = 1;
 global $user_ID, $post;
 if (is_singular()) {
   $id = (int)$post->ID;
   static $post_views = false;
   if ($post_views) return true;
   $post_views = (int)get_post_meta($id, $meta_key, true);
   $should_count = false;
   switch ((int)$who_count) {
     case 0:
       $should_count = true;
       break;
     case 1:
       if ((int)$user_ID == 0)
         $should_count = true;
       break;
     case 2:
       if ((int)$user_ID > 0)
         $should_count = true;
       break;
   }
   if ((int)$exclude_bots == 1 && $should_count) {
     $useragent = $_SERVER['HTTP_USER_AGENT'];
     $notbot = "Mozilla|Opera";
     $bot = "Bot/|robot|Slurp/|yahoo";
     if (!preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent))
       $should_count = false;
   }
   if ($should_count)
     if (!update_post_meta($id, $meta_key, ($post_views + 1))) add_post_meta($id, $meta_key, 1, true);
 }
 return true;
}

// Remove breadcrumb in wc
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);


// Show default variation price in  variation product
add_filter('woocommerce_variable_sale_price_html', 'custom_variation_sale_price', 10, 2);
// add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);
function custom_variation_sale_price($price, $product) {
 foreach ($product->get_available_variations() as $pav) {
   $def = true;
   foreach ($product->get_variation_default_attributes() as $defkey => $defval) {
     if ($pav['attributes']['attribute_' . $defkey] != $defval) {
       $def = false;
     }
   }
   if ($def) {
     $price = $product->get_price_html_from_to($pav['display_regular_price'],$pav['display_price']);
   }
 }
 return $price;
}

add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);
function custom_variation_price($price, $product) {
  foreach ($product->get_available_variations() as $pav) {
    $def = true;
    foreach ($product->get_variation_default_attributes() as $defkey => $defval) {
      if ($pav['attributes']['attribute_' . $defkey] != $defval) {
        $def = false;
      }
    }
    if ($def) {
      $price = '<p class="store-price">' . $pav['price_html'] . '</p>';
    }
  }
  return $price;
}

// Wpauto filter for deleting auto p wrapper
add_filter( 'ot_wpautop', 'filter_textarea_wpautop', 10, 2 );
function filter_textarea_wpautop( $content, $field_id ) {
 /* only run the filter on the textarea with a field ID of my_textarea */
  if ( $field_id == 'my_textarea' ) {
    return false;
  }
  return $content;
}

// Change class in next button wp pagenavi
add_filter('wp_pagenavi_class_nextpostslink', 'posts_link_attributes');
function posts_link_attributes() {
  return 'nextpostslink next';
}

// Enqueue script for separate page
add_action('template_redirect', function() {
  add_action('wp_enqueue_scripts', 'enqueue_script_for_separate_page');
});
function enqueue_script_for_separate_page(){
  // Deregister style in wp subscribe plugin
  wp_deregister_style('wp-subscribe');

  if (is_page('checkout') || is_page('my-account')) {
    wp_enqueue_style('woo_css', get_template_directory_uri() . '/assets/css/woocommerce.css');
    wp_enqueue_style('woo_style_css', get_template_directory_uri() . '/assets/css/wc-style.css');
  }

   if( !is_product() && !is_page('wishlist') && !is_page('compare') ) {

     wp_deregister_style('tm-woocompare');
     wp_deregister_style('tm-woowishlist');
     wp_deregister_style('bootstrap-grid');
     wp_deregister_script('tm-woocompare');
     wp_deregister_script('tm-woowishlist');

   }

  if( !is_product() && !is_single() ) {

    wp_deregister_style('A2A_SHARE_SAVE');
    wp_deregister_script('addtoany');

  }

  if(!is_shop() && !is_product_category() && !is_product_tag() && !is_page('blog')) {
    wp_deregister_style('wp-pagenavi');

    wp_deregister_style('yith-infs-style');
    wp_deregister_script('yith-infinitescroll');
    wp_deregister_script('yith-infs');
  }

  if(!is_page('blog')) {
    wp_deregister_script('images-loaded');
    wp_deregister_script('infinite-scroll');
  }

 if(is_page('compare')) {

   wp_enqueue_script('custom-compare', get_template_directory_uri() . '/assets/js/custom-compare.js', array('jquery', 'tablesaw', 'tm-woocompare', 'tablesaw-init'), '20151215', true);

    add_filter('woocommerce_get_product_attributes', function($attributes){
      if(isset($attributes['pa_set-up-installation'])) {
        unset($attributes['pa_set-up-installation']);
      }
      if(isset($attributes['pa_warranty'])) {
          unset($attributes['pa_warranty']);
      }
      return $attributes;
    }, 10 ,1 );
  }

}
// Remove shipping and shipping calculate from cart
add_filter( 'woocommerce_cart_ready_to_calc_shipping', 'disable_shipping_calc_on_cart', 99 );
function disable_shipping_calc_on_cart( $show_shipping ) {
  if( is_cart() ) {
    return false;
  }
  return $show_shipping;
}

// Change Tax label in cart
add_filter( 'woocommerce_countries_ex_tax_or_vat', 'sv_change_email_tax_label' );
function sv_change_email_tax_label( $label ) {
  $label = '';
  return $label;
}

// Fix CSS conflict Option Tree and Yith plugin
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style', 100 );
function load_custom_wp_admin_style() {
 wp_deregister_style('yit-jquery-ui-style');
 wp_deregister_style('jquery-ui-overcast');
}


// Product attribute price in cart
add_filter('woocommerce_get_item_data', function($item_data, $cart_item){

  // Variation data
  if ( ! empty( $cart_item['data']->variation_id ) && is_array( $cart_item['variation'] ) ) {
    foreach ( $cart_item['variation'] as $name => $value ) {
      if ( '' === $value )
        continue;
      $taxonomy = wc_attribute_taxonomy_name( str_replace( 'attribute_pa_', '', urldecode( $name ) ) );
      // If this is a term slug, get the term's nice name
      if ( taxonomy_exists( $taxonomy ) ) {
        $term = get_term_by( 'slug', $value, $taxonomy );
        if ( ! is_wp_error( $term ) && $term && $term->name ) {
          $value = $term->name;
        }
        $label = wc_attribute_label( $taxonomy );
        // If this is a custom option slug, get the options name
      } else {
        $value              = apply_filters( 'woocommerce_variation_option_name', $value );
        $product_attributes = $cart_item['data']->get_attributes();
        if ( isset( $product_attributes[ str_replace( 'attribute_', '', $name ) ] ) ) {
          $label = wc_attribute_label( $product_attributes[ str_replace( 'attribute_', '', $name ) ]['name'] );
        } else {
          $label = $name;
        }
      }
      $term = get_term_by( 'slug', $value, $taxonomy );

      $new_item_data[] = array(
        'key'   => $label,
        'value' => $value,
        'att-pr-key' => $name . "_" . $term->slug,
        'product-id' => $cart_item['product_id']
      );
    }
  }
  return $new_item_data;

}, 10, 2);

// Ajax get wishlist count
add_action('wp_ajax_wishlist_count', 'wishlist_count');
add_action('wp_ajax_nopriv_wishlist_count', 'wishlist_count');
function wishlist_count() {
  echo count(tm_woowishlist_get_list());
  die();
}

// Custom Shipping for printers and scanners category
add_action( 'woocommerce_flat_rate_shipping_add_rate', 'add_another_custom_flat_rate', 10, 2 );
function add_another_custom_flat_rate( $method, $rate ) {
  $flag = false;
  $price = 0;
  foreach ($rate['package']['contents'] as $content) {
    $cats = wp_get_post_terms( $content['product_id'], 'product_cat', array("fields" => "ids") );
    if(in_array(6, $cats) || in_array(7, $cats)){
      $flag = true;
      $price += get_field('shipping_coast', $content['product_id']) * (int) $content['quantity'];
    }
  }
  if($flag) {
    $new_rate = $rate;
    $new_rate['cost'] = $price;
    $new_rate['label'] = 'Flat Rate';
    $method->add_rate( $new_rate );
  }
}

// Required company name in checkout
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {

  $fields['billing']['billing_company']['required'] = true;
  $fields['shipping']['shipping_company']['required'] = true;
$fields['address']['billing_address_1']['required'] = true;
  return $fields;   

}
/*add_filter( 'woocommerce_register_form' , 'custom_woocommerce_register_form_star' );
function custom_woocommerce_register_form_star($fields){
    
  $fields['company']['billing_company']['required'] = true;
  $fields['address']['billing_address_1']['required'] = true;
  return $fields;  
}*/
// Display Price For Variable Product With Same Variations Prices
add_filter('woocommerce_available_variation', function ($value, $object = null, $variation = null) {
  if ($value['price_html'] == '') {
    $value['price_html'] =  $variation->get_price_html();
  }
  return $value;
}, 10, 3); 

/**
 * Create new fields for variations
 *
*/

function variation_settings_fields( $loop, $variation_data, $variation ) {

	woocommerce_wp_text_input( 
		array( 
			'id'          => '_stock_delivery[' . $variation->ID . ']', 
			'label'       => __( 'Lieferung in den Laden', 'woocommerce' ), 
			'placeholder' => '',
			'value'       => get_post_meta( $variation->ID, '_stock_delivery', true )
		)
	);
}
add_action( 'woocommerce_product_after_variable_attributes', 'variation_settings_fields', 10, 3 );


/**
 * Save new fields for variations
 *
*/
function save_variation_settings_fields( $post_id ) {

	$text_field = $_POST['_stock_delivery'][ $post_id ];
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_stock_delivery', esc_attr( $text_field ) );
	}
}
add_action( 'woocommerce_save_product_variation', 'save_variation_settings_fields', 10, 2 );

/**
 * Add custom fields for variations
 *
*/
function load_variation_settings_fields( $variations ) {
		
		$stock = (int) preg_replace(  "/\D/", '' , strip_tags($variations['availability_html']) );

		if($stock == 0) {
			$variations['stock_delivery'] = get_post_meta( $variations[ 'variation_id' ], '_stock_delivery', true );
		}
		
	return $variations;
}
add_filter( 'woocommerce_available_variation', 'load_variation_settings_fields' );

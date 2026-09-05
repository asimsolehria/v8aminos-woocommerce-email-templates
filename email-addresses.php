<?php

/**
 * Email Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-addresses.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 5.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

$text_align = is_rtl() ? 'right' : 'left';
$address    = $order->get_formatted_billing_address();
$shipping   = $order->get_formatted_shipping_address();

?>



<table style="padding-top: 30px" class="columnContainer" role="presentation" width="640" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td class="columnSingleLeft" align="center">
                          <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tr>
                              <td style=" text-align: center;" align="center">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" align="center">
                                  <tr>
                                    <td align="center" class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: none; mso-line-height-rule: exactly; text-align: center; color: #ffffff;">

                                       
                                    <span class="view-ord-btn" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-weight: bold; text-transform: uppercase;">Delivery Coordinates
                                    </span>

                                    </td>

                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    
                  </table>



<table style="padding-top: 10px;" class="columnContainer" role="presentation" width="640" cellspacing="0" cellpadding="0" border="0">
                        
                        <tr>
                          <td class="columnSingleLeft" align="center">
                            <table role="presentation" width="320" cellspacing="0" cellpadding="0" border="0">
                              <tr>
                                <td style="padding: 0px 20px 30px; text-align: left;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" align="center">
                                    <tr>
                                      <td class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: none; mso-line-height-rule: exactly; text-align: left; color: #ffffff;"><span class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-weight: bold; text-transform: uppercase;">Billing address:</span><br>
									  <?php echo wp_kses_post($address ? $address : esc_html__('N/A', 'woocommerce')); ?>
																				<?php if ($order->get_billing_phone()) : ?>
																					<br /><?php echo wc_make_phone_clickable($order->get_billing_phone()); ?>
																				<?php endif; ?>
																				<?php if ($order->get_billing_email()) : ?>
																					<br /><?php echo esc_html($order->get_billing_email()); ?>
																				<?php endif; ?>
                                    </tr>
                            t    </table>
                                </td>
                              </tr>
                            </table>
                          </td>
						  <?php if (!wc_ship_to_billing_address_only() && $order->needs_shipping_address() && $shipping) : ?>
                          <td class="columnSingleLeft" align="center">
                            <table role="presentation" width="320" cellspacing="0" cellpadding="0" border="0">
                              <tr>
                                <td style="padding: 0px 20px 30px; text-align: left;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" align="center">
                                    <tr>
                                      <td class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: none; mso-line-height-rule: exactly; text-align: left; color: #ffffff;"><span class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-weight: bold; text-transform: uppercase;">Shipping address:</span><br>
									  <?php echo wp_kses_post($shipping); ?>
																					<?php if ($order->get_shipping_phone()) : ?>
																						<br /><?php echo wc_make_phone_clickable($order->get_shipping_phone()); ?>
																					<?php endif; ?>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
						  <?php endif; ?>
                        </tr>
                      </table>

































                      <?php
add_action( 'wp_enqueue_scripts', 'kalleschild_enqueue_child_theme_styles', PHP_INT_MAX);

function kalleschild_enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/style.css', array('parent-style') );
}


function my_theme_woocommerce_taxonomy_archive_description() {
    $description = wc_format_content( term_description() );
    if ( $description ) {
        echo '' . $description . '';
    }
}
add_action( 'woocommerce_archive_description', 'my_theme_woocommerce_taxonomy_archive_description');




/**
 * Exclude products from a particular category on the shop page
 */
function custom_pre_get_posts_query( $q ) {

    $tax_query = (array) $q->get( 'tax_query' );

    $tax_query[] = array(
           'taxonomy' => 'product_cat',
           'field' => 'slug',
           'terms' => array( 'uncategorized','warranty' ), // Don't display products in the clothing category on the shop page.
           'operator' => 'NOT IN'
    );


    $q->set( 'tax_query', $tax_query );

}
add_action( 'woocommerce_product_query', 'custom_pre_get_posts_query' );


add_filter("gform_field_value_uuid", "uuid");
function uuid($prefix = '') {
    $chars = md5(uniqid(mt_rand(), true));
    $uuid  = substr($chars,0,10);
    return $prefix . $uuid;
}



//4 of july coupon
// Hook before calculate fees - "Buy 3 get cheapest free" coupon
//add_action('woocommerce_cart_calculate_fees' , 'one_pluse_one_coupon');
//
//
///**
// * Add discount for "1+1 coupon
// * @param WC_Cart $cart
// */
//
//function one_pluse_one_coupon( WC_Cart $cart ){
//
//    // add the coupons here
//    $one_pluse_one_coupon = array('women');
//
////    // return if cart has less than 4 items
////    if( $cart->cart_contents_count < 2 ){ return; }
//    $applied_coupons = $cart->get_applied_coupons();
//    $matches = array_intersect($one_pluse_one_coupon, $applied_coupons);
//
//    // return if no coupon matches
//    if (empty($matches)) return;
//
//    // loop through the items in cart to find the cheapest
//    $totalDiscount = 0;
//    foreach ( $cart->get_cart() as $cart_item_key => $values ) {
//        if($values['product_id'] == 31342 || $values['product_id'] == 3968) {
//            $values['data']->set_price(0);
//            continue;
//        }
//        for($i = 0;$i < $values['quantity'];$i++){
//            $values['data']->quantity = $values['quantity'];
//            $values['data']->discounted = 0;
//            $products[] = $values['data'];
//
//        }
//
//    }
//
//    usort($products, function($a, $b) {
//        $a_int = (integer) $a->get_price_including_tax();
//        $b_int = (integer) $b->get_price_including_tax();
//        if ($a_int === $b_int) return 0;
//        return ($a_int > $b_int) ? 1 : -1;
//    });
//
//    $middle = floor(count($products) / 2);
//    $discountText = '1 + 1 on cheap product &#013;';
//    for($i = 0;$i < $middle;$i++){
//        $totalDiscount += $products[$i]->get_price_including_tax();
//        $discountText .=  $products[$i]->get_title(). ' -'.$products[$i]->get_price_including_tax(). '$ ';
//        if($products[$i]->quantity > 1){
//            $dupCount = 0;
//            for($j = 0;$j < $middle;$j++){
//                if($products[$i]->get_id() == $products[$j]->get_id()){
//                    $dupCount++;
//                }
//
//            }
//            if($j >= $middle){
//                $products[$j]->set_price(
//                    ($products[$i]->get_price_including_tax() * $products[$i]->quantity)
//                    -($products[$i]->get_price_including_tax()  * $dupCount)
//                );
//            }
//
//
//        }else{
//            $products[$i]->set_price(0);
//        }
//
//    }
//
//    $totalDiscount += 90;
//    $cart->add_fee( $discountText, -$totalDiscount);
//
//}

/**
 * Add discount for "shampo and conditioner
 * @param integer $coupon_code
 */
function add_gift_indy(  $coupon_code ){
    global $woocommerce;
    if($coupon_code === 'indy18'){
        $woocommerce->cart->add_to_cart( 3967 );
        $woocommerce->cart->add_to_cart( 3968 );
    }

    foreach ( $woocommerce->cart as $cart_item_key => $values ) {
        if($values['product_id'] === 3967){
            $values['data']->set_price(0);
        }


    }
}
add_action('woocommerce_applied_coupon' , 'add_gift_indy');


//// Hook before calculate fees
//add_action('woocommerce_cart_calculate_fees' , 'add_custom_fees');
//
///**
// * Add custom fee if more than three article
// * @param WC_Cart $cart
// */
//function add_custom_fees( WC_Cart $cart ){
//    // Calculate the amount to reduce
//    $discount = $cart->subtotal * 0.25;
//    $applied_coupons = WC()->cart->applied_coupons;
//    if(!in_array('noalita',$applied_coupons) && !in_array('rafa40',$applied_coupons) && !in_array('40thanks',$applied_coupons)){
//        $cart->add_fee( 'Site wide 25% discount', -$discount);
//    }
//
//}

function child_remove_parent_function() {
    remove_action( 'init', 'the4_kalles_social_meta' );
}
add_action( 'wp_loaded', 'child_remove_parent_function' );



add_action( 'gform_after_submission', 'post_to_third_party', 10, 2 );
function post_to_third_party( $entry, $form ) {
    global $woocommerce;

    if($entry['form_id']  === "2"){
        // use this to find out $entry output
        if( !isset($entry['payment_amount'])  || (int)$entry['payment_amount'] <= 0){
            return;
        }

        // Make sure to add hidden field somewhere in the form with product id and define it here, If you have some other way of defining products in the form you need to make sure product id is returned in the variable below somehow
        $product_id = explode('|',rgar( $entry, '9' ))[0];



        $address = array(
            'first_name' => rgar( $entry, '1.3' ),
            'last_name'  => rgar( $entry, '1.6' ),
            'email'      => rgar( $entry, '2' ),
            'phone'      => '',
            'address_1'  => rgar( $entry, '10.1' ),
            'address_2'  => '',
            'city'       => rgar( $entry, '10.3' ),
            'state'      => rgar( $entry, '10.4' ),
            'postcode'   => rgar( $entry, '10.5' ),
            'country'    => rgar( $entry, '10.6' ),
        );

        $prices = array( 'totals' => array(
            'subtotal' => $entry['payment_amount'],
            'total' => $entry['payment_amount'],
        ) );


        $userid = get_current_user_id();
        $msg = '';
        if($userid){
            $order = wc_create_order(array('customer_id'=>$userid));
            $msg = 'User was logged in';
        }else{
            $user = get_user_by( 'email', rgar( $entry, '2' ) );
            if($user){
                $order = wc_create_order(array('customer_id'=>$user->ID));
                $msg = 'Attach to exist user';
            }else{
                $order = wc_create_order();
                $msg = 'no user found ' .  rgar( $entry, '2' );
            }

        }



        $order->add_product( wc_get_product($product_id), 1, $prices);
        $order->set_address( $address, 'billing' );
        $order->set_address( $address, 'shipping' );
        $order->calculate_totals();
        $order->update_status("processing", ' *** this order made from Warranty Exchange form *** ' . $msg, TRUE);
        $order->update_meta_data('reference', 'Warranty exchange'); // Add the custom field
        $order->save(); // Save the data
    }

}

function exclude_category_from_search($query) {
    if ( $query->is_main_query() && $query->is_search() ) {
        // Replace 'your-category-slug' with the slug of the category you want to exclude
        $tax_query = (array) $query->get('tax_query');

        $tax_query[] = array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => array( 'warranty' ), // Replace with your category slug
            'operator' => 'NOT IN',
        );

        $query->set('tax_query', $tax_query);
    }
}
add_action('pre_get_posts', 'exclude_category_from_search');


// In your PHP file, enqueue a script and localize it with the nonce
function enqueue_ajax_search_script() {
    // Enqueue the script from the child theme
    wp_enqueue_script('ajax-search-script', get_stylesheet_directory_uri() . '/js/ajax-search.js', array('jquery'), null, true);

    // Pass the nonce to the script
    wp_localize_script('ajax-search-script', 'ajax_search_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'security' => wp_create_nonce('the4_search_product_nonce'), // Generate the nonce
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_ajax_search_script');

function custom_the4_search_product() {

    check_ajax_referer('the4-kalles-ajax-sec', 'security_code');
    global $wpdb, $woocommerce;

    if (isset($_POST['keyword']) && !empty($_POST['keyword'])) {

        $keyword = $_POST['keyword'];

        $category_id = (isset($_POST['category']) && !empty($_POST['category'])) ? $_POST['category'] : '';
        $args = array(
            's'             => urldecode($keyword),
            'post_type'     => 'product',
            'post_per_page' => -1,
            'post_status'   => 'publish',
            'tax_query'     => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'slug',
                    'terms'    => array('warranty'),
                    'operator' => 'NOT IN',
                ),
            )
        );

        $query_results = new WP_Query($args);

        $result_count = $query_results->found_posts;

        if (!empty($query_results->posts)) {
            $check_full_width = false;
            if ( cs_get_option( 'header-layout' ) == 5 || cs_get_option( 'search-fullscreen' )) {
                $check_full_width = true;
            }

            $output = '';
            if ($check_full_width == true) {
                $output .= '<div class="js_prs_search hihi row fl_center">';
            }
            $count_post = 0;
            foreach ($query_results->posts as $result) {
                if ($count_post < 10) {
                    $product = wc_get_product( $result->ID );

                    $price = $product->get_price();
                    $price_sale = $product->get_sale_price();
                    $price_regular = ($price == $price_sale) ? $product->get_regular_price() : $price;

                    $currency   = get_woocommerce_currency_symbol();


                    if ($check_full_width == true) {
                        $output .= '<div class="col-auto tc">';
                        $output .= '<div class="row mb__10 pb__10 ">';
                        $output .='<div class="col-12">';
                        $output .='<div class="img_fix_search">';
                        $output .= '<a class="db pr oh" href="'.get_post_permalink($result->ID).'">';
                        $output .= '<img class="w__100" src="'.esc_url(get_the_post_thumbnail_url($result->ID,'shop_catalog')).'"></a>';
                        $output .= '</div>'; // .img_fix_search
                        $output .= '</div>'; // .col-12
                        $output .= '<div class="col-12 mt_10">';
                        $output .= '<a class="product-title db pr oh" href="'.get_post_permalink($result->ID).'">'.$result->post_title.'</a>';
                        if (!empty($price)) {
                            $output .= '<p class="price">';
                            if (!empty($price_sale)) {
                                $output .= '<del>';
                            }
                            //$output .= '<span class="woocommerce-Price-currencySymbol">' .$currency .'</span>';
                            $output .= '<span class="woocommerce-Price-amount amount"><bdi>'.wc_price(wc_get_price_to_display($product, array('price' => $price_regular))).'</bdi></span>';
                            if (!empty($price_sale)) {
                                $output .= '</del>';
                            }
                            if (!empty($price_sale)) {
                                //$output .= '<span class="woocommerce-Price-currencySymbol">' .$currency .'</span>';
                                $output .= '<ins><span class="woocommerce-Price-amount amount"><bdi>'.wc_price(wc_get_price_to_display($product, array('price' => $price_sale))).'</bdi></span></ins>';
                            }

                            $output .= '</p>';
                        }


                        $output .= '</div>';
                        $output .= '</div>';
                        $output .= '</div>';
                    } else {
                        $output .= '<div class="row mb__10 pb__10 ">';
                        $output .='<div class="col widget_img_pr">';
                        $output .= '<a class="db pr oh" href="'.get_post_permalink($result->ID).'">';
                        $output .= '<img class="w__100" src="'.esc_url(get_the_post_thumbnail_url($result->ID,'shop_catalog')).'"></a>';
                        $output .= '</div>';
                        $output .= '<div class="col widget_if_pr">';
                        $output .= '<a class="product-title db pr oh" href="'.get_post_permalink($result->ID).'">'.$result->post_title.'</a>';
                        if (!empty($price)) {
                            $output .= '<p class="price">';
                            if (!empty($price_sale)) {
                                $output .= '<del>';
                            }
                            //$output .= '<span class="woocommerce-Price-currencySymbol">' .$currency .'</span>';
                            $output .= '<span class="woocommerce-Price-amount amount"><bdi>'.wc_price(wc_get_price_to_display($product, array('price' => $price_regular))).'</bdi></span>';
                            if (!empty($price_sale)) {
                                $output .= '</del>';
                            }
                            if (!empty($price_sale)) {
                                //$output .= '<span class="woocommerce-Price-currencySymbol">' .$currency .'</span>';
                                $output .= '<ins><span class="woocommerce-Price-amount amount"><bdi>'.wc_price(wc_get_price_to_display($product, array('price' => $price_sale))).'</bdi></span></ins>';
                            }

                            $output .= '</p>';
                        }


                        $output .= '</div>';
                        $output .= '</div>';

                        $count_post++;
                    } // Endif

                } //End foreach

            }
            if ($result_count > 10) {
                $category_string = '';
                if ($category_id) {
                    $category_string = '&product_cat='. $category_id;
                }
                $search_string = $keyword . '&post_type=product' . $category_string;
                $output .= '
                        <a href="'. get_site_url() . '/?s=' . $search_string .'" class="db fwsb detail_link">'. translate( 'View All', 'kalles' ) .'('. $result_count.') <i class="t4_icon_arrow-right-solid fs__18"></i></a>
                    ';
            }
            if ($check_full_width == true) {
                $output .= '</div>'; //.js_prs_search row fl_center
            } else {
                if ($result_count > 10) {
                    $category_string = '';
                    if ($category_id) {
                        $category_string = '&product_cat='. $category_id;
                    }
                    $search_string = $keyword . '&post_type=product' . $category_string;
                    $output .= '
                        <a href="'. get_site_url() . '/?s=' . $search_string .'" class="db fwsb detail_link">'. translate( 'View All', 'kalles' ) .'('. $result_count.') <i class="t4_icon_arrow-right-solid fs__18"></i></a>
                    ';
                }
            }

            if ( ! empty( $output ) ) {
                echo wp_kses_post( $output );
            }
        } else {
            die(esc_html__( 'No products were found matching your selection.', 'kalles' ));
        }
    }

    die();
}

add_action('wp_ajax_the4_search_product', 'custom_the4_search_product');
add_action('wp_ajax_nopriv_the4_search_product', 'custom_the4_search_product');


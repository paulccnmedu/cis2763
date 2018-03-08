<?php
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
//title
//excerpt
//price
//////////////////////////////
add_action( 'cis_single_title_woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'cis_single_rating_woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'cis_single_price_woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'cis_single_excerpt_woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'cis_single_meta_woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'cis_single_sharing_woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
add_action( 'cis_single_add_to_cart_woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
//https://www.skyverge.com/blog/change-woocommerce-price-display/
//add text with prices
function sv_change_product_price_display( $price ) {
	$price .= ' per package';
	return $price;
}
//add_filter( 'woocommerce_get_price_html', 'sv_change_product_price_display' );
//add_filter( 'woocommerce_cart_item_price', 'sv_change_product_price_display' );
//
//
// add shipping phone to  the checkout page
//add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     $fields['shipping']['shipping_phone'] = array(
        'label'     => __('Phone', 'woocommerce'),
    'placeholder'   => _x('Phone', 'placeholder', 'woocommerce'),
    'required'  => false,
    'class'     => array('form-row-wide'),
    'clear'     => true
     );

     return $fields;
}

/**
 * Display field value on the order edit page
 */
 
add_action( 'woocommerce_admin_order_data_after_shipping_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('Phone From Checkout Form').':</strong> ' . get_post_meta( $order->get_id(), '_shipping_phone', true ) . '</p>';
}
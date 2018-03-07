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


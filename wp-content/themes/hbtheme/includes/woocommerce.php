<?php

if ( ! defined( 'ABSPATH' ) ) die(); // prevent direct access

// Declare theme support for WooCommerce
function add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'add_woocommerce_support' );

// Add theme support for lightbox, zoom and slider
function add_wc_gallery_lightbox() { 
  	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'add_wc_gallery_lightbox', 100 );

// Remove default Woocommerce tabs
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

// Remove Select2/SelectWoo from Woocommerce
function woo_dequeue_select2() {
    if ( class_exists( 'woocommerce' ) ) {
        wp_dequeue_style( 'select2' );
        wp_deregister_style( 'select2' );

        wp_dequeue_script( 'selectWoo');
        wp_deregister_script('selectWoo');
    } 
}
add_action( 'wp_enqueue_scripts', 'woo_dequeue_select2', 100 );

// Change Proceed to Checkout text
function woocommerce_button_proceed_to_checkout() { ?>
    <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button alt wc-forward">
        <?php esc_html_e( 'Continue to Checkout', 'woocommerce' ); ?>
    </a>
<?php
}

// Reorder the billing fields in the checkout form
add_filter( 'woocommerce_billing_fields', 'reorder_checkout_billing_fields' );
 
function reorder_checkout_billing_fields( $address_fields ) {
    $address_fields['billing_email']['priority'] = 10;
    $address_fields['billing_first_name']['priority'] = 20;
    $address_fields['billing_last_name']['priority'] = 30;
    $address_fields['billing_address_1']['priority'] = 40;
    $address_fields['billing_address_2']['priority'] = 50;
    $address_fields['billing_city']['priority'] = 60;
    $address_fields['billing_state']['priority'] = 70;
    $address_fields['billing_postcode']['priority'] = 80;
    $address_fields['billing_country']['priority'] = 90;
    $address_fields['billing_phone']['priority'] = 100;
    $address_fields['billing_company']['priority'] = 110;

    return $address_fields;
}

// Reorder the shipping fields in the checkout form
add_filter( 'woocommerce_shipping_fields', 'reorder_checkout_shipping_fields' );
 
function reorder_checkout_shipping_fields( $address_fields ) {
    $address_fields['shipping_first_name']['priority'] = 10;
    $address_fields['shipping_last_name']['priority'] = 20;
    $address_fields['shipping_address_1']['priority'] = 30;
    $address_fields['shipping_address_2']['priority'] = 40;
    $address_fields['shipping_city']['priority'] = 50;
    $address_fields['shipping_state']['priority'] = 60;
    $address_fields['shipping_postcode']['priority'] = 70;
    $address_fields['shipping_country']['priority'] = 80;
    $address_fields['shipping_company']['priority'] = 90;

    return $address_fields;
}

?>
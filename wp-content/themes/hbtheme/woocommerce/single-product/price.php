<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
$product = wc_get_product( get_the_ID() );
$currency_symbol = get_woocommerce_currency_symbol();

if ( $product->is_type( 'variable' ) ) {
    $min_regular_price = $product->get_variation_regular_price( 'min' );
    $max_regular_price = $product->get_variation_regular_price( 'max' );
    $min_sale_price = $product->get_variation_sale_price( 'min' );
    $max_sale_price = $product->get_variation_sale_price( 'max' );

    if (strpos($min_regular_price, '.') === false) {
        $min_regular_price = $min_regular_price . ".00";
    }

    if (strpos($max_regular_price, '.') === false) {
        $max_regular_price = $max_regular_price . ".00";
    }

    if ($min_sale_price && $min_sale_price !== $min_regular_price) {
        if (strpos($min_sale_price, '.') === false) {
            $min_sale_price = $min_sale_price . ".00";
        }
    }
    
    if ($max_sale_price && $max_sale_price !== $max_regular_price) {
        if (strpos($max_sale_price, '.') === false) {
            $max_sale_price = $max_sale_price . ".00";
        }
    }
} else {
    $regular_price = $product->get_regular_price();
    $sale_price = $product->get_sale_price();

    if (strpos($regular_price, '.') === false) {
        $regular_price = $regular_price . ".00";
    }
    
    if ($sale_price) {
        if (strpos($sale_price, '.') === false) {
            $sale_price = $sale_price . ".00";
        }
    }
}
?>

<div class="price_outer">
	<?php if ( $product->is_type( 'variable' ) ) { ?>

		<?php if ($min_sale_price !== $min_regular_price && $max_sale_price !== $max_regular_price) { ?>

			<?php if ($min_regular_price == $max_regular_price) { ?>
				<span class="price regular_price on_sale"><?php echo $currency_symbol . $min_regular_price; ?></span>
			<?php } else { ?>
				<span class="price regular_price on_sale"><?php echo $currency_symbol . $min_regular_price; ?> - <?php echo $currency_symbol . $max_regular_price; ?></span>
			<?php } ?>
			
			<?php if ($min_sale_price == $max_sale_price) { ?>
				<span class="price sale_price"><?php echo $currency_symbol . $min_sale_price; ?></span>
			<?php } else { ?>
				<span class="price sale_price"><?php echo $currency_symbol . $min_sale_price; ?> - <?php echo $currency_symbol . $max_sale_price; ?></span>
			<?php } ?>

		<?php } else { ?>
			<?php if ($min_regular_price == $max_regular_price) { ?>
				<span class="price regular_price"><?php echo $currency_symbol . $min_regular_price; ?></span>
			<?php } else { ?>
				<span class="price regular_price"><?php echo $currency_symbol . $min_regular_price; ?> - <?php echo $currency_symbol . $max_regular_price; ?></span>
			<?php } ?>
		<?php } ?>

	<?php } else { ?>

		<?php if ($sale_price) { ?>
			<span class="price regular_price on_sale"><?php echo $currency_symbol . $regular_price; ?></span>
			<span class="price sale_price"><?php echo $currency_symbol . $sale_price; ?></span>
		<?php } else { ?>
			<span class="price regular_price"><?php echo $currency_symbol . $regular_price; ?></span>
		<?php } ?>

	<?php } ?>
</div>
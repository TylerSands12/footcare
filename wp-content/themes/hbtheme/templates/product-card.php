<?php
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

<div class="product_card">

    <a href="<?php echo get_permalink(); ?>" class="image_outer">
        <?php echo optimised_image(get_post_thumbnail_id(), 'medium'); ?>
    </a>

    <h4 style="display: none !important;"><?php the_title(); ?></h4>

    <div class="price_outer" style="display: none !important;">
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

    <a href="<?php echo get_permalink(); ?>" class="button button-one" style="display: none !important;">Buy Now</a>
    
</div>
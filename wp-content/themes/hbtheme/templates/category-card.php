<div class="category_card">

    <?php
    $wc_thumbnail_id = get_woocommerce_term_meta( $category['category']->term_id, 'thumbnail_id', true );
    ?>

    <a href="<?php echo get_term_link($category['category']); ?>" class="image_outer">
        <?php echo optimised_image($wc_thumbnail_id, 'medium'); ?>
    </a>

    <h4><?php echo $category['category']->name; ?></h4>

    <?php if (get_the_excerpt()) { ?>
        <p class="excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
    <?php } ?>
    
</div>
<div class="category_card">

    <?php if ($category['image_override']) { ?>
        <a href="<?php echo get_term_link($category['category']); ?>" class="image_outer">
            <?php echo optimised_image($category['image_override'], 'medium'); ?>
        </a>
    <?php } else {
        $wc_thumbnail_id = get_woocommerce_term_meta( $category['category']->term_id, 'thumbnail_id', true );
        ?>
        <a href="<?php echo get_term_link($category['category']); ?>" class="image_outer">
            <?php echo optimised_image($wc_thumbnail_id, 'medium'); ?>
        </a>
    <?php } ?>

    <h4><?php echo $category['category']->name; ?></h4>

    <?php if (get_the_excerpt()) { ?>
        <p class="excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
    <?php } ?>

    <!-- <a href="<?//php echo get_term_link($category['category']); ?>" class="button button-one">Shop <?//php echo $category['category']->name; ?></a> -->
    
</div>
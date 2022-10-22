<div class="blog_card">

    <a href="<?php echo get_permalink(); ?>" class="image_outer">
        <?php echo optimised_image(get_post_thumbnail_id(), 'medium'); ?>
        
        <div class="image_overlay">
            <h4><?php the_title(); ?></h4>
            <p class="text"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
            <div class="button button-one">Read More</div>
        </div>
    </a>

</div>
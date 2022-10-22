<section class="usp_banner">
    <div class="container">
        <div class="section_inner">
            <?php
            $usp_banner = get_field('usp_banner', 'options');
            foreach ($usp_banner as $usp) { ?>

            <div class="usp">
                <?php echo optimised_image($usp['icon'], 'medium'); ?>
                <span><?php echo $usp['text']; ?></span>
            </div>
            
            <?php } ?>
        </div>
    </div>
</section>
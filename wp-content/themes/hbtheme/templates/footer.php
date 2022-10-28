<?//php get_template_part('templates/newsletter-section'); ?>

<footer id="footer" class="footer" role="contentinfo">
    <div class="container">
        <div class="footer_inner">
            <div class="footer_left">
                <div class="footer_col footer_menu_col">
                    <h3>Help</h3>
                    <ul>
                        <?php
                        $footer_menu_one = get_field('footer_menu_one', 'options');
                        foreach ($footer_menu_one as $menu_item) { ?>
                            <li>
                                <a href="<?php echo $menu_item['link']; ?>"><?php echo $menu_item['label']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="footer_col footer_menu_col">
                    <h3>Shop</h3>
                    <ul>
                        <?php
                        $footer_menu_two = get_field('footer_menu_two', 'options');
                        foreach ($footer_menu_two as $menu_item) { ?>
                            <li>
                                <a href="<?php echo get_term_link($menu_item['link']->term_id); ?>"><?php echo $menu_item['label']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="footer_col footer_menu_col">
                    <h3>Footcare</h3>
                    <ul>
                        <?php
                        $footer_menu_three = get_field('footer_menu_three', 'options');
                        foreach ($footer_menu_three as $menu_item) { ?>
                            <li>
                                <a href="<?php echo $menu_item['link']; ?>"><?php echo $menu_item['label']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                
                <div class="footer_col footer_socials_col">
                    <h3>Social</h3>
                    <?php get_template_part('templates/social-media-icons'); ?>
                </div>
            </div>

            <div class="footer_right">
                <div class="footer_icons">
                    <?php
                    $footer_icons = get_field('footer_icons', 'options');

                    foreach ($footer_icons as $icon) {
                        echo optimised_image($icon['icon'], 'medium');
                    }
                    ?>
                </div>

                <div class="footer_disclaimer">
                    <?php the_field('footer_disclaimer', 'options'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_copyright">
        <div class="container">
            <p class="copyright_inner">© FootcareUK.com <?php echo date('Y'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<?= get_field('footer', 'options'); ?>
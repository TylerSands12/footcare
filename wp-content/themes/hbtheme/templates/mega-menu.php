<?php
$mega_menu = get_field('level_one', 'options')
?>

<nav id="main_menu" class="mega_menu">
    <ul class="main_menu_ul">
        <h3>Search by:</h3>

        <?php
        foreach ($mega_menu as $key => $level_one_item) { ?>
            <li>
                <span><?php echo $level_one_item['label']; ?></span>

                <?php if ($level_one_item['level_two']) { ?>
                    
                    <ul>
                        <?php foreach ($level_one_item['level_two'] as $key => $level_two_item) { ?>
                            <li>
                                <?php if ($level_two_item['label']) { ?>
                                    <span><?php echo $level_two_item['label']; ?></span>
                                <?php } ?>
                
                                <?php if ($level_two_item['columns']) { ?>

                                    <div class="mega_menu_popout">

                                        <?php foreach ($level_two_item['columns'] as $key => $column) { ?>

                                            <div class="column">
                                                <?php if ($column['type_of_column'] == "links") { ?>
                                                    <?php if ($column['links']) { ?>

                                                        <?php if ($level_two_item['product_category']) { ?>
                                                            <a class="links_header" href="<?php echo get_term_link($level_two_item['product_category']); ?>">
                                                                <span><?php echo $level_two_item['label']; ?></span>
                                                            </a>
                                                        <?php } else { ?>
                                                            <a class="links_header" href="#">
                                                                <span><?php echo $level_two_item['label']; ?></span>
                                                            </a>
                                                        <?php } ?>

                                                        <ul class="links">
                                                            <?php if ($column['links']) {
                                                                foreach ($column['links'] as $key => $link) { ?>
                                                                    <?php if ($link['product_category']) { ?>
                                                                        <li class="link">
                                                                            <a href="<?php echo get_term_link($link['product_category']); ?>">
                                                                                <span><?php echo $link['label']; ?></span>
                                                                            </a>
                                                                        </li>
                                                                    <?php } else { ?>
                                                                        <li class="link">
                                                                            <a href="#">
                                                                                <span><?php echo $link['label']; ?></span>
                                                                            </a>
                                                                        </li>
                                                                    <?php } ?>
                                                                <?php }
                                                            } ?>
                                                        </ul>

                                                        <?php if ($level_two_item['product_category']) { ?>
                                                            <a class="links_view_all" href="<?php echo get_term_link($level_two_item['product_category']); ?>">
                                                                <span>View All</span>
                                                            </a>
                                                        <?php } else { ?>
                                                            <a class="links_view_all" href="#">
                                                                <span>View All</span>
                                                            </a>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>

                                                <?php if ($column['type_of_column'] == "image") { ?>
                                                    <?php echo optimised_image($column['image'], 'medium'); ?>
                                                <?php } ?>
                                            </div>

                                        <?php } ?>

                                    </div>

                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>

                <?php } ?>
            </li>
        <?php } ?>
        <?php if (!is_user_logged_in()) { ?>
        <li>
            <a href="/my-account" class="mobile_nav_btn mobile_login_btn">Sign In</a>
        </li>
        <?php } ?>
        <?php if (is_user_logged_in()) { ?>
        <li>
            <a href="/my-account" class="mobile_nav_btn mobile_account_btn">My Account</a>
        </li>
        <li>
            <a href="<?php echo wp_logout_url(); ?>" class="mobile_nav_btn mobile_logout_btn">Sign Out</a>
        </li>
        <?php } ?>
    </ul>

    <ul class="mobile_sub_menu">
        <h3>Help</h3>
        <?php
        $footer_menu_one = get_field('footer_menu_one', 'options');
        foreach ($footer_menu_one as $menu_item) { ?>
            <li>
                <a href="<?php echo $menu_item['link']; ?>"><?php echo $menu_item['label']; ?></a>
            </li>
        <?php } ?>
    </ul>

    <ul class="mobile_sub_menu">
        <h3>Footcare</h3>
        <?php
        $footer_menu_three = get_field('footer_menu_three', 'options');
        foreach ($footer_menu_three as $menu_item) { ?>
            <li>
                <a href="<?php echo $menu_item['link']; ?>"><?php echo $menu_item['label']; ?></a>
            </li>
        <?php } ?>
    </ul>
</nav>
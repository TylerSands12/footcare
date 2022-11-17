<?php
$mega_menu = get_field('level_one', 'options')
?>

<nav id="main_menu" class="mega_menu">
    <ul class="main_menu_ul">

        <?php
        foreach ($mega_menu as $key => $level_one_item) { ?>
            <?php if ($level_one_item['mobile_label'] == "On Sale") { ?>
            <div class="mobile_nav_separator_outer">
                <hr class="mobile_nav_separator"></hr>
            </div>
            <?php } ?>
            <li class="<?php echo str_replace(' ', '_', strtolower($level_one_item['label'])); ?> <?php if ($level_one_item['mobile_label'] !== "On Sale") { ?>shop_by_button<?php } ?>">
                <span><span class="mobile_icon"><?php echo $level_one_item['icon']; ?></span><span class="mobile_shop_by"><?php echo $level_one_item['mobile_label']; ?></span><span class="desktop_shop_by"><?php echo $level_one_item['label']; ?></span></span>

                <?php if ($level_one_item['level_two']) { ?>
                    
                    <ul>
                        <li class="back_to_main_menu">
                            <span>
                                <span class="mobile_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                                </span>
                                <span class="mobile_shop_by">Back to Main Menu</span>
                            </span>
                        </li>

                        <li class="link links_header_mobile">
                            <span><?php echo $level_one_item['label']; ?></span>
                        </li>

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
                                                        <li class="link back_to_first_level">
                                                            <span>
                                                                <span class="mobile_icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                                                                </span>
                                                                <span class="mobile_shop_by">Back to <?php echo $level_one_item['label']; ?></span>
                                                            </span>
                                                        </li>

                                                        <li class="link links_header_mobile">
                                                            <span><?php echo $level_two_item['label']; ?></span>
                                                        </li>

                                                        <?php
                                                        // Get all subcategories of the parent
                                                        $args_query = array(
                                                            'taxonomy' => 'product_cat', 
                                                            'hide_empty' => false, 
                                                            'child_of' => $level_two_item['product_category']->term_id
                                                        );

                                                        foreach (get_terms($args_query) as $term) { ?>
                                                            <li class="link">
                                                                <a href="<?php echo get_term_link($term->term_id); ?>">
                                                                    <span><?php echo $term->name; ?></span>
                                                                </a>
                                                            </li>
                                                        <?php } ?>
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

        <li class="offers_promotions mobile_only">
            <a href="#"><span class="mobile_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M480 32c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9L381.7 53c-48 48-113.1 75-181 75H192 160 64c-35.3 0-64 28.7-64 64v96c0 35.3 28.7 64 64 64l0 128c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V352l8.7 0c67.9 0 133 27 181 75l43.6 43.6c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V300.4c18.6-8.8 32-32.5 32-60.4s-13.4-51.6-32-60.4V32zm-64 76.7V240 371.3C357.2 317.8 280.5 288 200.7 288H192V192h8.7c79.8 0 156.5-29.8 215.3-83.3z"/></svg></span><span class="mobile_shop_by">Offers & Promotions</span></a>
        </li>

        <div class="mobile_nav_separator_outer">
            <hr class="mobile_nav_separator"></hr>
        </div>

        <?php if (!is_user_logged_in()) { ?>
        <li class="mobile_only mobile_login_btn">
            <a href="/my-account"><span class="mobile_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></span>Sign In</a>
        </li>
        <?php } ?>

        <?php if (is_user_logged_in()) { ?>
        <li class="mobile_only">
            <a href="/my-account"><span class="mobile_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></span>My Account</a>
        </li>

        <li class="mobile_only">
            <a href="#"><span class="mobile_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2l0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5V176c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336V300.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4V304v5.7V336zm32 0V304 278.1c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5V272c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5V432c0 44.2-86 80-192 80S0 476.2 0 432V396.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"/></svg></span>Loyalty Points</a>
        </li>

        <li class="mobile_only">
            <a href="#"><span class="mobile_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M50.7 58.5L0 160H208V32H93.7C75.5 32 58.9 42.3 50.7 58.5zM240 160H448L397.3 58.5C389.1 42.3 372.5 32 354.3 32H240V160zm208 32H0V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192z"/></svg></span>My Orders</a>
        </li>

        <li class="mobile_only">
            <a href="<?php echo wp_logout_url(); ?>"><span class="mobile_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 96h64c17.7 0 32 14.3 32 32V384c0 17.7-14.3 32-32 32H352c-17.7 0-32 14.3-32 32s14.3 32 32 32h64c53 0 96-43 96-96V128c0-53-43-96-96-96H352c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-7.5 177.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H160v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg></span>Sign Out</a>
        </li>
        <?php } ?>

        <div class="mobile_nav_separator_outer">
            <hr class="mobile_nav_separator"></hr>
        </div>

        <li class="mobile_only">
            <a href="#" class="mobile_nav_btn mobile_logout_btn"><span class="mobile_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM208 416c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zm272 48c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/></svg></span>Delivery Info</a>
        </li>

        <li class="mobile_only">
            <a href="#" class="mobile_nav_btn mobile_logout_btn"><span class="mobile_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48.5 224H40c-13.3 0-24-10.7-24-24V72c0-9.7 5.8-18.5 14.8-22.2s19.3-1.7 26.2 5.2L98.6 96.6c87.6-86.5 228.7-86.2 315.8 1c87.5 87.5 87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3c-62.2-62.2-162.7-62.5-225.3-1L185 183c6.9 6.9 8.9 17.2 5.2 26.2s-12.5 14.8-22.2 14.8H48.5z"/></svg></span>Returns</a>
        </li>

        <li class="mobile_only">
            <a href="#" class="mobile_nav_btn mobile_logout_btn"><span class="mobile_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-144c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/></svg></span>Help & Contact</a>
        </li>

        <li class="mobile_only">
            <a href="#" class="mobile_nav_btn mobile_logout_btn"><span class="mobile_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"/></svg></span>Live Chat</a>
        </li>
    </ul>
</nav>
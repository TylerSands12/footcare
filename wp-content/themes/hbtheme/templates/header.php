<header id="masthead" class="header">

    <div class="left_side">
        <div class="nav_toggle">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>

        <a href="<?php echo home_url(); ?>" class="logo"><?php get_template_part('templates/logo'); ?></a>
    </div>

    <div class="middle">
        <?php if ( is_active_sidebar( 'predictive-search-widget-area' ) ) : ?>
            <div id="secondary-sidebar" class="predictive-search-widget-area">
                <?php dynamic_sidebar( 'predictive-search-widget-area' ); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="right_side">
        <?php if (is_user_logged_in()) { ?>
            <a href="<?php echo wp_logout_url(); ?>" class="account my_account">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                <span>My Account</span>
            </a>
            <a href="<?php echo wp_logout_url(); ?>" class="account sign_out">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 96h64c17.7 0 32 14.3 32 32V384c0 17.7-14.3 32-32 32H352c-17.7 0-32 14.3-32 32s14.3 32 32 32h64c53 0 96-43 96-96V128c0-53-43-96-96-96H352c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-7.5 177.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H160v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg>
                <span>Sign Out</span>
            </a>
        <?php } else { ?>
            <a href="/my-account" class="account sign_in">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                <span>Sign In</span>
            </a>
        <?php } ?>

        <a class="cart" href="/cart">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H76.1l60.3 316.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H179.9l-9.1-48h317c14.3 0 26.9-9.5 30.8-23.3l54-192C578.3 52.3 563 32 541.8 32H122l-2.4-12.5C117.4 8.2 107.5 0 96 0H24zM176 512c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48zm336-48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48z"/></svg>
            <span>Basket</span>
        </a>
    </div>

    <?php get_template_part('templates/mega-menu'); ?>

    <div class="mobile_search_area">
        <?php if ( is_active_sidebar( 'predictive-search-widget-area' ) ) : ?>
            <div id="secondary-sidebar" class="predictive-search-widget-area">
                <?php dynamic_sidebar( 'predictive-search-widget-area' ); ?>
            </div>
        <?php endif; ?>
    </div>

</header>
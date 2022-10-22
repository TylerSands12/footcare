<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#317EFB"/>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php if( get_field('apple_touch_icon', 'option') ): ?>
  	<link rel="apple-touch-icon" href="<?php the_field('apple_touch_icon', 'options'); ?>">
  <?php endif; ?>

  <?php if( get_field('site_icon', 'option') ): ?>
  	<link rel="icon" href="<?php the_field('site_icon', 'options'); ?>">
  <?php endif; ?>

  <script async type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.js"></script>

  <link rel="stylesheet" href="https://use.typekit.net/lbx7fct.css">

  <?php the_field('header', 'options'); ?>

  <?php wp_head(); ?>
</head>
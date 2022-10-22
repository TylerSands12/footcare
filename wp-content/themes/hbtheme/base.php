<?php
use HB\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('templates/head'); ?>

  <body <?php body_class(); ?>>

    <?php the_field('body_start', 'options'); ?>

    <?php get_template_part('templates/header'); ?>

    <?php include Wrapper\template_path(); ?>

    <?php get_template_part('templates/footer'); ?>
    
    <!--ms detection-->
    <?php get_template_part('templates/ms-detector'); ?>

    <?php the_field('body_end', 'options'); ?>

    <script defer type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/lazy.js"></script>
    
  </body>

</html>
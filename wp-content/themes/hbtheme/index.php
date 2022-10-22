<main class="post_archive page_wrapper">

  <div class="posts">
    <?php if ( have_posts() ) {

      global $blog_count;
      $blog_count = 0;

      while ( have_posts() ) { 
        the_post();
        $blog_count++;
        get_template_part( 'templates/content/content-single' ); 
      }
    } else {
      echo 'No posts found';
    }
    ?>
  </div>

  <div class="pagination-links">
    <?php the_posts_pagination( array(
      'mid_size'  => 2,
      'prev_text' => __( '<', 'textdomain' ),
      'next_text' => __( '>', 'textdomain' ),
    )); ?>
  </div>

</main>
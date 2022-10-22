<section id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();
			get_template_part( 'templates/content/content', 'page' );
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</section><!-- #primary -->
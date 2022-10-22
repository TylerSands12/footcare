<div class="guidance_block">

	<div role="img" class="guidance_image object_fit" aria-label="<?= get_the_title(); ?>">
		 <?php the_post_thumbnail('full', array('alt' => $alt)); ?>
	</div>

	<div class="guidance_information">
		<h3><?php the_title(); ?></h3>

		<?php

		$terms = get_the_terms( $post->ID , 'category' );

		foreach ( $terms as $term ) { ?>

		<a href="<?= get_home_url(); ?>/category/<?= $term->slug; ?>" class="cat"><?php echo $term->name; ?></a>

		<?php } ?>

		<div class="synopsis">
			<p><?= wp_trim_words(get_the_content(), 30, '...'); ?></p> 
		</div>

		<div class="button_wrapper">
			<a class="orange_button" href="<?= get_the_permalink(); ?>">Read more ></a>
		</div>
	</div>

</div>
<?php
global $blog_count;
?>


<?php if ($blog_count == 1) { ?>

<div class="post_block counter_posts_<?php echo ($blog_count); ?> facetwp-template">

	<div class="blog_information">
		<div role="img" class="blog_image object_fit" aria-label="<?= get_the_title(); ?>">
			 <?php the_post_thumbnail('full', array('alt' => $alt)); ?>
			 <div class="first_post_inner">
			 	<div class="title">
			 		<div class="line"></div>
			 	    <h3><?php the_title(); ?></h3>
			 	</div>
			 	<div class="date"><?php $post_date = get_the_date( 'd/m/Y' ); echo $post_date; ?></div>
				<div class="synopsis">
					<p><?= wp_trim_words(get_the_content(), 85, '...'); ?></p> 
				</div>
				<div class="button_wrapper">
					<a class="btn_border_black" href="<?= get_the_permalink(); ?>">Read Article</a>
				</div>
			 </div>
		</div>
	</div>

</div>


<?php } else { ?>


<div class="post_block counter_posts_<?php echo ($blog_count); ?>">

	<div class="left_side">
		<div role="img" class="blog_image object_fit" aria-label="<?= get_the_title(); ?>">
			 <?php the_post_thumbnail('full', array('alt' => $alt)); ?>
		</div>
	</div>

	<div class="blog_information">
		<div class="title">
			<div class="line"></div>
		    <h3><?php the_title(); ?></h3>
		</div>
		<div class="date"><?php $post_date = get_the_date( 'd/m/Y' ); echo $post_date; ?></div>
		<div class="synopsis">
			<p><?= wp_trim_words(get_the_content(), 55, '...'); ?></p> 
		</div>
		<div class="button_wrapper">
			<a class="btn_border_black" href="<?= get_the_permalink(); ?>">Read More</a>
		</div>
	</div>

</div>


<?php } ?>
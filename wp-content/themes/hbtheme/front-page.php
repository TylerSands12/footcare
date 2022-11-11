<main class="home_wrapper page_wrapper">
	
	<section class="top_banner">
		<div class="container">
			<div class="section_inner">
				<div class="section_inner_top">
					<div class="top_banner_carousel">
						<?php
						$top_banner_carousel = get_field('top_banner_carousel');

						if ($top_banner_carousel) {
							foreach ($top_banner_carousel as $slide) { ?>

							<div class="slide">
								<?php if ($slide['image']) { ?>
									<div class="image_outer">
										<?php echo optimised_image($slide['image'], 'full'); ?>
									</div>
								<?php } ?>

								<div class="image_overlay">
									<div class="container">
										<div class="overlay_inner">
											<span class="header"><?php echo $slide['header']; ?></span>
											<p class="text"><?php echo $slide['subheader']; ?></p>
											<a href="<?php echo $slide['link']; ?>" class="button button-one"><?php echo $slide['label']; ?></a>
										</div>
									</div>
								</div>
							</div>

							<?php }
						} ?>
					</div>

					<div class="side_blocks">
						<?php
						$side_blocks = get_field('side_blocks');

						if ($side_blocks) {
							foreach ($side_blocks as $key => $block) { ?>

							<a href="<?php echo $block['link']; ?>" class="side_block">
								<?php if ($block['header'] || $block['subheader']) { ?>

									<div class="image_outer">
										<?php if ($block['image']) { ?>
											<?php echo optimised_image($block['image'], 'full'); ?>
										<?php } ?>
									
										<?php if ($block['header'] || $block['label']) { ?>
											<div class="image_overlay">
												<?php if ($block['header']) { ?>
													<span class="header"><?php echo $block['header']; ?></span>
												<?php } ?>

												<?php if ($block['label']) { ?>
													<div class="button button-one"><?php echo $block['label']; ?></div>
												<?php } ?>
											</div>
										<?php } ?>
									</div>

									<p class="text"><?php echo $block['subheader']; ?></p>

								<?php } else { ?>

									<?php if ($block['image']) { ?>
										<div class="image_outer">
											<?php echo optimised_image($block['image'], 'full'); ?>
										</div>
									<?php } ?>

								<?php } ?>
							</a>

							<?php if ($key == 1) {
								break;
							}
							?>

							<?php }
						} ?>
					</div>
				</div>

				<div class="under_banner_blocks desktop_under_banner_blocks">
					<?php
					if ($side_blocks) {
						foreach ($side_blocks as $key => $block) {
							
						if ($key == 0 || $key == 1) {
							continue;
						}
						?>

						<a href="<?php echo $block['link']; ?>" class="side_block">
							<?php if ($block['header'] || $block['subheader']) { ?>

								<div class="image_outer">
									<?php if ($block['image']) { ?>
										<?php echo optimised_image($block['image'], 'full'); ?>
									<?php } ?>
								
									<?php if ($block['header'] || $block['label']) { ?>
										<div class="image_overlay">
											<?php if ($block['header']) { ?>
												<span class="header"><?php echo $block['header']; ?></span>
											<?php } ?>

											<?php if ($block['label']) { ?>
												<div class="button button-one"><?php echo $block['label']; ?></div>
											<?php } ?>
										</div>
									<?php } ?>
								</div>

								<p class="text"><?php echo $block['subheader']; ?></p>

							<?php } else { ?>

								<?php if ($block['image']) { ?>
									<div class="image_outer">
										<?php echo optimised_image($block['image'], 'full'); ?>
									</div>
								<?php } ?>

							<?php } ?>
						</a>

						<?php }
					} ?>
				</div>

				<div class="mobile_under_banner_carousel">
					<?php
					if ($side_blocks) {
						foreach ($side_blocks as $key => $block) {
						?>

						<a href="<?php echo $block['link']; ?>" class="side_block">
							<?php if ($block['header'] || $block['subheader']) { ?>

								<div class="image_outer">
									<?php if ($block['image']) { ?>
										<?php echo optimised_image($block['image'], 'full'); ?>
									<?php } ?>
								
									<?php if ($block['header'] || $block['label']) { ?>
										<div class="image_overlay">
											<?php if ($block['header']) { ?>
												<span class="header"><?php echo $block['header']; ?></span>
											<?php } ?>

											<?php if ($block['label']) { ?>
												<div class="button button-one"><?php echo $block['label']; ?></div>
											<?php } ?>
										</div>
									<?php } ?>
								</div>

								<p class="text"><?php echo $block['subheader']; ?></p>

							<?php } else { ?>

								<?php if ($block['image']) { ?>
									<div class="image_outer">
										<?php echo optimised_image($block['image'], 'full'); ?>
									</div>
								<?php } ?>

							<?php } ?>
						</a>

						<?php }
					} ?>
				</div>
			</div>
		</div>
	</section>
	
	<?php
	$featured_product_categories = get_field('featured_categories_carousel');
	if ($featured_product_categories) {
	?>
	<section class="product_categories_section">
		<div class="container">
			
			<div class="section_inner">

				<div class="heading_area">
					<h2>Shop by Category</h2>
				</div>

				<div class="categories_outer">
					<?php
					foreach ($featured_product_categories as $key => $category) {
						include(locate_template('templates/category-card.php', false, false));

						if ($key == 3 || $key == 7) {
							echo '<hr>';
						}
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>

	<section class="explore_more_ways_section">
		<div class="container">
			<div class="section_inner">
				<div class="heading_area">
					<h2>Explore More Ways to Search</h2>
					<!-- <p class="subhead">Optional sub heading to follow...</p> -->
				</div>
				
				<div class="blocks_outer">
					<?php
					$explore_more_ways_to_search_blocks = get_field('explore_more_ways_to_search_blocks');

					if ($explore_more_ways_to_search_blocks) {
						foreach ($explore_more_ways_to_search_blocks as $block) {
						
						$bg_color = null;

						if ($block['background_colour']) {
							$bg_color = $block['background_colour'];
						}

						?>

						<a href="<?php echo $block['link']; ?>" class="side_block" <?php if ($bg_color) {?>style="background-color: <?php echo $bg_color; ?>;"<?php } ?>>
							<?php if ($block['header'] || $block['subheader']) { ?>

								<div class="image_outer">
									<?php if ($block['image']) { ?>
										<?php echo optimised_image($block['image'], 'full'); ?>
									<?php } ?>
										
									<div class="image_overlay">
										<?php if ($block['header']) { ?>
											<span class="header"><?php echo $block['header']; ?></span>
										<?php } ?>

										<?php if ($block['label'] || $block['link']) { ?>
											<div class="button button-one"><?php echo $block['label']; ?></div>
										<?php } ?>
									</div>
								</div>

							<?php } else { ?>

								<?php if ($block['image']) { ?>
									<div class="image_outer">
										<?php echo optimised_image($block['image'], 'full'); ?>
									</div>
								<?php } ?>

							<?php } ?>
								
							<?php if ($block['subheader']) { ?>
								<p class="text"><?php echo $block['subheader']; ?></p>
							<?php } ?>
						</a>

						<?php }
					} ?>
				</div>
			</div>
		</div>
	</section>

	<section class="featured_carousel_section">
		<div class="container">
			
			<div class="heading_area_outer">
				<div class="heading_area">
					<h2><?php the_field('carousel_one_heading'); ?></h2>
					<p class="subhead"><?php the_field('carousel_one_subheading'); ?></p>
				</div>
			</div>
			
			<div class="carousel">
				<?php
				$args = array(
					'post_type' => 'product',
					'post_status' => 'publish',
					'posts_per_page' => 12,
					// 'order' => 'DESC',
					// 'orderby' => 'ID',
					'tax_query' => array(
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => 'featured',
						),
					),
				);
				
				$query = new WP_Query( $args );

				if ($query->have_posts()) {
					while ($query->have_posts()) { 
						$query->the_post();
						?>

						<div class="slide">
							<?php get_template_part('templates/product-card'); ?>
						</div>
			
						<?php
					}
				}

				wp_reset_postdata();
				?>
			</div>

			<div class="blocks_outer">
				<?php
				$under_carousel_feature_blocks_one = get_field('under_carousel_feature_blocks_one');
				
				if ($under_carousel_feature_blocks_one) {
					foreach ($under_carousel_feature_blocks_one as $block) {
					
					$bg_color = null;

					if ($block['background_colour']) {
						$bg_color = $block['background_colour'];
					}

					?>

					<a href="<?php echo $block['link']; ?>" class="side_block" <?php if ($bg_color) {?>style="background-color: <?php echo $bg_color; ?>;"<?php } ?>>
						<?php if ($block['header'] || $block['subheader']) { ?>

							<div class="image_outer">
								<?php if ($block['image']) { ?>
									<?php echo optimised_image($block['image'], 'full'); ?>
								<?php } ?>
									
								<div class="image_overlay">
									<?php if ($block['header']) { ?>
										<span class="header"><?php echo $block['header']; ?></span>
									<?php } ?>

									<?php if ($block['label'] || $block['link']) { ?>
										<div class="button button-one"><?php echo $block['label']; ?></div>
									<?php } ?>
								</div>
							</div>

						<?php } else { ?>

							<?php if ($block['image']) { ?>
								<div class="image_outer">
									<?php echo optimised_image($block['image'], 'full'); ?>
								</div>
							<?php } ?>

						<?php } ?>
							
						<?php if ($block['subheader']) { ?>
							<p class="text"><?php echo $block['subheader']; ?></p>
						<?php } ?>
					</a>

					<?php }
				} ?>
			</div>
		</div>
	</section>

	<section class="featured_carousel_section">
		<div class="container">
			
			<div class="heading_area_outer">
				<div class="heading_area">
					<h2><?php the_field('carousel_two_heading'); ?></h2>
					<p class="subhead"><?php the_field('carousel_two_subheading'); ?></p>
				</div>
			</div>
			
			<div class="carousel">
				<?php
				$args = array(
					'post_type' => 'product',
					'post_status' => 'publish',
					'posts_per_page' => 12,
					// 'order' => 'DESC',
					// 'orderby' => 'ID',
					'tax_query' => array(
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => 'featured',
						),
					),
				);
				
				$query = new WP_Query( $args );

				if ($query->have_posts()) {
					while ($query->have_posts()) { 
						$query->the_post();
						?>

						<div class="slide">
							<?php get_template_part('templates/product-card'); ?>
						</div>
			
						<?php
					}
				}

				wp_reset_postdata();
				?>
			</div>

			<div class="blocks_outer">
				<?php
				$under_carousel_feature_blocks_two = get_field('under_carousel_feature_blocks_two');

				if ($under_carousel_feature_blocks_two) {
					foreach ($under_carousel_feature_blocks_two as $block) {
					
					$bg_color = null;

					if ($block['background_colour']) {
						$bg_color = $block['background_colour'];
					}

					?>

					<a href="<?php echo $block['link']; ?>" class="side_block" <?php if ($bg_color) {?>style="background-color: <?php echo $bg_color; ?>;"<?php } ?>>
						<?php if ($block['header'] || $block['subheader']) { ?>

							<div class="image_outer">
								<?php if ($block['image']) { ?>
									<?php echo optimised_image($block['image'], 'full'); ?>
								<?php } ?>
									
								<div class="image_overlay">
									<?php if ($block['header']) { ?>
										<span class="header"><?php echo $block['header']; ?></span>
									<?php } ?>

									<?php if ($block['label'] || $block['link']) { ?>
										<div class="button button-one"><?php echo $block['label']; ?></div>
									<?php } ?>
								</div>
							</div>

						<?php } else { ?>

							<?php if ($block['image']) { ?>
								<div class="image_outer">
									<?php echo optimised_image($block['image'], 'full'); ?>
								</div>
							<?php } ?>

						<?php } ?>
							
						<?php if ($block['subheader']) { ?>
							<p class="text"><?php echo $block['subheader']; ?></p>
						<?php } ?>
					</a>

					<?php }
				} ?>
			</div>
		</div>
	</section>

	<section class="explore_huge_saving_discounts_section">
		<div class="container">
			<div class="section_inner">

				<div class="heading_area_outer">
					<div class="heading_area">
						<h2>Explore Huge Saving Discounts</h2>
						<p class="subhead">Optional sub heading to follow...</p>
					</div>
				</div>

				<?php
				$explore_discounts_blocks = get_field('explore_huge_saving_discount_blocks');

				if ($explore_discounts_blocks) {
					foreach ($explore_discounts_blocks as $block) {
					
					$bg_color = null;

					if ($block['background_colour']) {
						$bg_color = $block['background_colour'];
					}

					?>

					<a href="<?php echo $block['link']; ?>" class="side_block">
						<?php if ($block['header'] || $block['subheader']) { ?>

							<div class="image_outer" <?php if ($bg_color) {?>style="background-color: <?php echo $bg_color; ?>;"<?php } ?>>
								<?php if ($block['image']) { ?>
									<?php echo optimised_image($block['image'], 'full'); ?>
								<?php } ?>
									
								<div class="image_overlay">
									<?php if ($block['header']) { ?>
										<span class="header"><?php echo $block['header']; ?></span>
									<?php } ?>

									<?php if ($block['label'] || $block['link']) { ?>
										<div class="button button-one"><?php echo $block['label']; ?></div>
									<?php } ?>
								</div>
							</div>

						<?php } else { ?>

							<?php if ($block['image']) { ?>
								<div class="image_outer">
									<?php echo optimised_image($block['image'], 'full'); ?>
								</div>
							<?php } ?>

						<?php } ?>
							
						<?php if ($block['subheader']) { ?>
							<p class="text"><?php echo $block['subheader']; ?></p>
						<?php } ?>
					</a>

					<?php }
				} ?>
			</div>

			<div class="view_all_button_outer">
				<a href="#" class="button button-two">View All Promotions</a>
			</div>
		</div>
	</section>

	<section class="always_offering_section">
		<div class="container">
			<div class="section_inner">

				<div class="heading_area_outer">
					<div class="heading_area">
						<h2>Always Offering</h2>
						<p class="subhead">Optional sub heading to follow...</p>
					</div>
				</div>

				<?php
				$more_ways_to_save_blocks = get_field('more_ways_to_save_blocks');

				if ($more_ways_to_save_blocks) {
					foreach ($more_ways_to_save_blocks as $key => $block) {
					
					$bg_color = null;

					if ($block['background_colour']) {
						$bg_color = $block['background_colour'];
					}

					?>

					<a href="<?php echo $block['link']; ?>" class="side_block" <?php if ($bg_color) {?>style="background-color: <?php echo $bg_color; ?>;"<?php } ?>>
						<?php if ($block['header'] || $block['subheader']) { ?>

							<div class="image_outer">
								<?php if ($block['image']) { ?>
									<?php echo optimised_image($block['image'], 'full'); ?>
								<?php } ?>
									
								<div class="image_overlay">
									<?php if ($block['header']) { ?>
										<span class="header"><?php echo $block['header']; ?></span>
									<?php } ?>

									<?php if ($block['label'] || $block['link']) { ?>
										<div class="button button-one"><?php echo $block['label']; ?></div>
									<?php } ?>
								</div>
							</div>

						<?php } else { ?>

							<?php if ($block['image']) { ?>
								<div class="image_outer">
									<?php echo optimised_image($block['image'], 'full'); ?>
								</div>
							<?php } ?>

						<?php } ?>
							
						<?php if ($block['subheader']) { ?>
							<p class="text"><?php echo $block['subheader']; ?></p>
						<?php } ?>
					</a>

					<?php
					if ($key == 2) {
						echo '<hr>';
					}
					?>

					<?php }
				} ?>
			</div>
		</div>
	</section>

	<section class="stay_connected_section">
		<div class="container">
			<div class="section_inner">
				<div class="heading_area_outer">
					<div class="heading_area">
						<h2>Stay Connected</h2>
						<p class="subhead">Optional sub heading to follow...</p>
					</div>
				</div>

				<div class="left_side">
					<h4>Mailing List</h4>   
					<p>Sign Up and Save 10% on your First Order</p>
					<?php echo do_shortcode('[wpforms id="180" title="false"]'); ?>
				</div>

				<div class="right_side">
					<h4>Stock Alerts</h4>
					<p>No Need to Keep Checking - We Will Let you Know!</p>
					<a href="/shop" class="button button-two">Shop Now</a> 
				</div>

				<?php get_template_part('templates/social-media-icons'); ?>
			</div>
		</div>
	</section>

	<section class="blog_posts_section">
		<div class="container">
			
			<div class="section_inner">

				<div class="heading_area_outer">
					<div class="heading_area">
						<h2>Foot Health Tips</h2>
						<p class="subhead">Broaden your knowledge of foot health issues & fun facts with our articles and blogs.</p>
					</div>
				</div>

				<div class="blog_cards">
					<?php
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'posts_per_page' => 5,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field' => 'slug',
								'terms' => 'featured',
							),
						),
					);
					
					$query = new WP_Query( $args );

					if ($query->have_posts()) {
						while ($query->have_posts()) { 
							$query->the_post();
							get_template_part('templates/blog-card');
						}
					}

					wp_reset_postdata();
					?>
				</div>
			</div>

			<div class="view_all_button_outer">
				<a href="#" class="button button-two">See More Articles</a>
			</div>
		</div>
	</section>

</main>
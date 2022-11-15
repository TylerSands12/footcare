<?php
$is_category_page = false;
$is_sports_or_conditions_subcat = false;
$category_page_class = "";

if (is_product_category()) {
	$is_category_page = true;
	$category_page_class = " category_page_wrapper";
	$current_category = get_queried_object();
	$category_banner_image = get_field('top_banner', 'product_cat_'.$current_category->term_id) ? get_field('top_banner', 'product_cat_'.$current_category->term_id) : get_field('default_banner_image', 'options');
	
	if ($current_category->parent == 26 || $current_category->parent == 36) {
		$is_sports_or_conditions_subcat = true;
	}
}
?>

<main class="product_archive_wrapper page_wrapper<?php echo $category_page_class; ?>">

	<div class="container">
		<div class="section_inner">
				
			<?php if ($is_category_page) { ?>
				<?php if (!$is_sports_or_conditions_subcat) { ?>
					<h1><?php echo $current_category->name; ?></h1>
				<?php } ?>
			<?php } else { ?>
				<h1>Shop</h1>
			<?php } ?>
			
			<div class="section_top">
				<?php
				/**
				 * The Template for displaying product archives, including the main shop page which is a post type archive
				 *
				 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
				 *
				 * HOWEVER, on occasion WooCommerce will need to update template files and you
				 * (the theme developer) will need to copy the new files to your theme to
				 * maintain compatibility. We try to do this as little as possible, but it does
				 * happen. When this occurs the version of the template file will be bumped and
				 * the readme will list any important changes.
				 *
				 * @see https://docs.woocommerce.com/document/template-structure/
				 * @package WooCommerce\Templates
				 * @version 3.4.0
				 */

				defined( 'ABSPATH' ) || exit;

				/**
				 * Hook: woocommerce_before_main_content.
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 * @hooked WC_Structured_Data::generate_website_data() - 30
				 */
				do_action( 'woocommerce_before_main_content' );

				if ( woocommerce_product_loop() ) {
					/**
					 * Hook: woocommerce_before_shop_loop.
					 *
					 * @hooked woocommerce_output_all_notices - 10
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action( 'woocommerce_before_shop_loop' );
				}

				?>
			</div>

			<div class="section_main">
				
				<div class="left_side">
					<?php if (!$is_sports_or_conditions_subcat) {
						echo do_shortcode('[yith_wcan_filters slug="default-preset"]');
					} ?>
					
					<?php if (get_field('promo_tiles') || get_field('default_left_promo_tiles', 'options')) { ?>
						<div class="left_promo_tiles">
							<?php
							$promo_tiles = get_field('promo_tiles') ? get_field('promo_tiles') : get_field('default_left_promo_tiles', 'options');
							foreach ($promo_tiles as $tile) { ?>
								<a href="<?php echo $tile['link']; ?>">
									<?php echo optimised_image($tile['image'], 'medium'); ?>
								</a>
							<?php } ?>
						</div>
					<?php } ?>
				</div>

				<div class="right_side">
			
					<?php if ($is_category_page) { ?>

						<?php if ($category_banner_image) { ?>
						<section class="top_banner">
							<?php echo optimised_image($category_banner_image, 'full'); ?>
						</section>
						<?php } ?>
						
						<?php if ($current_category->description) { ?>
						<div class="description"><?php echo $current_category->description; ?></div>
						<?php } ?>

					<?php } ?>

					<?php if ($is_category_page && $is_sports_or_conditions_subcat) { ?>

						<?php
						$sports_conditions_blocks = get_field('sports_conditions_blocks');

						if ($sports_conditions_blocks) { ?>
							
							<div class="sports_conditions_blocks">
								<?php foreach ($sports_conditions_blocks as $block) {
								
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

								<?php } ?>
							</div>

						<?php } ?>
						
						<section class="sports_conditions_carousel_section">
							<div class="container">
								
								<div class="heading_area_outer">
									<div class="heading_area">
										<h2>Our Top Pick for <?php echo $current_category->name; ?></h2>
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
							</div>
						</section>

						<section class="blog_posts_section">
							<div class="container">
								
								<div class="blog_posts_section_inner">

									<div class="heading_area_outer">
										<div class="heading_area">
											<h2>Related Articles</h2>
										</div>
									</div>

									<div class="blog_cards home_blog_carousel">
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

					<?php } else { ?>
					
						<?php
						if ( woocommerce_product_loop() ) {

							woocommerce_product_loop_start();

							if ( wc_get_loop_prop( 'total' ) ) {
								while ( have_posts() ) {
									the_post();

									/**
									 * Hook: woocommerce_shop_loop.
									 */
									do_action( 'woocommerce_shop_loop' );
									
									get_template_part('templates/product-card');
									// wc_get_template_part( 'content', 'product' );
								}
							}

							woocommerce_product_loop_end();

							/**
							 * Hook: woocommerce_after_shop_loop.
							 *
							 * @hooked woocommerce_pagination - 10
							 */
							do_action( 'woocommerce_after_shop_loop' );
						} else {
							/**
							 * Hook: woocommerce_no_products_found.
							 *
							 * @hooked wc_no_products_found - 10
							 */
							do_action( 'woocommerce_no_products_found' );
						}

						/**
						 * Hook: woocommerce_after_main_content.
						 *
						 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
						 */
						do_action( 'woocommerce_after_main_content' );
						?>

					<?php } ?>
				</div>
			</div>

		</div>
	</div>
</main>
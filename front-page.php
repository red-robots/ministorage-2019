<?php
/**
 * The template for displaying home page.
 *
 */

get_header(); 
?>

<div id="primary" class="full-content-area clear">
	<?php while ( have_posts() ) : the_post(); ?>
		
		<?php get_template_part('template-parts/home-blue-boxes'); ?>
		
		<?php  
		$features = get_field('home_features');
		if($features) { ?>
		<section class="section section-home-features clear">
			<div class="wrapper clear">
				<div class="home-icons-features row">
					<?php $i=1; foreach ($features as $e) { 
						$feat_icon = $e['icon'];
						$feat_name = $e['name'];
						if ($feat_name) {  ?>
						<div class="flexcol iconbox<?php echo($i==1) ? ' first':'';?>">
							<div class="inside clear">
								<?php if ($feat_icon) { ?>
								<div class="icondiv"><img src="<?php echo $feat_icon['url'] ?>" alt="" /></div>	
								<?php } ?>
								<div class="titlediv"><h3><?php echo $feat_name ?></h3></div>
							</div>
						</div>
						<?php $i++; } ?>
					<?php } ?>
				</div>
			</div>
		</section>
		<?php } ?>

		<?php 
		$storage_section_title = get_field('storage_section_title'); 
		$storage_section_text = get_field('storage_section_text'); 
		$storage_text_bottom = get_field('storage_text_bottom'); 
		$storage_map_icon = get_field('storage_map_icon'); 
		$storage_map_url = get_field('storage_map_url'); 
		?>

		<section class="section section-home-bottom clear">
			<div class="wrapper clear">
				<div class="flexrow">
					<div class="flexcol section-home-storage">
						<div class="flexpad clear">
							<?php if ($storage_section_title) { ?>
								<h3 class="section-title text-center"><?php echo $storage_section_title ?></h3>
							<?php } ?>

							<?php if ($storage_section_text) { ?>
								<div class="section-textwrap"><?php echo $storage_section_text ?></div>
							<?php } ?>

							<div class="columnswrap clear">
								<div class="storage-column col1">
									<?php echo $storage_text_bottom ?>
								</div>
								<div class="storage-column-map">
									<?php if ($storage_map_icon && $storage_map_url ) { ?>
									<a class="mapIcon" href="<?php echo $storage_map_url ?>" target="_blank"><img src="<?php echo $storage_map_icon['url'] ?>" alt="" /></a>	
									<?php } ?>
								</div>	
							</div>
						</div>
					</div>

					<div class="flexcol section-home-news">
						<div class="inside clear">
							<div class="titlediv">
								<h3 class="section-title text-center">News</h3>
							</div>
							<?php
								$coupon_title1 = get_field('coupon_title1'); 
								$coupon_title2 = get_field('coupon_title2'); 
								$coupon_description = get_field('coupon_description'); 
								if($coupon_title1 || $coupon_title2) { ?>
									<div class="coupon">
										<div class="c_inside clear">
											<div class="wrap">
												<?php if ($coupon_title1) { ?>
												<div class="line1"><?php echo $coupon_title1 ?></div>
												<?php } ?>
												<?php if ($coupon_title2) { ?>
												<div class="line2"><?php echo $coupon_title2 ?></div>
												<?php } ?>
												<?php if ($coupon_description) { ?>
												<div class="coupon_description"><?php echo $coupon_description ?></div>
												<?php } ?>
											</div>
										</div>
									</div>
								<?php } ?>
							<?php get_template_part('template-parts/home-latest-news'); ?>
							<div class="overlay news-overlay"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php endwhile; ?>
	</main>
</div>

<?php
get_footer();

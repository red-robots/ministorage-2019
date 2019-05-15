<?php
/**
 * Template Name: No Navigation Page
 */

get_header(); ?>

	<div id="primary" class="full-content-area wrapper default-template nonavpage">
		<main id="main" class="site-main clear" role="main">

			<?php 
			while ( have_posts() ) : the_post();
				$contact_details = get_field('contact_details');
				$form = get_field('form');
				$callrail = get_field('call_rail');
			endwhile; ?>
			<header class="entry-header">
				<?php the_title( '<p class="entry-title">', '</p>' ); ?>
			</header><!-- .entry-header -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="content-area-wrap">
					<div class="offers-text"><?php the_content(); ?></div>

					<div class="cta-call first"><b>Call: <?php echo $callrail; ?></b></div>
					<div class="clear"></div>



					<div class="mobileonly">
						<div class="sidebar__inner sidebarpad clear">
						<?php if ($contact_details) { ?>
						<div class="contact-details">
							<div id="phoneInfoArea" class="innerWrap clear">
							<?php echo $contact_details; ?>
							</div>
							<?php
								$wp_query = new WP_Query(array('pagename'=>'homepage'));
								if ( have_posts() ) : the_post(); 
								$coupon_title1 = get_field('coupon_title1'); 
								$coupon_title2 = get_field('coupon_title2'); 
								$coupon_description = get_field('coupon_description'); 
									if($coupon_title1 || $coupon_title2) { ?>
										<div class="coupon ctac">
											<div class="c_inside clear">
												<div class="wrap">
													<?php if ($coupon_title1) { ?>
													<div class="line1"><?php echo $coupon_title1 ?></div>
													<?php } ?>
													<?php if ($coupon_title2) { ?>
													<div class="line2"><?php echo $coupon_title2 ?></div>
													<?php } ?>
													<?php if ($coupon_description) { ?>
													<div class="coupon_description">
													Ask about this coupon at any storage locations managed by Waters Incorporated. Valid for new customers only | Pricing may vary per location.
													</div>
													<?php } ?>
												</div>
											</div>
										</div>
									<?php 
									} 
									endif;
									?>
							<div id="gformArea" class="gform-outside-wrap clear"></div>
						</div>
						<?php } ?>
						</div>
					

						<?php if ($form) { ?>
						<div class="contact-details">
							<div id="phoneInfoArea" class="innerWrap clear">
								
							<?php echo $form; ?>
							</div>
							<div id="gformArea" class="gform-outside-wrap clear"></div>
						</div>
						<?php } ?>
					</div>



					<?php 
						// get Myrtle Beach location 864
						$post = get_post(864); 
						setup_postdata( $post ); 
						$tablabels = array(
							"Location, Contact & Hours",
							"Storage Units, Pricing & Amenitites",
							// "Make A Reservation",
							// "Make A Payment",
							// "Special Savings"
						);


						$address = get_field('address');
						$contact_phone = get_field('contact_phone');
						$contact_fax = get_field('contact_fax');
						$contact_toll_free = get_field('contact_toll_free');
						$contact_email = get_field('contact_email');
						$hours_access = get_field('hours_access');
						$location_default_photo = get_field('location_default_photo');
						$location_description = get_field('location_description');
						$map = get_field('map');
						$location_gallery = get_field('location_gallery');
						$galleries = get_field('gallery');

						$features[] = get_field_object('outdoor_storage');
						$features[] = get_field_object('indoor_storage');
						$features[] = get_field_object('climate_controlled_storage');
						$features[] = get_field_object('office_warehouse_space_available');
						$features[] = get_field_object('truck_rv_motorcycle_parking');
						$features[] = get_field_object('access');
						$features[] = get_field_object('packing_supplies_available');
						$features[] = get_field_object('truck_rentals');
						$features[] = get_field_object('van_rentals_available');
						$features[] = get_field_object('online_payment');
						$features[] = get_field_object('online_reservations');
						$features[] = get_field_object('other_amenities');
						$features[] = get_field_object('trailer_hitches');

						$size_pricing = get_field('size_pricing');
						$iframe = get_field('iframe');
						$make_a_reservation = get_field('make_a_reservation');
						$iframe_res = get_field('iframe_res');
						$make_a_payment = get_field('make_a_payment');
						$iframe_pay = get_field('iframe_pay');
						$special_savings = get_field('special_savings');

						$feature_lists = array();
						foreach($features as $obj) {
							$field_label = $obj['label'];
							$field_value = $obj['value'];
							$field_name = $obj['name'];
							if($field_value) {
								$feature_lists[] = array(
										'label'=>$field_label,
										'value'=>$field_value,
										'name'=>$field_name
									);
							}
						}

						if($feature_lists) {
							$f_count = count($feature_lists);
							if($f_count>8) {
								$per_columns = ceil($f_count/3);
							} else {
								$per_columns = ceil($f_count/2);
							}
							
							$feature_lists = array_chunk($feature_lists,$per_columns); 
						}
						
					?>

					<div class="location-tabs tabswrapper clear">
				<ul id="locationInfoTabs" class="tabs-style">
					<?php $i=1; 
					foreach ($tablabels as $tabname) { 
						$default_active = ($i==1) ? ' active':''; ?>
					<li data-panel="#details<?php echo $i?>" class="tabName tab<?php echo $default_active;?>"><a><span><?php echo $tabname ?></span></a></li>
					<?php $i++; } ?>
				</ul>
				

				<div class="tab-content-wrapper clear">
					<?php /* Location, Contact & Hours */ ?>
					<div id="details1" class="tab-content active">
						<a href="#" data-rel="#details1" class="tab-label first"><?php echo $tablabels[0]; ?><span class="arrow"><i class="fas fa-arrow-circle-down"></i></span></a>
						<div class="tab-inner-content clear">
							<div class="innerpad clear">
								<div class="content-left">
									<div class="col-left">
										<?php if ($address) { ?>
											<div class="infowrap">
												<h3 class="section-title">ADDRESS</h3>
												<div class="info"><?php echo $address ?></div>
											</div>
										<?php } ?>
										<?php if ( $contact_phone || $contact_fax || $contact_toll_free || $contact_email ) { ?>
											<div class="infowrap">
												<h3 class="section-title">CONTACT</h3>
												<?php if ($contact_phone) { ?>
												<div class="info"><span class="lbl">Phone:</span> <a href="tel:<?php echo format_phone_number($contact_phone); ?>"><?php echo $contact_phone; ?></a></div>
												<?php } ?>
												<?php if ($contact_fax) { ?>
												<div class="info"><span class="lbl">Fax:</span> <a href="tel:<?php echo format_phone_number($contact_fax); ?>"><?php echo $contact_fax; ?></a></div>
												<?php } ?>
												<?php if ($contact_toll_free) { ?>
												<div class="info"><span class="lbl">Toll-Free:</span> <?php echo $contact_toll_free; ?></div>
												<?php } ?>
												<?php if ($contact_email) { ?>
												<div class="info"><span class="lbl">Email:</span> <a href="mailto:<?php echo antispambot($contact_email,1); ?>"><?php echo antispambot($contact_email); ?></a></div>
												<?php } ?>
											</div>
										<?php } ?>

										<?php if ( $hours_access ) { ?>
											<div class="infowrap">
												<h3 class="section-title">HOURS &amp; ACCESS</h3>
												<div class="info"><?php echo $hours_access ?></div>
											</div>
										<?php } ?>
									</div>
									<div class="col-right">
										<?php if ( $location_description ) { ?>
											<div class="infowrap"><?php echo $location_description ?></div>
										<?php } ?>
									</div>
								</div>
								<div class="content-right">
									<?php if ($map) { ?>
										<div class="infowrap mapdiv"><?php echo $map ?></div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>

					<?php /* Storage Units, Pricing & Amenitites */ ?>
					<div id="details2" class="tab-content">
						<a href="#" data-rel="#details2" class="tab-label"><?php echo $tablabels[1]; ?><span class="arrow"><i class="fas fa-arrow-circle-down"></i></span></a>
						<div class="tab-inner-content clear">
							<div class="innerpad clear">
								<?php if($feature_lists) { ?>
									<div class="infowrap feature_lists_wrap">
										<h3 class="section-title">FACILITY &amp; AMENITIES</h3>
										<div class="flexrow">
										<?php foreach ($feature_lists as $featureItems) { ?>
											<div class="flexcol feature-list">
												<ul>
												<?php foreach ($featureItems as $feat) { ?>
													<li><span class="check-icon"><i class="fas fa-check"></i></span><?php echo $feat['label']; ?></li>
												<?php } ?>
												</ul>
											</div>
										<?php } ?>
										</div>
									</div>
								<?php } ?>
								<?php if ($size_pricing) { ?>
									<div class="size_pricing clear">
										<h3 class="section-title">UNIT SIZES &amp; PRICING</h3>
										<table class="table-style normal-table">
											<thead>
												<tr>
													<th>Unit Size</th>
													<th>Unit Price</th>
												</tr>
											</thead>
											<tbody>
												<?php $ctr=1; foreach ($size_pricing as $sp) { 
													$rowClass = ($ctr % 2) ? 'odd':'even'; ?>
													<tr class="<?php echo $rowClass ?> bcol<?php echo $ctr;?>">
														<td class="bcol1"><?php echo $sp['unit_size'] ?></td>
														<td><?php echo $sp['unit_price'] ?></td>
													</tr>
												<?php $ctr++; } ?>
											</tbody>
										</table>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>

					<?php /* Make A Reservation */ ?>
					<div id="details3" class="tab-content">
						<a href="#" data-rel="#details3" class="tab-label"><?php echo $tablabels[2]; ?><span class="arrow"><i class="fas fa-arrow-circle-down"></i></span></a>
						<div class="tab-inner-content clear">
							<div class="innerpad clear">
								<?php if ($make_a_reservation) { ?>
									<div class="infowrap"><?php echo $make_a_reservation; ?></div>
								<?php } ?>

								<?php $make_a_reservation_link = get_field('make_a_reservation_link'); ?>
								<?php if ($make_a_reservation_link) { ?>
									<div class="infowrap text-center"><a href="<?php echo $make_a_reservation_link ?>" target="_blank" class="rformBtn">Reservation Request Form</a></div>
								<?php } ?>
							</div>
						</div>
					</div>

					<?php /* Make A Payment */ ?>
					<div id="details4" class="tab-content">
						<a href="#" data-rel="#details4" class="tab-label"><?php echo $tablabels[3]; ?><span class="arrow"><i class="fas fa-arrow-circle-down"></i></span></a>
						<div class="tab-inner-content clear">
							<div class="innerpad clear">
								<?php if ($make_a_payment) { ?>
									<div class="infowrap"><?php echo $make_a_payment; ?></div>
								<?php } ?>

								<?php $make_a_payment_link = get_field('make_a_payment_link'); ?>
								<?php if ($make_a_payment_link) { ?>
									<div class="infowrap text-center"><a href="<?php echo $make_a_payment_link ?>" target="_blank" class="rformBtn">Pay Online</a></div>
								<?php } ?>

							</div>
						</div>
					</div>

					<?php /* Special Savings */ ?>
					<div id="details5" class="tab-content">
						<a href="#" data-rel="#details5" class="tab-label"><?php echo $tablabels[4]; ?><span class="arrow"><i class="fas fa-arrow-circle-down"></i></span></a>
						<div class="tab-inner-content clear">
							<div class="innerpad clear">
								<?php if ($special_savings) { ?>
									<div class="infowrap"><?php echo $special_savings; ?></div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>


			</div><!-- end tabs-->

					<?php wp_reset_postdata(); ?>

					<?php get_template_part('template-parts/latest-testimonials'); ?>
				</div>





				<div class="nomobile">
				<div class="widget-contact-info sticky_sidebar">
					<div class="sidebar__inner sidebarpad clear">
					<?php if ($contact_details) { ?>
					<div class="contact-details">
						<div id="phoneInfoArea" class="innerWrap clear">
						<?php echo $contact_details; ?>
						</div>
						<?php
							$wp_query = new WP_Query(array('pagename'=>'homepage'));
							if ( have_posts() ) : the_post(); 
							$coupon_title1 = get_field('coupon_title1'); 
							$coupon_title2 = get_field('coupon_title2'); 
							$coupon_description = get_field('coupon_description'); 
								if($coupon_title1 || $coupon_title2) { ?>
									<div class="coupon ctac">
										<div class="c_inside clear">
											<div class="wrap">
												<?php if ($coupon_title1) { ?>
												<div class="line1"><?php echo $coupon_title1 ?></div>
												<?php } ?>
												<?php if ($coupon_title2) { ?>
												<div class="line2"><?php echo $coupon_title2 ?></div>
												<?php } ?>
												<?php if ($coupon_description) { ?>
												<div class="coupon_description">
												Ask about this coupon at any storage locations managed by Waters Incorporated. Valid for new customers only | Pricing may vary per location.
												</div>
												<?php } ?>
											</div>
										</div>
									</div>
								<?php 
								} 
								endif;
								?>
						<div id="gformArea" class="gform-outside-wrap clear"></div>
					</div>
					<?php } ?>
					</div>
					

					<?php if ($form) { ?>
					<div class="contact-details">
						<div id="phoneInfoArea" class="innerWrap clear">
							
						<?php echo $form; ?>
						</div>
						<div id="gformArea" class="gform-outside-wrap clear"></div>
					</div>
					<?php } ?>
				</div>
				</div> <!-- no mobile -->
			</article>
			
			<div id="sticky_stopper" class="sticky-stopper clear"></div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

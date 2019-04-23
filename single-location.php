<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="full-content-area wrapper">
		<main id="main" class="site-main clear" role="main">

		<?php while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_format() ); ?>

			<?php  
				$tablabels = array(
					"Location, Contact & Hours",
					"Storage Units, Pricing & Amenitites",
					"Make A Reservation",
					"Make A Payment",
					"Special Savings"
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
				$outdoor_storage = get_field('outdoor_storage');
				$indoor_storage = get_field('indoor_storage');
				$indoor_storage = get_field('indoor_storage');
				$climate_controlled_storage = get_field('climate_controlled_storage');
				$office_warehouse_space_available = get_field('office_warehouse_space_available');
				$truck_rv_motorcycle_parking = get_field('truck_rv_motorcycle_parking');
				$access247 = get_field('access');
				$packing_supplies_available = get_field('packing_supplies_available');
				$truck_rentals = get_field('truck_rentals');
				$van_rentals_available = get_field('van_rentals_available');
				$online_payment = get_field('online_payment');
				$online_reservations = get_field('online_reservations');
				$other_amenities = get_field('other_amenities');
				$trailer_hitches = get_field('trailer_hitches');
				$size_pricing = get_field('size_pricing');
				$iframe = get_field('iframe');
				$make_a_reservation = get_field('make_a_reservation');
				$iframe_res = get_field('iframe_res');
				$make_a_payment = get_field('make_a_payment');
				$iframe_pay = get_field('iframe_pay');
				$special_savings = get_field('special_savings');
				$location_gallery = get_field('location_gallery');
				$gallery = get_field('gallery');
			?>
			<div class="location-tabs tabswrapper">
				<ul id="locationInfoTabs" class="tabs-style">
					<?php $i=1; foreach ($tablabels as $tabname) { $default_active = ($i==1) ? ' active':''; ?>
					<li class="tab<?php echo $default_active;?>"><a href="#details<?php echo $i?>"><?php echo $tabname ?></a></li>
					<?php $i++; } ?>
				</ul>
				<div class="tab-content-wrapper clear">
					<div id="details1" class="tab-content">
						<h2 class="tab-title location_tabname"><?php echo $tablabels[0]; ?> <span class="arrow"><i class="fas fa-arrow-circle-down"></i></span></h2>
						<div class="tab-inner-content clear">
							<h3 class="section-title">ADDRESS</h3>
						</div>
					</div>
					<div id="details2" class="tab-content">
						
					</div>
				</div>
			</div>

		<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

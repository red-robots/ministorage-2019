<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>
<div id="primary" class="full-content-area clear">
	<main id="main" class="site-main clear" role="main">

		<section class="main-text-content wrapper">
		<?php while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile;  ?>
		</section>

		<?php  
		$args = array(
            'posts_per_page'   => -1,
            'post_type'        => 'location',
            'post_status'      => 'publish'
        );
        $locations = new WP_Query($args);
        if($locations->have_posts()) { ?>
        <section class="contact-location-list clear">
	        <div class="contact-page-locations wrapper clear">
	        	<div class="masonry-style">
	        	<?php while ( $locations->have_posts() ) : $locations->the_post(); ?>
	        		<?php  
	        		$address = get_field('address');
					$contact_phone = get_field('contact_phone');
					$contact_fax = get_field('contact_fax');
					$contact_toll_free = get_field('contact_toll_free');
					$contact_email = get_field('contact_email');
	        		?>
	        		<div class="item details">
	        			<div class="inside clear">
	        				<div class="txtwrap clear">
		        				<p class="location"><span class="icon"><i class="fas fa-map-marker-alt"></i></span><?php the_title(); ?></p>
		        				<?php if ($address) { ?>
		        					<div class="label">Address</div>
		        					<div class="info address-info"><?php echo $address ?></div>
		        				<?php } ?>
		        				<?php if ($contact_phone || $contact_fax || $contact_email) { ?>
		        					<div class="label">Contact</div>
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
		        				<?php } ?>
	        				</div>
	        				<div class="buttondiv">
	        					<a href="<?php echo get_permalink(); ?>">View more information</a>
	        				</div>
	        			</div>
	        		</div>
	        	<?php endwhile;  ?>
	        	</div>
	        </div>
        </section>
        <?php } ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();

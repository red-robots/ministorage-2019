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
				$callrail = get_field('call_rail');
			endwhile; ?>
			<header class="entry-header">
				<?php the_title( '<p class="entry-title">', '</p>' ); ?>
			</header><!-- .entry-header -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="content-area-wrap">
					<div class="offers-text"><?php the_content(); ?></div>

					<div class="cta-call first"><?php echo $callrail; ?></div>

					<?php
					$wp_query = new WP_Query(array('pagename'=>'homepage'));
					if ( have_posts() ) : the_post(); 
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

						<!-- <div class="cta-call"><?php echo $callrail; ?></div> -->

					<?php get_template_part('template-parts/latest-testimonials'); ?>
				</div>

				<div class="widget-contact-info sticky_sidebar">
					<div class="sidebar__inner sidebarpad clear">
					<?php 
					 
					?>
					<?php if ($contact_details) { ?>
					<div class="contact-details">
						<div id="phoneInfoArea" class="innerWrap clear">
						<?php echo $contact_details; ?>
						</div>
						<div id="gformArea" class="gform-outside-wrap clear"></div>
					</div>
					<?php } ?>
					</div>
				</div>
			</article>
			
			<div id="sticky_stopper" class="sticky-stopper clear"></div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

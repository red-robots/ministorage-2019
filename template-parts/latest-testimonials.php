<?php 
$args = array(
'posts_per_page'   => 3,
'orderby'          => 'date',
'order'            => 'DESC',
'post_type'        => 'testimonial',
'post_status'      => 'publish'
);
$testimonials = new WP_Query($args);
if ( $testimonials->have_posts() ) {  ?>
<div class="testimonials-list clear">
	<div class="inner-pad clear">
		<h2 class="section-title">Testimonials</h2>
		<div class="flexrow">
			<?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
			<div class="flexcol">
				<div class="inside">
					<div class="text"><?php the_excerpt(); ?></div>
					<div class="author"><?php the_title(); ?></div>
				</div>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</div>
<?php } ?>
<?php
$args = array(
    'posts_per_page'   => -1,
    'post_type'        => 'location',
    'post_status'      => 'publish'
);
$locations = new WP_Query($args);
if ( $locations->have_posts() ) {  ?>
<div class="selectstylewrap">
	<select id="location_options" class="select-style js-select" data-placeholder="Select location...">
		<option data-hidden="true" value="">Select location...</option>
		<?php while ( $locations->have_posts() ) : $locations->the_post();  
			$pagelink = get_permalink(); ?>
			<option value="<?php echo $pagelink ?>"><?php echo get_the_title(); ?></option>
		<?php endwhile; wp_reset_postdata(); ?>
	</select>
</div>
<?php } ?>
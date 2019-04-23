<?php
/**
 * Template Name: Storage Locations
 */

get_header(); ?>
<div id="primary" class="full-content-area wrapper storagelocations">
	<main id="main" class="site-main col-left" role="main">
		<?php
		while ( have_posts() ) : the_post();
			if( get_the_content() ) {
				get_template_part( 'template-parts/content', 'page' );
			}
		endwhile; // End of the loop.
		?>

		<div class="location-list clear">
			<?php  
			$args = array(
	            'posts_per_page'   => -1,
	            'post_type'        => 'location',
	            'post_status'      => 'publish'
	        );
	        if( $locations = get_posts($args) ) {
	        	$total_items = count($locations);
	        	$per_columns = ceil($total_items/2);
	        	$items = array_chunk($locations,$per_columns); 
	        	?>
	        	<div class="flexrow">
	        		<?php $j=1; foreach ($items as $objects) { ?>
	        			<div class="flexcol locations">
	        				<ul class="list list-<?php echo $j;?>">
							 <?php foreach ($objects as $obj) { ?>
							 	<li><a href="<?php echo get_permalink($obj->ID); ?>"><?php echo $obj->post_title; ?></a></li>
							 <?php } ?>
							 </ul>
	        			</div>
	        		<?php $j++; } ?>
	        	</div>
	        <?php } ?>
		</div>
	</main><!-- #main -->

	<?php if( $map = get_field('google_map') ) { ?>
	<div class="googlemapiframe col-right"><?php echo $map ?></div>
	<?php } ?>
</div><!-- #primary -->

<?php
get_footer();

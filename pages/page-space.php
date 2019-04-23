<?php
/**
 * Template Name: How Much Space
 */

get_header(); ?>
<div id="primary" class="full-content-area wrapper">
	<main id="main" class="site-main clear" role="main">

		<?php
		while ( have_posts() ) : the_post();
			if( get_the_content() ) {
				get_template_part( 'template-parts/content', 'page' );
			}
		endwhile; // End of the loop.
		?>

		<div class="space-options clear">
		<?php if( $space_options = get_field('spaces') ) { ?>
		
			<div class="flexrow clear">
				<?php foreach ($space_options as $sp) { 
					$sp_image = $sp['image'];
					$sp_title = $sp['title'];
					$sp_title = str_replace('(approx','<span>(approx', $sp_title);
					$sp_title = str_replace('ft.)','ft.)</span>', $sp_title);

					$sp_desc = $sp['description'];
					?>
					<div class="flexcol space-option">
						<div class="inside clear">
							<?php if ($sp_image) { ?>
							<div class="imagewrap">
								<div class="imagediv" style="background-image:url('<?php echo $sp_image['url'] ?>')"></div>
								<img class="featimg" src="<?php echo $sp_image['url'] ?>" alt="<?php echo $sp_image['title'] ?>" />	
							</div>
							<?php } ?>
							<h3 class="name"><?php echo $sp_title ?></h3>
							<div class="description"><?php echo $sp_desc ?></div>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>

		<?php  
		$button_name = get_field('button_name');
		$button_link = get_field('button_link');
		if($button_name && $button_link) { ?>
			<div class="buttondiv text-center clear">
				<a class="btn-large" href="<?php echo $button_link ?>"><?php echo $button_name ?></a>
			</div>
		<?php } ?>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();

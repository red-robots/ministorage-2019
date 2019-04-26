<?php
/**
 * Template Name: Features & Amenities
 */

get_header(); ?>
<div id="primary" class="full-content-area wrapper">
		<main id="main" class="site-main clear page-with-sidebar" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="content-area">
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="widget-area">
					<?php
					$leadin_text = get_field('leadin_text');  
					$cta_button_name = get_field('cta_button_name');  
					$cta_button_link = get_field('cta_button_link');
					?>
					<?php if ($leadin_text) { ?>
					  	<div class="leadintext"><?php echo $leadin_text ?></div>
					<?php } ?>  
					<?php if($cta_button_name && $cta_button_link) {  ?>
						<div class="buttondiv">
							<a class="cta-btn" href="<?php echo $cta_button_link ?>"><?php echo $cta_button_name ?></a>
						</div>
					<?php } ?>
				</div>
			<?php endwhile;  ?>

			<?php get_template_part( 'template-parts/content', 'amenities' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
    
</div>
<?php
get_footer();

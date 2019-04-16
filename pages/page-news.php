<?php
/**
 * Template Name: News
 */

get_header(); ?>
<div id="primary" class="full-content-area wrapper default-template">
		<main id="main" class="site-main clear" role="main">

			<?php
			while ( have_posts() ) : the_post();

				if( get_the_content() ) {
					get_template_part( 'template-parts/content', 'page' );
				}

			endwhile; // End of the loop.
			?>

			<?php //get_template_part( 'template-parts/content', 'news-list' ); ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->
    
</div>
<?php
get_footer();

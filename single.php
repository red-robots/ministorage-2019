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
		<main id="main" class="site-main content-area" role="main">

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_format() );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php
get_footer();

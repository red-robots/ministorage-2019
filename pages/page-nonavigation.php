<?php
/**
 * Template Name: No Navigation Page
 */

get_header(); ?>

	<div id="primary" class="full-content-area wrapper default-template">
		<main id="main" class="site-main clear" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="content-area">
					<div class="entry-content"><?php the_content(); ?></div>
					<?php get_template_part('template-parts/latest-testimonials'); ?>
				</div>

				<div class="widget-area">
					<?php 
					$contact_details = get_field('contact_details'); 
					?>
					<?php if ($contact_details) { ?>
					<div class="contact-details">
						<?php echo $contact_details; ?>
					</div>
					<?php } ?>
				</div>
			</article>
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

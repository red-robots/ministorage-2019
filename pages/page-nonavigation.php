<?php
/**
 * Template Name: No Navigation Page
 */

get_header(); ?>

	<div id="primary" class="full-content-area wrapper default-template nonavpage">
		<main id="main" class="site-main clear" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<header class="entry-header">
				<?php the_title( '<p class="entry-title">', '</p>' ); ?>
			</header><!-- .entry-header -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="content-area-wrap">
					<div class="entry-content"><?php the_content(); ?></div>
					<?php get_template_part('template-parts/latest-testimonials'); ?>
				</div>

				<div class="widget-contact-info sticky_sidebar">
					<div class="sidebar__inner sidebarpad clear">
					<?php 
					$contact_details = get_field('contact_details'); 
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
			<?php endwhile; ?>
			<div id="sticky_stopper" class="sticky-stopper clear"></div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

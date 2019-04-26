<?php
/**
 * Template Name: FAQ's
 *
 */

get_header(); ?>

	<div id="primary" class="full-content-area wrapper default-template">
		<main id="main" class="site-main clear" role="main">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>

			<section class="faqs">
				<?php if(have_rows('faqs')): ?>
					<?php while(have_rows('faqs')): the_row();
						$question=get_sub_field('question');
						$answer=get_sub_field('answer');
						?>
							<div class="faqrow">
								<div class="question">
									<div class="plus-minus-toggle"></div>
									<?php the_sub_field('question'); ?>
								</div>
								<div class="answer"><?php the_sub_field('answer'); ?></div>
							</div><!-- faqrow -->
					<?php endwhile; ?>
				<?php endif; ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
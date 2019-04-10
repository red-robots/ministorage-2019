<?php
/**
 * The template for displaying home page.
 *
 */

get_header(); ?>

<div id="primary" class="full-content-area clear">
	<?php while ( have_posts() ) : the_post(); ?>


	<?php endwhile; ?>

	</main>
</div>

<?php
get_footer();

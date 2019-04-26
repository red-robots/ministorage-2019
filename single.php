<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); 
$post_type = get_post_type(); ?>

	<div id="primary" class="full-content-area wrapper">
		<main id="main" class="site-main content-area" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article>
			<?php endwhile; ?>

		</main><!-- #main -->

		<?php 
		if ($post_type=='post') { 
			get_sidebar('news');
		} else {
			get_sidebar();
		} ?>
	</div><!-- #primary -->

<?php
get_footer();

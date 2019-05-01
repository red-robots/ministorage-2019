<?php
/**
 * Template Name: News
 */

get_header(); ?>
<div id="primary" class="full-content-area clear">
		<main id="main" class="site-main clear" role="main">

			<div class="wrapper">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
				</article>
			<?php endwhile; ?>
			</div>

			<?php get_template_part( 'template-parts/content', 'news-list' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
    
</div>
<?php
get_footer();

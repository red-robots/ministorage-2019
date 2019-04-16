<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header(); ?>
<div id="primary" class="full-content-area wrapper default-template">
	<main id="main" class="site-main clear error-404 not-found" role="main">
		<div class="midwrap">
			<header class="page-header text-center">
				<h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bellaworks' ); ?></h1>
			</header><!-- .page-header -->
			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below.', 'bellaworks' ); ?></p>
				<?php get_template_part('template-parts/content','sitemap'); ?>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();

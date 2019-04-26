<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php  
$args = array(
    'posts_per_page'   => 15,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'post',
    'post_status'      => 'publish'
);
$news = new WP_Query($args);
if ( $news->have_posts() ) { ?>
<aside id="secondary" class="widget-area" role="complementary">
	<div class="widget clear">
		<h2 class="widget-title">Recent Posts</h2>
		<ul class="news">
			<?php while ( $news->have_posts() ) : $news->the_post(); 
			$post_title = strtolower( get_the_title() );
			$post_title = ucwords($post_title);
			?>
			<li><a href="<?php echo get_permalink(); ?>"><?php echo $post_title; ?></a></li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
</aside>
<?php } ?>

<?php
$perpage = 2;
$args = array(
	'posts_per_page'   => $perpage,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'post_type'        => 'post',
	'post_status'      => 'publish'
);
$news = new WP_Query($args);
if ( $news->have_posts() ) {  ?>
<div class="home-latest-news clear"> <?php /* add class .div-custom-scroll to show styled scroller */ ?>
	<div class="inner-pad-autoheight clear">
		<?php while ( $news->have_posts() ) : $news->the_post();  ?>
			<div class="news-item">
				<h3 class="news-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="excerpt"><?php the_excerpt(); ?></div>
				<div class="button"><a class="btnlink" href="<?php echo get_permalink(); ?>">Read More</a></div>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>
<?php } ?>
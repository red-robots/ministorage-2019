<?php  
$args1 = array(
    'posts_per_page'   => 3,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'post',
    'post_status'      => 'publish'
);
$recentPosts = get_posts($args1);
$exclude_recent  = array();
if($recentPosts) {
    foreach($recentPosts as $p) {
        $exclude_recent[] = $p->ID;
    }
}

$perpage = 12;
$paged = ( get_query_var( 'pg' ) ) ? absint( get_query_var( 'pg' ) ) : 1;
$args = array(
    'posts_per_page'   => $perpage,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'post',
    'post_status'      => 'publish',
    'post__not_in'     => $exclude_recent,
    'paged'            => $paged
    );
$news = new WP_Query($args);
if ( $news->have_posts() ) { ?>

    <?php if ($paged<2) { ?>
        <div class="recent-news-posts">
            <div class="wrapper">
                <div class="flexrow clear">
                <?php foreach ($recentPosts as $r) { 
                    $pid = $r->ID; ?>
                    <div class="flexcol recent-post">
                        <div class="inside">
                            <h3 class="post-title"><a href="<?php echo get_permalink($pid)?>"><?php echo get_the_title($pid); ?></a></h3>
                            <div class="post-excerpt">
                                <?php if ($content = get_the_content($pid)) {
                                    $s_content = strip_shortcodes($content);
                                    $s_content = strip_tags($s_content); ?>
                                    <?php echo shortenText($s_content,300); ?>
                                <?php } ?>
                            </div>
                            <div class="post-link"><a href="<?php echo get_permalink($pid)?>">Continue Reading <span>&rarr;</span></a></div>
                        </div>
                    </div>  
                <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="flex-container wrapper news-listing">
        <div class="flexrow clear">
            <?php while ( $news->have_posts() ) : $news->the_post(); ?>
            <div class="flexcol postcol">
                <div class="inside clear">
                    <h3 class="post-title"><a href="<?php echo get_permalink()?>"><?php the_title(); ?></a></h3>
                    <div class="post-excerpt">
                        <?php if ($content = get_the_content()) {
                            $s_content = strip_shortcodes($content);
                            $s_content = strip_tags($s_content); ?>
                            <?php echo shortenText($s_content,200); ?>
                        <?php } ?>
                    </div>
                    <div class="post-link"><a href="<?php echo get_permalink()?>">Continue Reading <span>&rarr;</span></a></div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>

    <?php
        $total_pages = $news->max_num_pages;
        if ($total_pages > 1){ ?>

            <div id="pagination" class="pagination wrapper">
                <?php
                    $pagination = array(
                        'base' => @add_query_arg('pg','%#%'),
                        'format' => '?paged=%#%',
                        'mid-size' => 1,
                        'current' => $paged,
                        'total' => $total_pages,
                        'prev_next' => True,
                        'prev_text' => __( '<span class="fas fa-chevron-left"></span>' ),
                        'next_text' => __( '<span class="fas fa-chevron-right"></span>' )
                    );
                    echo paginate_links($pagination);
                ?>
            </div>
            <?php
        }
    ?>
<?php } ?>
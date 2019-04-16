<?php  
$perpage = 12;
$paged = ( get_query_var( 'pg' ) ) ? absint( get_query_var( 'pg' ) ) : 1;
$args = array(
    'posts_per_page'   => $perpage,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'post',
    'post_status'      => 'publish',
    'paged'            => $paged
    );
$news = new WP_Query($args);
if ( $news->have_posts() ) { ?>
    <div class="flex-container clear news-listing">
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

            <div id="pagination" class="pagination">
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
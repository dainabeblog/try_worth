<?php
/*
Template Name: page-news
*/
?>
<?php get_header(); ?>
    <div class="underPage">        
        <div class="inner">
            <div class="cunderPage_FV">
                <p class="title_en Karla"><span>NEWS</span></p>
                <p class="title_ja"><span>ニュース</span></p>
            </div>
        </div>
        <section id="news_list">
            <div class="inner">
                <div class="newcontainer">
                <?php
                  $posts = new WP_Query(
                    array(
                      'post_type'      => 'post',
                      'category_name' => 'news',
                      'posts_per_page' => 3,
                      'order' => 'DESC',
                    )
                  );
                  if($posts->have_posts()): while($posts->have_posts()): $posts->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>" class="news_Item">
                        <div class="news_sub">
                            <p class="date"><?php the_time('Y.m.d'); ?></p>
                            <p class="category">More</p>
                        </div>
                        <p class="news_title"><?php the_title(); ?></p>
                    </a>
                <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>
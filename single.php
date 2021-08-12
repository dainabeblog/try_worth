<?php get_header(); ?>
<div class="underPage">
    <div class="inner">
        <div class="cunderPage_FV">
            <p class="title_en Karla"><span>NEWS - DETAIL</span></p>
            <p class="title_ja"><span>ニュース</span></p>
        </div>
    </div>
    <section id="news_detail">
        <div class="inner">
            <div class="newcontainer">
                <div class="news_item">
                    <div class="news_sub">
                        <p class="date"><?php the_time('Y.m.d'); ?></p>
                        <p class="category">More</p>
                    </div>
                    <p class="news_title"><?php the_title(); ?></p>
                    <div class="new_contents">
                        <?php the_content(); ?>
                    </div>
                    <div class="contact">
                        <p>お問い合わせはこちら</p>
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="arrowButton arrowButton_blue">問い合わせる<i></a>
                    </div>
                </div>
            </div>
            <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="arrowButton arrowButton_white">News一覧へ戻る<i></a>
        </div>
    </section>
</div>
<?php get_footer(); ?>
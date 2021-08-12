<?php get_header(); ?>
    <!-- ローディング画面 -->
    <div id="loading">
        <div class="spinner"></div>
    </div>
            <section class="top_FV">
                <div class="video_container">
                    <video id="top_vi" src="<?php echo get_template_directory_uri(); ?>/asset/video/top_fv.mov" poster="sample.png" playsinline muted controls="false" autoplay loop style="display: none;">
                    </video>
                </div>
                <div class="c-pagetop is-scroll u-hidden-sm">
                    <a class="c-pagetop__button u-effect-b-shadow-sm js-anchor" href="#"
                        data-anchor-target="#introduction"><span class="is-text Karla">SCROLL</span><span id="scroll_boder" class="is-border"></span></a>
                </div>

                <p class="mv_catch_cp"><span>小さな挑戦ではじまる</span><br><span>自分の物語</span></p>
            </section>
            <section class="COMPANY">
                <div class="content machining">
                    <div class="inner clearfix flexBtwn">
                        <div class="lft flexCtr">
                            <div class="lft_inner">
                                <h3 class="Karla">COMPANY</h3>
                                <h4>会社案内</h4>
                                <p class="campany_txt">トライワース株式会社はドローン事業をはじめ、<br class="pc">映像やメディアの運営をしている会社です。<br class="pc">「挑戦」をコンセプトに様々な事業を展開していきます。
                                </p>
                            </div>
                        </div>
                        <ul class="rgt flexBtwn">
                            <li class="machining_lst">
                                <span class="machining_img ts3"></span>
                                <a class="machining_link flexCtr ts3" href="company/index.html#greeting">
                                    <div class="machining_inner tCtr">
                                        <p class="company_list_title">代表挨拶</p>
                                        <p class="company_list_txt Karla_Italic tCtr">Greeting</p>
                                    </div>
                                </a>
                            </li>
                            <li class="machining_lst">
                                <span class="machining_img ts3"></span>
                                <a class="machining_link flexCtr ts3" href="company/index.html#corporate_philosophy">
                                    <div class="machining_inner tCtr">
                                        <p class="company_list_title">企業理念</p>
                                        <p class="company_list_txt Karla_Italic tCtr">Corporate philosophy</p>
                                    </div>
                                </a>
                            </li>
                            <li class="machining_lst">
                                <span class="machining_img ts3"></span>
                                <a class="machining_link flexCtr ts3" href="company/index.html#overview">
                                    <div class="machining_inner tCtr">
                                        <p class="company_list_title">会社概要</p>
                                        <p class="company_list_txt Karla_Italic tCtr">Overview</p>
                                    </div>
                                </a>
                            </li>
                            <li class="machining_lst">
                                <span class="machining_img ts3"></span>
                                <a class="machining_link flexCtr ts3" href="company/index.html#recruit">
                                    <div class="machining_inner tCtr">
                                        <p class="company_list_title">採用情報</p>
                                        <p class="company_list_txt Karla_Italic tCtr">Recruit</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="bg_img_blue">
                <section id="news" class="NEWS">
                    <article class="homeNews js-animation inView">
                        <div class="homeNews_wrap">
                            <div class="homeNews_content">
                                <div class="homeNews_head">
                                    <h2 class="headlineLv1 js-animation inView">
                                        <span class="is-main Karla"><em>News</em></span>
                                        <span class="is-sub"><em>新着情報</em></span>
                                    </h2>
                                    <div class="buttonFrame">
                                        <a class="Karla" href="news/index.html">More<i></i></a>
                                    </div>
                                </div>
                                <div class="homeNewsList">
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
                                        <a class="homeNewsList_item" href="<?php the_permalink(); ?>">
                                            <div class="homeNewsList_head">
                                                <p class="homeNewsList_date Karla"><?php the_time('Y.m.d'); ?></p>
                                                <div class="homeNewsList_category"><span>お知らせ</span></div>
                                            </div>
                                            <div class="homeNewsList_body"><?php the_title(); ?></div>
                                        </a>
                                    <?php endwhile; endif; wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
                <section id="service">
                    <h2>事業内容</h2>
                    <h3 class="Karla">SERVICE</h3>
                    <div class="inner">
                        <div class="service_item service_item_odd">
                            <div class="service_item_txt">
                                <div class="case">
                                    <p class="Karla">CASE<span class="case_num">01</span></p>
                                </div>
                                <p class="service_item_title">水中調査</p>
                                <p class="service_item_detail">水中調査では水中ドローンを活用し水中の遺跡や遺物を探し出したり、養殖魚の点検、船底の調査などを行っております。<br>また、遺跡や遺物などはレーザーなどを活用し遺跡の大きさを測定したり、水深や水温など調査結果に必要な情報なども提供しております。</p>
                            </div>
                            <div class="service_item_img">
                                <div class="service_item_imgBox" ></div>
                            </div>
                        </div>
                        <div class="service_item service_item_even">
                            <div class="service_item_txt">
                                <div class="case">
                                    <p class="Karla">CASE<span class="case_num">02</span></p>
                                </div>
                                <p class="service_item_title">メディア</p>
                                <p class="service_item_detail">YouTubeの運営や動画コンテンツを作成しています。<br>動画を作ったことによりどれくらいの層にリーチできたか、結果としてどのくらい変わったかなどを可視化できる資料にまとめお渡ししています。</p>
                            </div>
                            <div class="service_item_img">
                                <div class="service_item_imgBox" ></div>
                            </div>
                        </div>
                        <div class="service_item service_item_odd">
                            <div class="service_item_txt">
                                <div class="case">
                                    <p class="Karla">CASE<span class="case_num">03</span></p>
                                </div>
                                <p class="service_item_title">水中撮影</p>
                                <p class="service_item_detail">水中撮影は水泳選手やシンクロなどの競技の下からの撮影やシュノーケリングなどの思い出映像や写真などを撮影します。<br>スポーツ活用の際にはリアルタイムで映像に映るので、改善点などを見つけやすく、撮影後1時間以内に動画にしてお渡しするので、選手にもすぐに改善することが可能です。</p>
                            </div>
                            <div class="service_item_img">
                                <div class="service_item_imgBox" ></div>
                            </div>
                        </div>
                        <div class="service_item service_item_even">
                            <div class="service_item_txt">
                                <div class="case">
                                    <p class="Karla">CASE<span class="case_num">04</span></p>
                                </div>
                                <p class="service_item_title">ドローン空撮</p>
                                <p class="service_item_detail">企業のPVや地方のジオパークなど、さまざまな分野でドローン空撮をしています。<br>またFPVを活用したドローン空撮も行っていますので、幅広いスポーツやPV撮影が可能です。</p>
                            </div>
                            <div class="service_item_img">
                                <div class="service_item_imgBox" ></div>
                            </div>
                        </div>
                        <a class="arrowButton_blue" href="service/index.html">詳しく見る<i></i></a>
                    </div>
                </section>
            </div>
<?php get_footer(); ?>
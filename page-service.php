<?php
/*
Template Name: page-service
*/
?>
<?php get_header(); ?>
            <div class="underPage">
                <div class="inner">
                    <div class="cunderPage_FV">
                        <p class="title_en Karla"><span>SERVICE</span></p>
                        <p class="title_ja"><span>事業一覧</span></p>
                    </div>
                </div>
                <section id="service_list">
                    <div class="inner">
                        <div class="UP_sectionTitle">
                            <p class="sectionTitle_en Karla">ServiceList</p>
                            <p class="sectionTitle_ja">事業一覧</p>
                        </div>
                        <div class="sevicec_ontainer">
                            <div class="service_item">
                                <a href="survey"><span><img src="<?php echo get_template_directory_uri(); ?>/asset/img/servicelist_item1.png" alt=""></span></a>
                            </div>
                            <div class="service_item">
                                <a href="media"><span><img src="<?php echo get_template_directory_uri(); ?>/asset/img/servicelist_item2.png" alt=""></span></a>
                            </div>
                            <div class="service_item">
                                <a href="photography"><span><img src="<?php echo get_template_directory_uri(); ?>/asset/img/servicelist_item3.png" alt=""></span></a>
                            </div>
                            <div class="service_item">
                                <a href="helicopter_shot"><span><img src="<?php echo get_template_directory_uri(); ?>/asset/img/servicelist_item4.png" alt=""></span></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="customer_comments">
                    <div class="inner">
                        <div class="UP_sectionTitle">
                            <p class="sectionTitle_en Karla">Customer Comments</p>
                            <p class="sectionTitle_ja">お客様の声</p>
                        </div>
                         <div class="customerComments_container">
                            <div class="cc_item">
                                <div class="cc_img">
                                    <video playsinline controls poster="<?php echo get_template_directory_uri(); ?>/asset/img/video_th.jpg">
                                        <source src="<?php echo get_template_directory_uri(); ?>/asset/video/customer.mov#t=0.001">
                                    </video>
                                </div>
                                <div class="cc_txt">
                                    <div class="cc_category">
                                        <p>水中調査</p>
                                        <p>水中撮影</p>
                                    </div>
                                    <p class="cc_title">毎回の点検の手間が省けてコスト削減になりました。</p>
                                    <p class="cc_detail">毎回の点検の手間が省けてコスト削減になりました。毎回の点検の手間が省けてコスト削減になりました。</p>
                                </div>
                            </div>
                         </div>
                    </div>
                </section>
            </div>
<?php get_footer(); ?>
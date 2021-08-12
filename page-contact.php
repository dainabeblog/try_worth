<?php
/*
Template Name: page-contacct
*/
?>
<?php get_header(); ?>
    <div class="underPage">
        <div class="inner">
            <div class="cunderPage_FV">
                <p class="title_en Karla"><span>CONTACT</span></p>
                <p class="title_ja"><span>お問い合わせ</span></p>
            </div>
        </div>
        <section id="contact">
            <div class="inner">
                <div class="contact_container">
                    <div class="cotact_item">
                        <p class="cotact_item_title">お名前*</p>
                        <input type="text">
                    </div>
                    <div class="cotact_item">
                        <p class="cotact_item_title">ふりがな</p>
                        <input type="text">
                    </div>
                    <div class="cotact_item">
                        <p class="cotact_item_title">会社名*</p>
                        <input type="text">
                    </div>
                    <div class="cotact_item">
                        <p class="cotact_item_title">電話番号*</p>
                        <input type="tel">
                    </div>
                    <div class="cotact_item">
                        <p class="cotact_item_title">メールアドレス*</p>
                        <input type="email">
                    </div>
                    <div class="cotact_item">
                        <p class="cotact_item_title">お問い合わせ項目*</p>
                        <select name="inquiry_item">
                            <option value="survey">調査</option>
                            <option value="media">メディア</option>
                            <option value="photography">撮影</option>
                            <option value="helicopter_shot">空撮</option>
                            <option value="other">その他</option>
                        </select>
                    </div>
                    <div class="cotact_item">
                        <p class="cotact_item_title detail">お問い合わせ内容</p>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button class="arrowButton arrowButton_blue">送信<i></i></button>
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>
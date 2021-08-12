<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/style.css">
    <title>タイトル</title>

    <?php wp_head(); ?>
</head>

<body>
    <div id="wrapper">
        <header>
            <div id="header" style="top: 0px;">
                <div class="wrap clearfix inner">
                    <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/logo.png" alt=""></a></h1>
                    <div class="toggleMenu">
                        <div id="hamburger" class="menu-trigger" href="">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="header_menu" style="display: none;">
                        <ul class="g_nav clearfix">
                            <li class="pc"><span class="parent"><span>会社案内<sub class="Karla_Italic">COMPANY</sub></span></span>
                                <div class="subMenu" style="display: block;">
                                    <dl>
                                        <dt>会社案内<sub class="Karla_Italic">COMPANY</sub></dt>
                                        <dd>
                                            <ul>
                                                <li><a href="<?php echo home_url(); ?>/company/#greeting">代表挨拶</a></li>
                                                <li><a href="<?php echo home_url(); ?>/company/#corporate_philosophy">企業理念</a></li>
                                                <li><a href="<?php echo home_url(); ?>/company/#overview">会社概要</a></li>
                                                <li><a href="<?php echo home_url(); ?>/company/#recruit">採用情報</a></li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </li>
                            <li class="sp"><a href="<?php echo home_url(); ?>/company/"><span>会社案内<sub class="Karla_Italic">COMPANY</sub></span></a>
                            </li>
                            <li class=""><a href="<?php echo home_url(); ?>/news/"><span>ニュース<sub class="Karla_Italic">NEWS</sub></span></a>
                            </li>
                            <li><a href="<?php echo home_url(); ?>/service/"><span>事業内容<sub class="Karla_Italic">SERVICE</sub></span></a></li>
                            <li><a href="<?php echo home_url(); ?>/contact/"><span>お問い合わせ<sub class="Karla_Italic">CONTACT</sub></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <main>
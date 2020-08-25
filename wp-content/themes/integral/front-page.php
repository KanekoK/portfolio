<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integral</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/import.css">
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/top.css">

</head>
<body>

    <?php get_header(); ?>

    <main>
        <div class="main-content-wrapper">

            <section class="main-visual-block">
                <h1 class="catchcopy">山口を日本のシリコンバレーへ</h1>
            </section>

            <section class="profile-block">
                <div class="career-graph-block">
                    <div class="head">
                        <h2>これまでの経歴と幸福曲線</h2>
                    </div>

                    <div class="graph">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/graph1.png">
                    </div>
                    <ul class="career-contents">
                        <li class="balloon-top">
                            <p class="theme">システム一人時代</p>
                            <div class="content">
                                <p>あらゆるWEB制作案件を経験。</p>
                                <p>システムにおいて、最終責任をとる覚悟が</p>
                                <p>芽生えた瞬間から吹っ切れた。</p>
                            </div>
                        </li>

                        <li class="balloon-top">
                            <p class="theme">CTO時代</p>
                            <div class="content">
                                <p>システム担当者ではなく、経営としての考え方、</p>
                                <p>そして、覚悟のレベルの違い、マネジメントと</p>
                                <p>自分の不甲斐なさを思い知る。</p>
                            </div>
                        </li>
                        <li class="balloon-top">
                            <p class="theme">プロジェクト進行停滞</p>
                            <div class="content">
                                <p>メイン事業となるプラットフォーム開発が</p>
                                <p>なかなか進まない苦悩の時代。</p>
                            </div>
                        </li>
                        <li class="balloon-top">
                            <p class="theme">ガンガン行こうぜ時代</p>
                            <div class="content">
                                <p>インフラ、フロント、サーバーサイド全てを担って開発中。</p>
                                <p>技術のキャッチアップによって、色々な課題や発想が生まれるようになる。</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="detail-link">
                    <a href="#">さらに詳しく</a>
                </div>
            </section>

            <section class="post-block">
                <div class="head">
                    <h2>見出し投稿</h2>
                </div>

                <div class="blog-block">
                    <div class="post-block-head">
                        <h3>ブログ</h3>
                    </div>

                    <ul class="blog-contents-block">
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sample-post.jpg">
                                <div class="title">タイトル</div>
                                <div class="contents">
                                    <div class="top">
                                        <div class="category">JavaScript</div>
                                        <div class="date">2020.4.10</div>
                                    </div>
                                    <div class="content">
                                        テキストテキストテキストテキストテキストテキスト
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sample-post.jpg">
                                <div class="title">タイトル</div>
                                <div class="contents">
                                    <div class="top">
                                        <div class="category">JavaScript</div>
                                        <div class="date">2020.4.10</div>
                                    </div>
                                    <div class="content">
                                        テキストテキストテキストテキストテキストテキスト
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sample-post.jpg">
                                <div class="title">タイトル</div>
                                <div class="contents">
                                    <div class="top">
                                        <div class="category">JavaScript</div>
                                        <div class="date">2020.4.10</div>
                                    </div>
                                    <div class="content">
                                        テキストテキストテキストテキストテキストテキスト
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <div class="detail-link">
                        <a href="#">さらに詳しく</a>
                    </div>
                </div>

                <div class="portfolio-block">
                    <div class="post-block-head">
                        <h3>ポートフォリオ</h3>
                    </div>

                    <ul class="portfolio-contents-block">
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sample-post.jpg">
                                <div class="title">タイトル</div>
                                <div class="contents">
                                    <div class="top">
                                        <div class="category">JavaScript</div>
                                        <div class="date">2020.4.10</div>
                                    </div>
                                    <div class="content">
                                        テキストテキストテキストテキストテキストテキスト
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sample-post.jpg">
                                <div class="title">タイトル</div>
                                <div class="contents">
                                    <div class="top">
                                        <div class="category">JavaScript</div>
                                        <div class="date">2020.4.10</div>
                                    </div>
                                    <div class="content">
                                        テキストテキストテキストテキストテキストテキスト
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sample-post.jpg">
                                <div class="title">タイトル</div>
                                <div class="contents">
                                    <div class="top">
                                        <div class="category">JavaScript</div>
                                        <div class="date">2020.4.10</div>
                                    </div>
                                    <div class="content">
                                        テキストテキストテキストテキストテキストテキスト
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <div class="detail-link">
                        <a href="#">さらに詳しく</a>
                    </div>
                </div>
            </section>

            <section class="contact-block">
                <div class="head">
                    <h2>お問い合わせ</h2>
                </div>
                <div class="contact">
                    <p>TwitterのDMからご連絡ください</p>
                    <div class="social-link">
                        <a href="#">Twitter</a>
                    </div>
                </div>
            </section>

        </div>

    </main>


    <?php get_footer(); ?>
    <?php wp_footer(); ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/stickystack.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>

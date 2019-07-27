<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: //ogp.me/ns# fb: //ogp.me/ns/fb# article: //ogp.me/ns/article#">
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon -->
    <link rel="shortcut icon" href="http://seno1231.work/wp/wp-content/themes/myportfolio/favicon.ico">
    <!-- ogp -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@seno_web" />
    <meta property="og:title" content="seno | corder">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://seno1231.work">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/seno1231workogp.png">
    <meta property="og:site_name" content="seno portfolio" />
    <meta property="og:description" content="フリーのコーダー・webデザイナーsenoのポートフォリオ" />
    <!-- link -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link href="//fonts.googleapis.com/css?family=Noto+Sans:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <!-- script -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>seno | corder</title>
  </head>

  <body>
    <div id="fullpage">
        <div id="main-visual" class="w100 section">
            <div class="main-text">
                <h1>
                    <span>SENO<br>CORDER</span>
                    <!-- <span id="typed"></span><span class="typed-cursor">|</span> -->
                </h1>
                <div class="code-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/code.svg" alt="code-icon">
                </div>
            </div> 
        </div>
        <div class="content-w section">
        <section id="works" class="content">
            <h2 class="section-t">WORKS</h2>
            <div class="works-container">
                <div class="product">
                    <a href="https://furuzyo.com"><img src="<?php echo get_template_directory_uri(); ?>/img/furuzyoTop.png" alt="product-pic"></a>
                    <p class="product-t">古着女子LP</p>
                </div>
                <div class="product">
                    <a href="http://corp.crie-re.co.jp/"><img src="<?php echo get_template_directory_uri(); ?>/img/crieTop.png" alt="product-pic"></a>
                    <p class="product-t">介護業界企業様コーポレートサイト<br>全ページ<br>※株式会社job live様案件</p>
                </div>
                <div class="product">
                    <a href="https://www.healthy-monster.com/fitness.html"><img src="<?php echo get_template_directory_uri(); ?>/img/hmfTop.png" alt="product-pic"></a>
                    <p class="product-t">HEALTHY MONSTER FITNESS<br>TOPページ<br>※株式会社second reef様案件</p>
                </div>
            </div>
        </section>
        </div>
        <section id="me" class="w100 section">
            <h2 id="me-t" class="section-t">ME</h2>
            <div class="me-content">
                <div class="balloon2">
                    <p>コーディングを中心に行っているsenoと申します。webデザインの奥深さに惹かれ、現在はwebデザインを学んでいます。</p>
                </div>
                <div class="profile">
                    <img class="mep" src="<?php echo get_template_directory_uri(); ?>/img/mefinal.png" alt="">
                    <div class="detail">
                        <p class="bold">瀬之口秀磨 (24)</p>
                        <p>コーダー / webデザイナー / ライター</p>
                        <hr noshade size="1.8" color="black">
                        <p class="bold">Shuma Senokuchi (24)</p>
                        <p>corder / web designer / writer</p>
                    </div>
                </div>
                <div class="skill">
                    <div class="corder skill-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/code.svg" alt="">
                        <p>コーディング<br>(レスポンシブ対応・wordpress可)</p>
                    </div>
                    <div class="designer skill-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/paintbrush.svg" alt="">
                        <p>webデザイン</p>
                    </div>
                    <div class="writer skill-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pencil.svg" alt="">
                        <p>ライティング</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="section">
            <h2 id="contact-t" class="section-t">CONTACT</h2>
            <div class="circle">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mail-icon.svg" alt="">
            </div>
            <div class="contact-wrapper">
                <?php echo do_shortcode('[contact-form-7 id="12" title="お問い合わせ"]' ); ?>
            </div>
            <div class="footer">
                <p class="copy-light">©Copyright seno all right reserved.</p>
            </div>
        </section>
    </div> 
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.extensions.min.js"></script> -->
    <!-- <script type="text/javascript" src="?php echo get_template_directory_uri(); ?>/js/typed.js"></script>
    <script>
        $(function(){
                $("#typed").typed({
                    strings: ["Hello!", "こんにちは!", "안녕하세요!", "您好!"],
                    typeSpeed: 150,
                    startDelay: 20,
                    showCursor: false,
                    shuffle: true,
                    loop:true
                });
            });
    </script> -->
    <!-- <script>
        $(document).ready(function() {
        $('#fullpage').fullpage();
        });
    </script> -->
</body>
</html>


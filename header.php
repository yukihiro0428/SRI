<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SRI</title>
		<?php wp_head(); ?>
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="head">
      <div class="head-contents">
        <p class="head-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/head-logo.png" alt="LOGO" /></a>
        </p>
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav class="globalMenuSp">
          <ul class="head-items">
            <li class="head-item"><a href="">SRIの強み</a></li>
            <li class="head-item"><a href="">ソリューション</a></li>
            <li class="head-item"><a href="">サービス</a></li>
            <li class="head-item"><a href="">導入事例</a></li>
            <li class="head-item"><a href="">セミナー・イベント</a></li>
            <li class="head-item"><a href="">お役立ち情報</a></li>
            <li class="head-item"><a href="">資料請求ダウンロード</a></li>
            <li class="head-item"><a href="">お知らせ</a></li>
            <li class="head-item"><a href="">会社概要</a></li>
          </ul>
        </nav>
        <div class="head-right">
          <?php get_search_form(); ?>
          <div class="head-right-select">
            <a href="" class="customer">ご利用中のお客様</a>
            <a href="" class="contact">お問い合わせ</a>
          </div>
        </div>
    </header>

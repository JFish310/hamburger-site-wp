<!DOCTYPE html>
<!-- <html lang="ja"> -->
<html lang="<?php language_attributes(); ?>"> <!-- 言語設定を自動的に出力します-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cssの読み込み -->
    <link rel="stylesheet" href="css/ress.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Hamburger</title>
    <!-- Googleフォントの読み込み -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- M+ FONTSの読み込み -->
    <link rel="stylesheet" href="http://mplus-webfonts.sourceforge.jp/mplus_webfonts.css">
    <!-- Font Awesome の読み込み -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- jQueryの読み込み -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php wp_head(); ?> <!-- WordPressのテーマに含める関数。admin_barや必要となるソースの出力などを行う。 -->
</head>
<body <?php body_class(); ?>><!-- ページによって装飾を変えたい時などテンプレートに自分でクラスを付けなくてもWordPressが付けてくれるので便利 -->
    <div class="l-container">
        <header class="l-header">
            <button type="button" class="c-button--menu c-button--js">Menu</button>
            <h1>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </h1>
            <?php get_search_form(); ?><!-- searchform.php 検索フォーム呼び出し -->
        </header><!-- /.l-header -->
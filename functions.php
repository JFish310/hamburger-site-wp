<?php
    // テーマサポート
    add_theme_support( 'menus' );       //<!-- テーマにメニューという項目を機能をサポートすることを許可するという記述 -->
    add_theme_support( 'title-tag' );   // タイトルの出力

    // タイトル出力
    function hamburgersite_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
        return $title;
    }
    add_filter( 'pre_get_document_title', 'hamburgersite_title' );

    // スタイルシートを読み込むタグを出力
    function hamburgersite_script() {
        // M+ FONTSの読み込み
        // <link rel="stylesheet" href="http://mplus-webfonts.sourceforge.jp/mplus_webfonts.css">//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap
        // wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
        wp_enqueue_style( 'mplus1p', '//mplus-webfonts.sourceforge.jp/mplus_webfonts.css', array() );
        // Font Awesome の読み込み
        wp_enqueue_style( 'font-awesome-5', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1' );
        // Googleフォントの読み込み css2?family=Roboto:wght@700&display=swap
        // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700|display=swap', false, $version );
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700|display=swap', false );
        // ResetCSS の読み込み
        wp_enqueue_style( 'ress', get_theme_file_uri( '/css/ress.css' ), array(), '3.0.1' );
        // css の読み込み   <link rel="stylesheet" href="css/style.css">
        wp_enqueue_style( 'hamburger-site', get_theme_file_uri( '/css/style.css' ), array(), '1.0.0' );
        wp_enqueue_style( 'style', get_theme_file_uri( '/style.css' ), array(), '1.0.0' );
        // jQueryの読み込み
            wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' , "", "3.6.0", true );
            wp_enqueue_script( 'samplejs', get_theme_file_uri( '/js/menu.js' ), array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'hamburgersite_script' );

// wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');
// wp_enqueue_style( 'font-awesome-5','//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1' );

// wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0' );

// wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );

// wp_enqueue_style( 'font-awesome', get_theme_file_uri( '/css/font-awesome.css' ), array(), '4.7.0' );
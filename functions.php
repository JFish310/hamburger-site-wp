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

	// ウィジェット用
	// function hamburgersite_widgets_init() {
	// 	register_sidebar (
	// 		array(
	// 			'name'          => 'カテゴリーウィジェット',
	// 			'id'            => 'category_widget',
	// 			'description'   => 'カテゴリー用ウィジェットです',
	// 			'before_widget' => '<div id="%1$s" class="widget %2$s">',
	// 			'after_widget'  => '</div>',
	// 			'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
	// 			'after_title'   => "</h2>\n",
	// 		)
	// 	);
	// }
	// add_action( 'widgets_init', 'hamburgersite_widgets_init' );

	// カスタムメニュー
	function register_my_menus() { 
		register_nav_menus( array( // 複数のナビゲーションメニューを登録する関数
			//'「メニューの位置」の識別子' => 'メニューの説明の文字列',
			'category_nav' => 'カテゴリーナビゲーション',
			//'menu_nav' => 'メニューナビゲーション',
			'footer_nav' => 'フッターナビゲーション',
		) );
	}
	add_action( 'after_setup_theme', 'register_my_menus' );

	// ページネーション
	function custom_wp_pagenavi( $html ) {
		$out = '';
		$out = str_replace( "<div class='wp-pagenavi' role='navigation'>", "", $html );// 引数:$検索文字列 , $置換後文字列 , $検索対象文字列 [, int &$count ] )
		$out = str_replace( "<a", "<li class='p-pagination__list__item'><a", $out );
		$out = str_replace( "</a>", "</a></li>", $out );
		$out = str_replace( "<span class='pages'>", "<li class='p-pagination__list__item'><span class='pages'>page ", $out );
		$out = str_replace( "<span aria-current='page'", "<li class='p-pagination__list__item'><span aria-current='page'", $out );
		$out = str_replace( "<span class='extend'>", "<li class='p-pagination__list__item'><span class='extend'>", $out );
		$out = str_replace( "</span>", "</span></li>", $out );
		$out = str_replace( "</div>", "", $out );
		return '<nav class="p-pagination" role="navigation"><ul class="p-pagination__list">' . $out . '</ul></nav>';
	}
	add_filter( 'wp_pagenavi', 'custom_wp_pagenavi' );

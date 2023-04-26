<?php
// add_action('init', function () {
	// テーマサポート
	// add_theme_support( 'menus' );			// テーマにメニューという項目を機能をサポートすることを許可するという記述
	register_nav_menus( [ // 複数のナビゲーションメニューを登録する関数
		//'「メニューの位置」の識別子' => 'メニューの説明の文字列',
		'category_nav' => 'カテゴリーナビゲーション',
		'footer_nav' => 'フッターナビゲーション',
	]);
	add_theme_support( 'title-tag' );		// タイトルの出力
	add_theme_support( 'post-thumbnails' );	// アイキャッチ画像を有効にする
// });

	// // カスタムメニュー
	// function register_my_menus() { 
	// 	register_nav_menus( [ // 複数のナビゲーションメニューを登録する関数
	// 		//'「メニューの位置」の識別子' => 'メニューの説明の文字列',
	// 		'category_nav' => 'カテゴリーナビゲーション',
	// 		'footer_nav' => 'フッターナビゲーション',
	// 	]);
	// }
	// add_action( 'after_setup_theme', 'register_my_menus' );

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
		wp_enqueue_style( 'mplus1p', '//mplus-webfonts.sourceforge.jp/mplus_webfonts.css', array() );
		// Font Awesome の読み込み
		wp_enqueue_style( 'font-awesome-5', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1' );
		// Googleフォントの読み込み css2?family=Roboto:wght@700&display=swap
		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700|display=swap', false );
		// ResetCSS の読み込み
		wp_enqueue_style( 'ress', get_theme_file_uri( '/css/ress.css' ), array(), '3.0.1' );
		// css の読み込み   <link rel="stylesheet" href="css/style.css">
		wp_enqueue_style( 'hamburger-site', get_theme_file_uri( '/css/style.css' ), array(), '1.0.0' );
		wp_enqueue_style( 'style', get_theme_file_uri( '/style.css' ), array(), '1.0.0' );
		// jQueryの読み込み
		wp_enqueue_script( 'samplejs', get_theme_file_uri( '/js/menu.js' ), array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'hamburgersite_script' );

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

	//デフォルトのCSSを止める
	add_filter( 'use_default_gallery_style', '__return_false' );

	// 詳しく見る押下時のリンク先を先頭に変更させる
	function custom_content_more_link( $output ) {
	$output = preg_replace('/#more-[\d]+/i', '', $output );	// 例)#more-55のようなリンク先になるので、これを消去。[\d]は数字の事。「/.../i」は大文字・小文字無視モード
	return $output;
	}
	add_filter( 'the_content_more_link', 'custom_content_more_link' );

	// 投稿の表示順を変更
	function sortpost( $query ) {
		// is_admin() -> ダッシュボードまたは管理画面の表示中かどうかをチェック //
		// アクセス中の URL が管理画面に含まれるなら true を、フロントエンドのページなら false を返す真偽値型の関数 //
		// is_main_query() -> 「メイン」クエリー（固定ページ、投稿、またはアーカイブ）とカスタム/サブクエリーを区別するために使われる //
		// 管理画面かつサブクエリーだった場合はリターン
		if( is_admin() || !$query -> is_main_query()) {
			return;
		}
		// ASC:昇順, DESC:降順
		$query -> set( 'order', 'ASC' );
		// orderbyで何順に並べ変えるか指定
		$query -> set( 'orderby', 'date' );
	}
	add_action( 'pre_get_posts', 'sortpost' );

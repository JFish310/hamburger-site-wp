<!-- <article class="l-sidebar"><article>タグは、内容が単体で完結するセクションであることを示す際に使用 -->
<aside class="l-sidebar"><!-- <aside>タグは、メインコンテンツとは直接関係のない、複数ページ共通のコンテンツ用の要素 -->
	<button type="button" class="c-button--close c-button--js"></button><!--このbuttonタグはnavタグ内に入れたほうがいいのか？？？-->
	<nav class="p-gnavi">
		<h2>Menu</h2>
		<?php
			echo str_replace(
				'sub-menu', 'p-gnavi__submenu',// 引数:$検索文字列 , $置換後文字列 , $検索対象文字列 [, int &$count ] )
				wp_nav_menu( array(
					'menu'			=> 'category_nav',			// メニューを指定
					'menu_class'	=> 'p-gnavi__main-menu',
					'container'		=> false,					// ulを囲う要素を指定。div or nav。なしの場合には false
					'echo'			=> false,					//（真偽値） （オプション） メニューをHTML出力する(true)か、PHPの値で返す(false)か 初期値： true
					)
				)
			);
		?>
	</nav>
</aside><!-- /.l-sidebar -->

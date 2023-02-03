<!-- <article class="l-sidebar"><article>タグは、内容が単体で完結するセクションであることを示す際に使用 -->
<aside class="l-sidebar"><!-- <aside>タグは、メインコンテンツとは直接関係のない、複数ページ共通のコンテンツ用の要素 -->


	<button type="button" class="c-button--close c-button--js"></button><!--このbuttonタグはnavタグ内に入れたほうがいいのか？？？-->
	<nav class="p-gnavi">
		<h2>Menu</h2>
		<?php
		$defaults = array(
			'menu' => 'category_nav',	//メニューを指定
			'menu_class' => 'p-gnavi__main-menu'
			

		);
		wp_nav_menu( $defaults );
		?>



<!--
			<li class="p-gnavi__main-menu__list"><h3>サイド</h3>
				<ul class="p-gnavi__sub-menu">
					<li class="p-gnavi__sub-menu__list"><a href="#">ポテト</a></li>
					<li class="p-gnavi__sub-menu__list"><a href="#">サラダ</a></li>
					<li class="p-gnavi__sub-menu__list"><a href="#">ナゲット</a></li>
					<li class="p-gnavi__sub-menu__list"><a href="#">コーン</a></li>
				</ul>
			</li>
			<li class="p-gnavi__main-menu__list"><h3>ドリンク</h3>
				<ul class="p-gnavi__sub-menu">
					<li class="p-gnavi__sub-menu__list"><a href="#">コーラ</a></li>
					<li class="p-gnavi__sub-menu__list"><a href="#">ファンタ</a></li>
					<li class="p-gnavi__sub-menu__list"><a href="#">オレンジ</a></li>
					<li class="p-gnavi__sub-menu__list"><a href="#">アップル</a></li>
					<li class="p-gnavi__sub-menu__list"><a href="#">紅茶（Ice/Hot）</a></li>
					<li class="p-gnavi__sub-menu__list"><a href="#">コーヒー（Ice/Hot）</a></li>
				</ul>
		</ul>
			-->
	</nav>
</aside><!-- /.l-sidebar -->
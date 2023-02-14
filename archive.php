<?php get_header(); ?>  <!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
		<main class="p-main">
			<article id="top" class="p-first-view--archive">
				<h1>Menu:</h1>
				<p>チーズバーガー</p>
			</article><!-- /.p-main__first-view--archive -->
			<section class="p-archive">
				<dl class="c-dl--level3">
					<dt><h2 class="">小見出しが入ります</h2></dt>
					<dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<!--テキストが入ります。テキストが入ります。--></dd>
				</dl>
				<ul class="c-layout-list--row">
					<li class="c-layout-list--row__item">
						<figure class="p-card">
							<img src="./img/archive/card.jpg" alt="チーズバーガーの写真">
							<figcaption class="p-card__caption">
								<h3>チーズバーガー</h3>
								<dl class="c-dl--level4"> 
									<dt><h4>小見出しが入ります</h4></dt>
									<dd>
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが<!--入ります。-->
									</dd>
								</dl>
								<button class="c-button__more"><a href="#">詳しく見る</a></button>
							</figcaption>
						</figure>
					</li>
					<li class="c-layout-list--row__item">
						<figure class="p-card">
							<img src="./img/archive/card.jpg" alt="image01の写真">
							<figcaption class="p-card__caption">
								<h3>ダブルチーズバーガー</h3>
								<dl class="c-dl--level4"> 
									<dt><h4>小見出しが入ります</h4></dt>
									<dd>
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
									</dd>
								</dl>
								<button class="c-button__more"><a href="#">詳しく見る</a></button>
							</figcaption>
						</figure>
					</li>
					<li class="c-layout-list--row__item">
						<figure class="p-card">
							<img src="./img/archive/card.jpg" alt="image01の写真">
							<figcaption class="p-card__caption">
								<h3>スペシャルチーズバーガー</h3>
								<dl class="c-dl--level4"> 
									<dt><h4>小見出しが入ります</h4></dt>
									<dd>
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
									</dd>
								</dl>
								<button class="c-button__more"><a href="#">詳しく見る</a></button>
							</figcaption>
						</figure>
					</li>
				</ul><!-- </.c-layout-list--row> -->
			</section><!-- </.p-archive> -->

			<?php wp_pagenavi(); ?><!-- ページネーション -->

		</main><!-- /.p-main -->
		<?php get_sidebar(); ?> <!-- siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
	</div><!-- /.l-container -->
<?php get_footer(); ?>  <!-- footer.phpを読み込むテンプレートタグ（インクルードタグ） -->

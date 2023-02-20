<?php get_header(); ?>  <!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
<main class="p-main">
	<article id="top" class="p-first-view--archive">
		<h1>Menu:
			<p><?php wp_title(''); ?></p>	<!-- カテゴリー名取得 -->
		</h1>
	</article><!-- /.p-main__first-view--archive -->
	<section class="p-archive">
		<dl class="c-dl--level3">
			<dt><h2 class="">小見出しが入ります</h2></dt>
			<dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<!--テキストが入ります。テキストが入ります。--></dd>
		</dl>
		<ul class="c-layout-list--row">
		<!-- ループ処理で、投稿記事の一覧を表示 -->
		<?php
		if( have_posts() ) :		// 記事の有無を判断
			while( have_posts() ) :	// have_posts()は、have_posts() == trueの意味
				the_post(); ?>		<!-- これが入ることで次の記事データへ移動する -->
			<li class="c-layout-list--row__item">
				<figure class="p-card">
					<?php the_post_thumbnail(); ?><!-- アイキャッチ画像表示 -->
					<figcaption class="p-card__caption">
						<?php the_title( '<h3>', '</h3>' ); ?>
						<dl class="c-dl--level4"> 
							<dt><!-- <dt><h4>小見出しが入ります</h4></dt> -->
								<?php get_h_index(); //ここで<h>を出力する?>
							</dt>
							<dd>
								<?php echo mb_substr( get_p_index(), 0, 10, 'UTF-8').'...'; ?>
								<?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
							</dd>
						</dl>
						<button class="c-button__more">
							<a href="<?php the_permalink(); ?>">詳しく見る</a>
						</button>
					</figcaption>
				</figure>
			</li>
		<?php endwhile; else : ?>// カテゴリーがない場合
			<p>記事がありません。</p>
		<?php endif; ?>
		</ul>
		<?php the_content('詳しく見る'); ?>
		<p><?php the_content("全文を読む"); ?></p>
		
<?php get_the_content(); ?>
<style> /*
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
			</section></.p-archive>
*/</style>
			<?php wp_pagenavi(); ?><!-- ページネーション -->
			</section>
		</main><!-- /.p-main -->
		<?php get_sidebar(); ?> <!-- siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
	</div><!-- /.l-container -->
<?php get_footer(); ?>  <!-- footer.phpを読み込むテンプレートタグ（インクルードタグ） -->

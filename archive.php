<?php get_header(); ?>  <!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
		<main class="p-main">
			<article id="top" class="p-first-view--archive">
				<h1>Menu:
					<?php the_archive_title('<span>', '</span>'); ?>	<!-- カテゴリー名取得 -->
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
								<?php the_title( '<h1>', '</h1>' ); ?><!-- 投稿・固定ページのタイトルを出力する -->
								<?php
								if( has_excerpt() ){	// 投稿に手動入力された抜粋があるか否か
									the_excerpt();
									echo '<a class="c-button__more" href="';
									the_permalink();
									echo '">詳しく見る</a>';
								} else {
									echo get_the_content( '詳しく見る' );
								} ?>
								</figcaption>
						</figure>
					</li>
				<?php endwhile; else : ?><!-- カテゴリーがない場合 -->
					<p>記事がありません。</p>
				<?php endif; ?>
				</ul>
			<?php wp_pagenavi(); ?><!-- ページネーション -->
			</section>
		</main><!-- /.p-main -->
		<?php get_sidebar(); ?> <!-- siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
	</div><!-- /.l-container -->
<?php get_footer(); ?>  <!-- footer.phpを読み込むテンプレートタグ（インクルードタグ） -->

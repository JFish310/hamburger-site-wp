<?php get_header(); ?>  <!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
		<main class="p-main">
			<article id="top" class="p-single">
			<?php
				if( have_posts() ) :		// 記事の有無を判断
					while( have_posts() ) :	// have_posts()は、have_posts() == trueの意味
						the_post(); ?>		<!-- これが入ることで次の記事データへ移動する -->
						<?php
							// アイキャッチ画像を取得
							$backgroundimage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							$noimage = get_template_directory_uri() . '/img/single/no-image.jpg';
						?>
						<?php if ($backgroundimage) : ?>
							<?php echo the_title( '<h1 class="c-title--h1" style="background-image: url(' . $backgroundimage . ');">', '</h1>' ); ?>
						<?php else : ?>
							<?php echo the_title( '<h1 class="c-title--h1" style="background-image: url(' . $noimage . ');">', '</h1>' ); ?>
						<?php endif; ?>
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
				<?php endwhile; else : ?>	<!-- 投稿記事がない場合 -->
					<p>記事がありません。</p>
				<?php endif; ?>
			</article><!-- </.p-single> -->
		</main><!-- /.p-main -->
		<!-- <article class="l-sidebar"><article>タグは、内容が単体で完結するセクションであることを示す際に使用 -->
		<?php get_sidebar(); ?> <!-- siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
	</div><!-- /.l-container -->
<?php get_footer(); ?>  <!-- footer.phpを読み込むテンプレートタグ（インクルードタグ） -->

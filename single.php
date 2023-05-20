<?php get_header(); ?>  <!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
		<main class="p-main">
			<article id="top" class="p-first-view--single">
				<?php echo the_title('<h1>', '</h1>'); ?>
			</article><!-- /.p-main__first-view--single -->
			<section class="p-single">
			<?php
				if( have_posts() ) :		// 記事の有無を判断
					while( have_posts() ) :	// have_posts()は、have_posts() == trueの意味
						the_post(); ?>		<!-- これが入ることで次の記事データへ移動する -->
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
				<?php endwhile; else : ?>	<!-- 投稿記事がない場合 -->
					<p>記事がありません。</p>
				<?php endif; ?>
			</section><!-- </.p-single> -->
		</main><!-- /.p-main -->
		<!-- <article class="l-sidebar"><article>タグは、内容が単体で完結するセクションであることを示す際に使用 -->
		<?php get_sidebar(); ?> <!-- siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
	</div><!-- /.l-container -->
<?php get_footer(); ?>  <!-- footer.phpを読み込むテンプレートタグ（インクルードタグ） -->

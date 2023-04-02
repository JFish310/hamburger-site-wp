<?php get_header(); ?>  <!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
		<main class="p-main">
			<article id="top" class="p-first-view">
				<h2>ダミーサイト</h2>
			</article><!-- /.p-main__first-view -->
			<section class="p-place">
				<ul>
					<li class="p-place__take-out">
						<h2>Take Out</h2>
						<div class="l-container__box">
							<?php
							$args = array(
								'post__in' => array( 53, 23 ) );
							// 条件を渡して記事を取得
							$custom_posts = get_posts($args); ?>
							<?php
							foreach ( $custom_posts as $post ): setup_postdata($post); ?>
								<a href="<?php the_permalink(); ?>">
									<dl class="c-dl--level1 c-box">
										<dt><?php the_title('<h3 class="c-title--h3">','</h3>'); ?></dt>
										<!-- <dt class="c-box__title">小見出しが入ります</dt> -->
										<dd>
											<!-- pタグの出力 -->
											<?php
											if ( mb_strlen( $post->post_content, 'UTF-8' ) > 50 ) {
											$content = mb_substr( strip_tags( $post->post_content, '<p>' ), 0, 50, 'UTF-8' );
											echo $content . '…';
											} else {
											echo strip_tags( $post->post_content, '<p>' );
											}
											?>
										</dd>
									</dl>
								</a>
							<?php endforeach;
							// クエリのリセット
							wp_reset_query();
							?>
						</div>
					</li>
					<li class="p-place__eat-in">
						<h2>Eat In</h2>
						<div class="l-container__box">
						<?php
							$args = array(
								'post__in' => array( 57, 82 ) );
							// 条件を渡して記事を取得
							$custom_posts = get_posts($args); ?>
							<?php
							foreach ( $custom_posts as $post ): setup_postdata($post); ?>
								<a href="<?php the_permalink(); ?>">
									<dl class="c-dl--level1 c-box">
										<dt><?php the_title('<h3 class="c-title--h3">','</h3>'); ?></dt>
										<!-- <dt class="c-box__title">小見出しが入ります</dt> -->
										<dd>
											<!-- pタグの出力 -->
											<?php
											if ( mb_strlen( $post->post_content, 'UTF-8' ) > 50 ) {
											$content = mb_substr( strip_tags( $post->post_content, '<p>' ), 0, 50, 'UTF-8' );
											echo $content . '…';
											} else {
											echo strip_tags( $post->post_content, '<p>' );
											}
											?>
										</dd>
									</dl>
								</a>
							<?php endforeach;
							// クエリのリセット
							wp_reset_query();
							?>
						</div>
					</li>
				</ul>
			</section>
			<section class="p-access">
				<div class="c-iframe-wrapper">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.747798533231!2d139.74324421452795!3d35.65858483882246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1678943804743!5m2!1sja!2sjp"
						style="border:0;"
						allowfullscreen=""
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade">
					</iframe>
				</div>
				<dl class="c-dl--level2">
					<dt>
						<h2 class="">当店へのアクセス</h2>
					</dt>
					<dd>
						<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
					</dd>
				</dl>
			</section>
		</main><!-- /.p-main -->
		<?php get_sidebar(); ?> <!-- siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
	</div><!-- /.l-container -->
<?php get_footer(); ?>  <!-- footer.phpを読み込むテンプレートタグ（インクルードタグ） -->

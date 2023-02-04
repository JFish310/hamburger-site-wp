<?php get_header(); ?>  <!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
		<main class="p-main">
			<article id="top" class="p-first-view--single">
				<h1>h1 チーズバーガー</h1>
			</article><!-- /.p-main__first-view--single -->
			<section class="p-single">
				<dl class="c-dl--level5">
					<dt><h2 class="">見出しh2</h2></dt>
					<dd>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタ<!--グテキスト。--></dd>
				</dl>
				<h3>見出しh3</h3>
				<h4>見出しh4</h4>
				<h5>見出しh5</h5>
				<h6>見出しh6</h6>
				<blockquote class="c-blockquote" cite="#"><!-- 引用元の -->
					<p class="c-blockquote__block">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
					<p class="c-blockquote__url">出典元：<cite><a href="引用元url">○○○○○○○○○○○○</a></cite></p>
				</blockquote>
				<img class="p-single__image--large" src="./img/single/image--large.jpg" alt="">
				<figure class="p-card--single">
					<img src="./img/single/image--medium.jpg" alt="">
					<figcaption class="p-card--single__caption--image-left">
						<p>テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入<!--ります--></p>
					</figcaption>
				</figure>
				<figure class="p-card--single">
					<figcaption class="p-card--single__caption--image-right">
						<p>テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入<!--ります--></p>
					</figcaption>
					<img src="./img/single/image--medium.jpg" alt="">
				</figure>
				<img class="p-single__image--small" src="./img/single/image--medium.jpg" alt="">
				<div class="p-single__images">
					<img src="./img/single/image--medium.jpg" alt="">
					<img src="./img/single/image--medium.jpg" alt="">
					<img src="./img/single/image--medium.jpg" alt="">
					<img src="./img/single/image--medium.jpg" alt="">
					<img src="./img/single/image--medium.jpg" alt="">
					<img src="./img/single/image--medium.jpg" alt="">
					<img src="./img/single/image--medium.jpg" alt="">
					<img src="./img/single/image--medium.jpg" alt="">
					<img src="./img/single/image--medium.jpg" alt="">
				</div>
				<div class="p-single__list">
					<ol>
						<li>リストリストリスト</li>
						<li>リストリストリスト
							<ol>
								<li>リストリストリスト</li>
								<li>リストリストリスト</li>
							</ol>
						</li>
					</ol>
					<ol>
						<li>リストリストリスト</li>
						<li>リストリストリスト</li>
					</ol>
				</div>
				<div class="p-single__list">
					<ul>
						<li>リストリストリスト</li>
						<li>リストリストリスト
							<ul>
								<li>リスト2リスト2リスト2</li>
								<li>リスト2リスト2リスト2</li>
							</ul>
						</li>
					</ul>
					<ul>
						<li>リストリストリスト</li>
						<li>リストリストリスト</li>
					</ul>
				</div>
				<pre>
<code>&lt;html&gt;
	&lt;head&gt;
	&lt;/head&gt;
	&lt;body&gt;
	&lt;/body&gt;
&lt;/html&gt;</code>
				</pre>

				<table>
					<tr>
						<td>テーブル</td>
						<td>テーブル</td>
					</tr>
					<tr>
						<td>テーブル</td>
						<td>テーブル</td>
					</tr>
					<tr>
						<td>テーブル</td>
						<td>テーブル</td>
					</tr>
					<tr>
						<td>テーブル</td>
						<td>テーブル</td>
					</tr>
				</table>
				<button>ボタン</button>
				<p class="p-single__bold"><b>boldboldboldboldboldboldbold</b></p>
			</section><!-- </.p-single> -->
		</main><!-- /.p-main -->
		<!-- <article class="l-sidebar"><article>タグは、内容が単体で完結するセクションであることを示す際に使用 -->
		<?php get_sidebar(); ?> <!-- siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
	</div><!-- /.l-container -->
<?php get_footer(); ?>  <!-- footer.phpを読み込むテンプレートタグ（インクルードタグ） -->

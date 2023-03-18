# RaiseTech WP副業コース  
## 最終課題  ハンバーガーサイト  WordPress化  

### 履歴  
2021年  
	8/30    環境構築スタート(phpのインストール、Local・WordPressの更新など）  
	9/8     構成考察  
	9/9     コーディングスタート  
	9/22    休止  
	ここまで 累計　h m  

|  2022年  |  

|  開始-終了  |  作業内容  |  時間  |
| ---- | ---- | ---- |
|  12/14(再開)  |  #1 タブ対応  |  40m  |

|  2023年  |  

|  開始-終了  |  作業内容  |  時間  |
| ---- | ---- | ---- |
|  1/16  |  #2 gulp対応, Browser-sync  |  3h25m  |
|  1/21 - 2/4  |  #3 Menu  |  10h10m  |
|  1/24 - 1/28  |  #4 ショップ情報（固定ページ）  |  1h50m  |
|  1/28 - 1/30  |  #6 バーガーメニュー作成  |  1h20m  |
|  1/31  |  #7 サイドメニュー作成  |  10m  |
|  1/31  |  #8 ドリンクメニュー作成  |  10m  |
|  2/4  |  #9 footer対応  |  1h15m  |
|  2/5 - 2/14  |  #10 ページネーション  |  9h45m  |
|  2/14 - 2/21  |  #11 archive.php（カテゴリー別投稿一覧）  |  17h35m  |
|  2/21 - 3/2  |  #12 single.php（投稿ページ装飾）  |  10h35m  |
|  3/2 - 3/14  |  #13 search.php（検索結果画面）  |  8h20m  |
|  3/15  |  #14 残りのメニューの投稿   |  1h15m  |
|  3/16 - 3/17  |  #15 地図  |  4h35m  |
|  3/18  |  ♯16 Take Out, Eat In内、記事のピックアップ  |  TD  |
|  TD  |  TD  |  TD  |
|  TD  |  TD  |  TD  |



|  TH  |  TH  |  TH  |
| ---- | ---- | ---- |
|  TD  |  TD  |  TD  |
|  TD  |  TD  |  TD  |



（ここまで　　時間）  


【累計】  
構成・設計        hm  
環境構築          h  
マークアップ      hm  
Sass             hm  
jQuery           h  
リファクタリング  




### ----学習参考サイトや、考察、メモ----  

RaiseTech・WP副業コース、最初の課題のブログ  
https://wp.yat-net.com/?p=5970#theme04  

- rtl.css 言語によってはテキストを右から左へ記述するものが有り、その場合はこのスタイルシートが自動的に呼び出されます。

**Localのエラー【参考サイト】2021/9/8**  
●https://localwp.com/help-docs/advanced/router-mode/  
●https://tips.back2nature.jp/wordpress/fixed-locals-router-is-having-trouble-starting/  
https://qiita.com/ponsuke0531/items/7b33e7a48cb27c42fbdc  
●https://moriya.xrea.jp/tdiary/20161128.html  

**Font Awesome の読み込みはfunction.phpで。**  
https://www.bootstrapcdn.com/  


**function.php  wp_enqueue_style()での指定するところの色々**  
[WordPress テーマを作るなら get_theme_file_uri と get_theme_file_path を使いましょう](https://nendeb.com/597)  
- リセットCSS と 開発 CSS がある場合、開発CSSファイルを呼び出す側に array( reset ) と書くと、先にリセットCSSを読み込んでから開発CSSを読み込んでくれる

Googleフォントの読み込みの時の書き方参照
wp_enqueue_styleがGoogle Fontsから１つしか読み込まない
https://neetlance.com/post/enqueue-style-google-fonts/

ブログ1  
wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');  

私  
wp_enqueue_style( 'font-awesome-5','//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1' );  

スライド  
wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0' );  

忘れた  
wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );  

get_theme_file_uriの書き方  
wp_enqueue_style( 'font-awesome', get_theme_file_uri( '/css/font-awesome.css' ), array(), '4.7.0' );  


**カスタムメニュー**  
[WordPress ナビゲーションメニュー（カスタムメニュー）](https://www.webdesignleaves.com/pr/wp/wp_nav_menus.html)  
[[WordPress]カスタムメニュー機能の設定と設置と書き出されるソースコードを分かりやすく紹介します](https://olein-design.com/blog/register-setting-souce-code-of-custom-menu)  
★wp_nav_menu関数のパラメータに関しての記事。クラスの追加の仕方（2023/2/3)  
[WordPressのカスタムメニューで出力されるulやliに任意のクラスを追加する方法](https://techmemo.biz/wordpress/wp-nav-menu-add-class/)  

- 謎の余白の原因→解決  
[WordPressの上部に謎の余白ができた！原因と対策方法まとめ](https://site-manage.net/archives/3346#_wp_footer)  

- str_replaceについての記事  
[wp_nav_menuでcontainerを削除してulにclassを設定](http://dim5.net/wordpress/wp-nav-menu-container-delete.html)  
[str_replaceで文字列を置換する方法まとめ](https://www.sejuku.net/blog/30092)  

- sub-menuを変更する方法（これに伴い、もともとあった「p-gnavi__sub-menu__list」は「p-gnavi__submenu__list」に変更  
[wp_nav_menuのサブメニュークラス「sub-menu」を変更する方法](https://blog.webico.work/wp_nav_menu_sub)  

**フッター** 2023/2/4  
メニュー間の「｜」は、li+liでやるというサイトを見てヒントを得た。良かった。  
[横並びメニューの区切り線を隣接セレクタを使ってスマートに実装する方法](https://wk-partners.co.jp/homepage/blog/hpseisaku/htmlcss/adjacent-sibling-combinator/)  


**issueとプルリクを紐づけるには**  
https://docs.github.com/ja/issues/tracking-your-work-with-issues/linking-a-pull-request-to-an-issue  

**ページネーション参考**  
- WP-PageNaviカスタム方法  
https://www.nxworld.net/wp-plugin-wp-pagenavi-custom-tag-and-class.html  
https://deep-blog.jp/engineer/plugin-wp-pagenavi/  
[WordPress：ナビゲーションプラグイン「WP-PageNavi」のタグやclassを任意のものに変更する方法](https://www.nxworld.net/wp-plugin-wp-pagenavi-custom-tag-and-class.html)  
[5分で実装！WordPressでページネーションを作成する方法（プラグインor自作）](https://digitor.jp/textbook/wordpress-pagination-selfmade-plugin/#PHP)  


- :hasについて  
https://web-de-asobo.net/2022/10/19/css-has/  
https://coliss.com/articles/build-websites/operation/css/howtouse-css-has-pseudo-selector.html  

- :hoverについて  
https://developer.mozilla.org/ja/docs/Web/CSS/:hover  
- :notについて  
https://pisuke-code.com/css-why-not-pseudo-elem-not-work/  
- CSS 階層構造でセレクタを指定  
https://itsakura.com/css-selector-combination  

**ループ処理関係**  
[WordPress 記事一覧の取得をするループを記述してみる](https://shu-sait.com/kiji-ichiran-syutoku/)  
[「while (have_posts()) : the_post();」の意味](https://php1st.com/1202)  
[WordPress でよく使われる PHP の条件分岐と反復の命令の記述方法](https://plugmize.jp/archives/blog/20160817_php_if_while_for_foreach.html)  
> if、while、for、foreach とその必要な条件式等の記述の後で、「:」（コロン）を記述し、そこからブロックが始まることを示す
> if、while、for、foreach などの条件分岐や反復の最終端に、それぞれ end を付けた endif、endwhile、endfor、endforeach を記述し、そこが終わりであることを示すために「;」（セミコロン）を付ける
> ifに対するelseやelseifなども同様に、必要な記述の後に「:」（コロン）を記述し、そこからブロックが始まることを示す
> 従来のブロック内の構文は、これまで通り普通に記述します
> 簡単に置き換えができるように表現しなおすと、「{」を「:」に置き換え、「}」は、最も最後のもののみ、end○○; とし、それ以外の「}」は削除します。
>
>具体的な使い方を見たいという方のために、言語ではよくある関数等の表記パターンに従って、それぞれ書き起こしましたので参考にされてください。
>
>制御構造に関する別の構文　http://php.net/manual/ja/control-structures.alternative-syntax.php

- ループの使い方まとめ  
[公式ドキュメント＞ループ](https://wpdocs.osdn.jp/%E3%83%AB%E3%83%BC%E3%83%97)
```
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
```
PHPの制御構造を用いると
```
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// 投稿がここに表示される
		//
	} // end while
} // end if
?>
```

[投稿内容(記事本文)からhタグを取得し目次として使用する](https://unskilled.site/wordpressdetoukounaiyou/)
```
function get_index() {
	// グローバル変数を使う為の宣言
	global $post;

	////// 3通りの書き方（正規表現） //////
	// マッチングで<h>タグを取得する
	preg_match_all('/<h[1-6]>.+<\/h[1-6]>/u', $post->post_content, $matches);
	// マッチングで<h>タグ以外にも、idやクラス名を含んで取得する
	// 「\s」は、空白(タブ、改行、半角スペース)にマッチするという意味
	preg_match_all('/<h[1-6]\s.+>.+<\/h[1-6]>/u', $post->post_content, $matches);
	// マッチングで<h2>タグを取得する
	preg_match_all('/<h2>.+<\/h2>/u', $post->post_content, $matches);
	/////////////////////////////////////

	// 取得した<h>タグの個数をカウント
	$matches_count = count($matches[0]);
	if(empty($matches)){
		// <h>タグがない場合の出力
		echo '<span>Sorry no index</span>';
	}else{
		// <h>タグが存在する場合に<h>タグを出力
		for ($i = 0; $i < $matches_count; $i++){
			echo  $matches[0][$i];
		}
	}
}
```
- 抜粋方法関係  
[substrやmb_substrを使って文字列を簡単に切り出そう!](https://www.sejuku.net/blog/48076)  
[wp trim words](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/wp_trim_words)  
[多言語対応サイトの英語ページで本文抜粋（文字数制限）が効かないときの対処方法](https://bambooworks.co/english-excerpt-fix/)  
[wp_trim_words()関数 を使って表示させる文字数を制限したい](https://terakoya.sejuku.net/question/detail/9649)  
★[【CSS】文字数制限(行数制限)して3点リーダーを表示させる方法（複数行、IE対応）](https://junpei-sugiyama.com/ellipsis/)  
- 投稿本文取得関係  
[WordPressで投稿の本文のテキストだけを取得する方法](https://www-creators.com/archives/704)  
[WordPress ループで使うテンプレートタグや関数](https://www.webdesignleaves.com/pr/wp/wp_func_loop.html)  

**single.php（投稿ページ）に関する記事**
[marginの相殺を回避するテクニック](https://coliss.com/articles/build-websites/operation/css/about-collapsing-margins.html)  
> 空要素や親子要素で起きるマージンの相殺は、実際には避けることができません。これに対応する唯一の方法は、要素の間にボーダーなど何かを挿入することです。ほかの対応方法としては、要素のプロパティをブロックレベル以外（flex, gridなど）に変更します。  
[WordPress ボタンブロックの使い方・ボタンの作り方を解説](https://webst8.com/blog/wordpress-button-block/)  

**ギャラリーのCSS設定に関する記事**2023/03/02  
ここのCSSについては後回しにする  
[画像サイズを「サムネイル」「中」「大」「フルサイズ」から選択または任意のサイズを指定する](https://www.javadrive.jp/wordpress/media/index8.html)  
[gridレイアウトについて調べました【CSS/grid-template/auto-fit/auto-fill】](https://m-kenomemo.com/grid-template/)  


**single.php内、メディアとテキストの装飾について**
[width指定が効かない？Flexboxは子要素の横幅指定がポイント](https://www.alivecast.co.jp/staff-blog/shiraishi.yuuri/1159)  
[flexboxでリキッドレイアウト（固定＋可変）にする方法](https://www.aizulab.com/blog/css-flexbox-liquid-layout/)  


**search.php関係、正規表現**
[テンプレートタグ/the excerpt](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/the_excerpt)  
[関数リファレンス/get the content](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/get_the_content)  

★[WordPress ループで使うテンプレートタグや関数](https://www.webdesignleaves.com/pr/wp/wp_func_loop.html)  
★[WP 「続きを読む」のリンク先をページの先頭にしてほしい](https://www.nwun.com/katsunakatamisa/2021-3-25/)  
[WordPressで投稿の本文のテキストだけを取得する方法](https://www-creators.com/archives/704)  
[【WordPress】記事本文を出力（表示）、または、取得する方法](https://deep-blog.jp/engineer/6718/)  
[WordPressで投稿の本文のテキストだけを取得する方法](https://www-creators.com/archives/704)  




[抜粋を表示する](http://wordpress.hitsuji.me/show-excerpt/#A0.B0.C1.D3.E0.F0)  
[とほほの正規表現入門](https://www.tohoho-web.com/ex/regexp.html)  
★[PHPのstr_replaceとpreg_replace（正規表現）の使い方](https://fantastech.net/str-replace-preg-replace)  

[Githubでブランチ保護設定した時の作業メモ](https://qiita.com/da-sugi/items/ba3cd83e64c689795c50)  



[CSS：Google Maps埋め込み時に左の吹き出し（ポップ）を消す](https://monakanote.net/coding/css-googlemaps-20200624/)  
[iframeで埋め込むときのレスポンシブ対応について](https://naeco.jp/iframe-responsive)  
[【CSS】Google Mapの比率を保持しながらレスポンシブで埋め込む方法](https://web-dev.tech/front-end/css/embed-google-map-with-proportion/)
[アスペクト比計算ツール](https://aspect.arc-one.jp/)




***
質問  
- 投稿記事は、「投稿のアイキャッチ画像（追加CSSにp-single__image--large）」、「h2の見出し」「段落」「続き」ブロックの前提でコーディング。それでいいのか。見出しと段落は、グループにしてあります。
- TakeOutとEatInは固定ページ？







# WordPress　コーディングルール
~~https://ja.wordpress.org/team/handbook/coding-standards/wordpress-coding-standards/~~  
https://ja.wordpress.org/team/handbook/coding-standards/wordpress-coding-standards/php/

- インデントにはスペースではなくタブ
- セクション間に2つの改行をつける。セクション内のブロック間に一つの改行をつける
- 各セレクターはカンマもしくは開始中括弧終了
- プロパティと値の行は一つのインデントと終了にセミコロン
- 終了を示す中括弧は開始括弧のインデント位置と合わせる
- プロパティの後にはコロンとスペース
- 特有の指定がない限り小文字で記述
- 色の16進数コード記述で省略が可能な場合は省略（ #ffffff → #fff ）
- なるべくショートハンドで記述（プロパティの上書きを除く


# 命名規則（FLOCSSに帰属）

.block{}                    親要素  
.block__element{}           blockに属する子要素  
.block--modifier{}          修飾を追加した親要素  
.block__element--modifier{} 修飾を追加した子要素  

**2つ以上の単語をつなぐときは「-（ハイフン）」でつなぐ**  
catch-copy  
layout-list  
など  

**「_（アンダースコア）」1つでつなぐことは基本的に禁止**

**原則、保守性を高めるため、単語は省略しない**

よくある単語  
	bg  は  background  
	btn は  button  
	ttl は  title  
	txt は  text  

ただし、**開発時のルールに合わせることが大原則のため、この限りではない**


参照URL https://jobtech.jp/html_css/4209/
***


**余白の調整**  
margin-bottom: 0;  
margin-topで余白の調整をする。  
※要素の下に、何が来るかわからないから、下につく方が、上と調整する。  
参考サイト  
https://design-remarks.com/margin-top-or-bottom/  
***

**【font-family】について**  
	font-family: 候補1,候補2,候補3,フォントの種類;  
		「sans-serif」  ゴシック体系のフォント（MSゴシック、中ゴシック、Arialなど）  
		「serif」       明朝体系のフォント（MS明朝、MS P明朝、Garamond、MS Georgia、Times New Romanなど）  
		「cursive」     筆記体系のフォント（caflisch script、ex pontoなど）  
		「fantasy」     装飾系のフォント（critter、studzなど）  
		「monospace」   等幅系のフォント（Osaka-等幅、courier、Courier Newなど）  
	※日本語テキストにcursiveを指定していると、希に正常に表示できない場合がある※  
	英語フォントと日本語フォントの両方を指定する場合は、先に英語フォントを指定する。  
	そうすることで、アルファベットには英語フォントが、日本語には日本語フォントが使用されるようになる。  
***


# Sass-階層説明
```
hamburger-site-wp
├─ css
|  ├─ ress.css
|  ├─ style.css -- gulpでコンパイル（自動生成）
|  └─ style.css.map
├─ img
|  ├─ archive
|  ├─ front
|  ├─ page
|  └─ single
├─ js
├─ sass
|  ├─ foundation
|  |  ├─ _base.scss
|  |  ├─ _mixin.scss
|  |  └─ _variable.scss
|  ├─ layout
|  |  ├─ _container.scss
|  |  ├─ _footer.scss
|  |  ├─ _header.scss
|  |  ├─ _main.scss
|  |  └─ _sidebar.scss
|  └─ object
|  |  ├─component
|  |  |  ├─ _blockquote.scss
|  |  |  ├─ _box.scss
|  |  |  ├─ _button.scss
|  |  |  ├─ _definition-list.scss
|  |  |  ├─ _layout-list.scss
|  |  |  └─ _section-title.scss
|  |  ├─project
|  |  |  ├─ _access.scss
|  |  |  ├─ _archive.scss
|  |  |  ├─ _card.scss
|  |  |  ├─ _firstview.scss
|  |  |  ├─ _gnavi.scss
|  |  |  ├─ _pagination.scss
|  |  |  ├─ _place.scss
|  |  |  ├─ _search.scss
|  |  |  └─ _single.scss
|  |  └─utility  
|  └─ style.scss
├─ 
├─ node_modules -- GitHub管理外
├─ .gitignore
├─ gulp.js
├─ package-lock.json
├─ package.json
├─ 
├─ archive.php
├─ footer.php
├─ function.php
├─ header.php
├─ index.php
├─ page.php
├─ search.php
├─ searchform.php
├─ sidebar.php
├─ single.php
└─ README.md
```

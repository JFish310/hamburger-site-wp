# RaiseTech WP副業コース  
## 最終課題  ハンバーガーサイト  WordPress化  

----履歴----  
2021年
8/30    環境構築スタート(phpのインストール、Local・WordPressの更新など）  
9/8     構成考察  
9/9     コーディングスタート  

9/22    休止  
ここまで 累計　h m  

2022年  
12/14   #1 タブ対応　40m  

2023年  
1/16    再開 -- リファクタリング(#2 gulp対応, Browser-sync)  
1/21    #3 Menu  


（ここまで　　時間）  

【累計】  
構成・設計        1h20m  
環境構築          2h  
マークアップ      1h30m  
Sass             44h10m  
jQuery           4h  
リファクタリング  




----学習参考サイトや、考察、メモ----  

YATさんの最初の課題のブログ  
https://wp.yat-net.com/?p=5970#theme04  

- rtl.css 言語によってはテキストを右から左へ記述するものが有り、その場合はこのスタイルシートが自動的に呼び出されます。

**Localのエラー【参考サイト】9/8**  
●https://localwp.com/help-docs/advanced/router-mode/  
●https://tips.back2nature.jp/wordpress/fixed-locals-router-is-having-trouble-starting/  
https://qiita.com/ponsuke0531/items/7b33e7a48cb27c42fbdc  
●https://moriya.xrea.jp/tdiary/20161128.html  

**Font Awesome の読み込みはfunction.phpで。**  
https://www.bootstrapcdn.com/  


**function.php  wp_enqueue_style()での指定するところの色々**  
WordPress テーマを作るなら get_theme_file_uri と get_theme_file_path を使いましょう  
https://nendeb.com/597
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
https://www.webdesignleaves.com/pr/wp/wp_nav_menus.html  
https://techmemo.biz/wordpress/wp-nav-menu-add-class/  
	wp_nav_menu関数のパラメータに関しての記事。クラスの追加の仕方（2023/2/3)


***


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
├─ archive_search.html
├─ archive.html
├─ footer.php
├─ function.php
├─ header.php
├─ index.php
├─ page.php
├─ searchform.php
├─ sidebar.php
├─ single.php
└─ README.md
```

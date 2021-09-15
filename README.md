# RaiseTech WP副業コース  
最終課題  
ハンバーガーサイト  
WordPress化  

----履歴----  
8/30    環境構築スタート(phpのインストール、Local・WordPressの更新など）
9/8     構成考察  
9/9     コーディングスタート  



6/9     環境構築  
6/10    indexページ、マークアップ開始  
6/13    scss側開始  
6/18    中断  
7/6     再開  
7/29    フロントページのコーディング終了  
7/30    リファクタリング終了
7/31    質問に答えていただいた箇所のリファクタリング
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


***




# WordPress　コーディングルール
https://make.wordpress.org/core/handbook/best-practices/coding-standards/css/　　

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
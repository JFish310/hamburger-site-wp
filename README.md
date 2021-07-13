RaiseTech WP副業コース最終課題
ハンバーガーサイト

----履歴----
6/8     構成考察
6/9     環境構築
6/10    indexページ、マークアップ開始
6/13    scss側開始
6/18    中断
7/6     再開







----学習参考サイトや、考察、メモ----

M+ FONTSについて
http://mplus-webfonts.osdn.jp/

検索バーのinput要素のアイコン表示について参照サイト
https://www.tsukimi.net/submit-button_font-awesome.html

CSS Grid Layout を極める！（基礎編）
https://qiita.com/kura07/items/e633b35e33e43240d363


検索バーの入力フォームとボタンが揃わない
---->>>     入力フォームに「vertical-align : top;」の設定
            一応、検索ボタンにも設定する







#命名規則（FLOCSSに帰属）

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


余白の調整
margin-bottom: 0;
margin-topで余白の調整をする。
※要素の下に、何が来るかわからないから、下につく方が、上と調整する。





#Sass-階層説明
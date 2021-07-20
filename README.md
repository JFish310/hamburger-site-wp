#RaiseTech WP副業コース  
最終課題  
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

CSS Grid Layoutについて
    CSS Grid Layout を極める！（基礎編）
    https://qiita.com/kura07/items/e633b35e33e43240d363  

    CSS Grid Layout を極める！（場面別編）  
    https://qiita.com/kura07/items/486c19045aab8090d6d9  

    5分で完璧に分かる！CSS Gridの基本的な使い方を解説  
    https://coliss.com/articles/build-websites/operation/css/learn-css-grid-in-5-minutes.html  

    ---->>> 一番分かりやすいCSS Grid Layoutの使い方ガイド  
    https://webdesign-trends.net/entry/11086#Grid_LayoutFlexbox  

    CSS Gridレイアウト入門：「fr」でのサイズ指定  
    https://hacknote.jp/archives/26960/  



検索バーの入力フォームとボタンが揃わない  
---->>>     入力フォームに「vertical-align : top;」の設定  
            一応、検索ボタンにも設定する  

【CSS】背景のみ透過させて表示する方法  
https://www.design-memo.com/coding/css-rgba-opacity  
---->>> https://eguweb.jp/css/overlay-transparent-black-colors  
https://techacademy.jp/magazine/29811  
https://kubogen.com/web-programing-211/  


罫線について（1本だけ線を引くCSS）  
https://www.nishishi.com/css/line-border-hr.html  
https://html-coding.co.jp/annex/dictionary/html/hr/  

Flexboxで最後の1つだけ右寄せや下寄せにする方法！  
https://webkore.site/flexbox-right-justified/  

***




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


**余白の調整**  
margin-bottom: 0;  
margin-topで余白の調整をする。  
※要素の下に、何が来るかわからないから、下につく方が、上と調整する。  
***




#Sass-階層説明
/* .c-button--js（Menuボタンと×ボタン）をクリックすると */
/* サイトのHTMLを完全に読み込んでから、jQueryを実行させるための処理	 */
/* 「$(document).ready()」は短縮して「$( );」と記述できる。			*/
/* jQuery(document).ready(function($) {	 は						*/
/* $(function($){	になる。									*/

jQuery(function($){
	// ウインドウサイズの変更がなくても、クリックイベントでクラスの付与
	$('.c-button--js').on('click', function(){
		$('body').toggleClass('is-open');
		$('.l-sidebar').toggleClass('is-open');
	});
	// 閉じるボタン以外でもメニューバー以外をクリックすると閉じる処理
	$(document).on('click', function(e) {
		// メニューボタンがなく、l-sidebarが
		if (!$(e.target).closest('.c-button--menu').length && !$(e.target).closest('.l-sidebar').length) {
			if($('.l-sidebar').hasClass('is-open')){
				$('body').removeClass('is-open');
				$('.l-sidebar').removeClass('is-open');
			}
		}
	});
	// ウインドウが1025以下だった場合is-open削除
	$(window).resize(function(){
		let $window = $(this).width();
		let large = 1025;
		if($window > large){
			$('body').removeClass('is-open');
			$('.l-sidebar').removeClass('is-open');
		}
	});
});

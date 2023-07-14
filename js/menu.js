/* .c-button--js（Menuボタンと×ボタン）をクリックすると */
/* サイトのHTMLを完全に読み込んでから、jQueryを実行させるための処理	 */
/* 「$(document).ready()」は短縮して「$( );」と記述できる。			*/
/* jQuery(document).ready(function($) {	 は						*/
/* $(function($){	になる。									*/

// jQuery(function($){
// 	var sidebar = $('.l-sidebar');
// 	var body = $('.body');
// 	$('.c-button--js').on('click',function(){
// 		// .l-sidebarにis-openクラスを付与
// 		$('body').toggleClass('is-open');
// 		$('.l-sidebar').toggleClass('is-open');
// 		// if(body.hasClass('is-open')) {
// 		// 	$('.body').removeClass('is-open');
// 		// 	$('.l-sidebar').removeClass('is-open');
// 		// }
// 	})
// });
jQuery(function($){
	// ウインドウサイズがbreakpoint-large（1025）になったら非表示にさせる
	$('.c-button--js').on('click',function(){
		$('body').toggleClass('is-open');
		$('.l-sidebar').toggleClass('is-open');
		console.log('Menuがクリックされ、is-openが付与されました！');
	});
	$(window).resize(function(){
		let $window = $(this).width();
		let large = 1025;
		// if($window < large){
			// $('.c-button--js').on('click',function(){
			// 	console.log('サイズが変更されました！');
			// 	$('body').toggleClass('is-open');
			// 	$('.l-sidebar').toggleClass('is-open');
			// });
		// }
		if($window > large){
			console.log('1025より幅大きい');
			$('body').removeClass('is-open');
			console.log('bodyのis-openは削除されました');
			$('.l-sidebar').removeClass('is-open');
			console.log('l-sidebarのis-openは削除されました');
		}
		else{
			console.log('1025より幅小さい');
			// $('.body').removeClass('is-open');
			// $('.l-sidebar').removeClass('is-open');
			// console.log('is-openは削除されました');
		}
	});
});

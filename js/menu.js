/* .c-button--js（Menuボタンと×ボタン）をクリックすると */
jQuery(function($){
	$('.c-button--js').on('click',function(){
		// .l-sidebarにis-openクラスを付与
		$('body').toggleClass('is-open');
		$('.l-sidebar').toggleClass('is-open');
	})
});

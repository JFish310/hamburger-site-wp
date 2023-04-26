/* .c-button--js（Menuボタンと×ボタン）をクリックすると */
// $('.c-button--js').on('click',function(){
// 	// .l-sidebarにis-openクラスを付与
// 	$('body').toggleClass('is-open');
// 	$('.l-sidebar').toggleClass('is-open');
// });

/* .c-button--js（Menuボタンと×ボタン）をクリックすると */
// {/* <script type="text/javascript">
// jQuery(function($){
// 	$('.c-button--js').on('click',function(){
// 		// .l-sidebarにis-openクラスを付与
// 		$('body').toggleClass('is-open');
// 		$('.l-sidebar').toggleClass('is-open');
// 	})
// };
// </script> */}

/* .c-button--js（Menuボタンと×ボタン）をクリックすると */
jQuery(function($){
	$('.c-button--js').on('click',function(){
		// .l-sidebarにis-openクラスを付与
		$('body').toggleClass('is-open');
		$('.l-sidebar').toggleClass('is-open');
	})
});

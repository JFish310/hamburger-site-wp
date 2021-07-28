/* .c-button--js（Menuボタンと×ボタン）をクリックすると */
$('.c-button--js').on('click',function(){

    // .l-sidebarにis-openクラスを付与
    // $('bady , .l-sidebar').toggleClass('is-open');
    $('body').toggleClass('is-open');
    $('.l-sidebar').toggleClass('is-open');

    // // bodyにnoscrollクラスを付与(スクロールを固定)
    // $('body').toggleClass('noscroll');

    // // .l-sidebarが0.5秒でフェードイン(メニューのフェードイン)
    // $('.l-sidebar.is-open').fadeToggle(500);
});
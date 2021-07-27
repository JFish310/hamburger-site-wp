/* .c-button--menuをクリックすると */
$('.c-button--menu').on('click',function(){

    // .c-button--menuにis-openクラスを付与(ボタンのアニメーション)
    $('.c-button--menu').toggleClass('is-open');

    // bodyにnoscrollクラスを付与(スクロールを固定)
    $('body').toggleClass('noscroll');

    // .l-sidebarが0.5秒でフェードイン(メニューのフェードイン)
    $('.l-sidebar').fadeToggle(500);
});




/* .p-hamburgerをクリックすると
$('.p-hamburger').on('click',function(){

    // .p-hamburgerにis-openクラスを付与(ボタンのアニメーション)
    $('.p-hamburger').toggleClass('is-open');

    // bodyにnoscrollクラスを付与(スクロールを固定)
    $('body').toggleClass('noscroll');

    // .l-header__menuが0.5秒でフェードイン(メニューのフェードイン)
    $('.l-header__menu').fadeToggle(500);
}); */
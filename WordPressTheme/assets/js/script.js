
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
  // start
  //ドロワーメニュー
  $(".js-header-menu").click(function () {
    $(".js-header-menu").toggleClass("open");
    // $(".drawer-menu").toggleClass("open");
    // $("html").toggleClass("is-fixed");

  });

  // end
});

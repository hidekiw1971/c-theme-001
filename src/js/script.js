
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
  // start
  //ドロワーメニュー
  $(".js-drawer-menu").click(function () {
    $(".js-drawer-menu").toggleClass("open");
    // $(".js-drawer-menu-open").css("display", "block");
    // $(".drawer-menu").toggleClass("open");
    // $("html").toggleClass("is-fixed");

  });

  // end
});

"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  // start
  //ドロワーメニュー
  $(".js-drawer-menu").click(function () {
    $(".js-drawer-menu").toggleClass("open");
    // $(".drawer-menu").toggleClass("open");
    // $("html").toggleClass("is-fixed");

  });

  // end
});

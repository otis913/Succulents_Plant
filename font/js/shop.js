// 商品篩選
$(document).ready(function () {
  $(`.shop_mainfilter>li>a`).click(function (e) {
    e.preventDefault();
    $(`.shop_mainfilter>li>a`).removeClass("-shop-click");
    $(`.shop_childfilter>li>a`).removeClass("-shop-click");

    // $(`.shop_childfilter`).removeClass(`-show-flex`);
    $(`.shop_childfilter`).addClass("-off");

    $(this).addClass("-shop-click");
  });

  $(`.shop_succulents`).click(function (e) {
    $(`.shop_childfilter`).removeClass("-off");

    // if ($(`.shop_childfilter`).hasClass("-off")) {
    //   $(`.shop_childfilter`).removeClass("-off");
    // } else {
    //   $(`.shop_childfilter`).addClass("-off");
    // }
    // $(`.shop_childfilter`).addClass(`-show-flex`);
  });

  $(`.shop_childfilter>li>a`).click(function (e) {
    e.preventDefault();

    $(`.shop_childfilter>li>a`).removeClass("-shop-click");
    $(this).addClass("-shop-click");
  });

  // 愛心收藏
  $(`.shop_card_heart`).click(function (e) {
    // e.preventDefault();
    if ($(this).hasClass("-heart")) {
      $(this).removeClass("-heart");
    } else {
      $(this).addClass("-heart");
    }
  });
});

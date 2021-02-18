$(document).ready(function () {
  // 商品換照片
  let expandimg = document.getElementsByClassName("product_left_bimg");
  let smpic = document.getElementsByClassName("product_left_simg_smpic");
  for (let i = 0; i < smpic.length; i++) {
    smpic[i].addEventListener("click", function () {
      expandimg[0].querySelector("img").src = smpic[i].querySelector("img").src;
    });
  }

  // 數量加減和價錢
  // let itemCount = document.querySelector(".product_amount_number");

  // document
  //   .querySelector(".product_amount .fa-plus")
  //   .addEventListener("click", function () {
  //     itemCount.value++;
  //     document.querySelector(".product_price").textContent =
  //       parseInt(price) * parseInt(itemCount.value);
  //   });

  // document
  //   .querySelector(".product_amount .fa-minus")
  //   .addEventListener("click", function () {
  //     if (itemCount.value > 1) {
  //       itemCount.value--;
  //       document.querySelector(".proWords .totalPri").textContent =
  //         parseInt(price) * parseInt(itemCount.value);
  //     }
  //   });

  // 賀卡
  $(`#product_card_check`).click(function (e) {
    if ($(`#product_card_check`).prop(`checked`)) {
      $(`.product_card`).removeClass(`-off`);
    } else {
      $(`.product_card`).addClass(`-off`);
    }
  });

  // 賀卡樣式
  $(`.product_card_style>li`).click(function (e) {
    // e.preventDefault();
    $(`.product_card_style>li`).removeClass("-pro-border");
    $(this).addClass("-pro-border");
  });

  // 愛心收藏(未完成 判斷會員可以收藏)
  $(`.shop_card_heart`).click(function (e) {
    // e.preventDefault();
    if ($(this).hasClass("-heart")) {
      // $(this).toggleClass("-heart");
      $(this).removeClass("-heart").text(`已被收藏`);
    } else {
      $(this).addClass("-heart");
    }
  });

  // 商品tabs
  $(`.product_tabs_link:first`).addClass("-pro-bb");
  $(`.pro_con`).hide();
  $(`.pro_con:first`).show();

  $(".product_tabs_link").click(function (e) {
    // e.preventDefault();
    $(".product_tabs_link").removeClass("-pro-bb");
    $(this).addClass("-pro-bb");
    $(".pro_con").hide();

    let activeTab = $(this).attr("href");
    $(activeTab).fadeIn();
    return false;
  });
});

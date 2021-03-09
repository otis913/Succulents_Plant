$(document).ready(function () {
  // 商品換照片
  // let expandimg = document.getElementsByClassName("product_left_bimg");
  // let smpic = document.getElementsByClassName("product_left_simg_smpic");
  // // console.log(smpic);
  // for (let i = 0; i < smpic.length; i++) {
  //   smpic[i].addEventListener("click", function (e) {
  //     // console.log(e.target);
  //     console.log(smpic);
  //     expandimg[0].querySelector("img").src = smpic[i].querySelector("img").src;
  //   });
  // }

  // $(".product_left_simg_smpic").on("click", function (e) {
  $(`section`).on("click", ".product_left_simg_smpic", function (e) {
    // console.log(e.target);
    // e.preventDefault();
    var smic = $(e.target).attr("src");
    // console.log(smic);
    $(".product_left_bimg>img").attr("src", smic);
  });

  // document.addEventListener("click", function (e) {
  //   if (e.target.classList.contains("product_left_simg_smpic")) {
  //   }
  // });
  // $(`section`).on("click", ".product_left_simg_smpic", function (e) {
  //   // e.preventDefault();
  //   // $(".product_left_bimg").attr("src", "images/-.png"); //要更換的圖片位置
  //   $(".product_left_bimg").attr("src", ".product_left_simg_smpic"); //要更換的圖片位置
  // });

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
  // $(`#product_card_check`).on("click", function (e) {
  //   $(`.product_card`).toggleClass("-off");
  // });
  $(`section`).on("click", "#product_card_check", function (e) {
    $(`.product_card`).toggleClass("-off");
  });

  // 賀卡樣式
  // $(`.product_card_style>li`).click(function (e) {
  $(`section`).on("click", ".product_card_style>li", function (e) {
    // e.preventDefault();
    $(`.product_card_style>li`).removeClass("-pro-border");
    $(this).addClass("-pro-border");
  });

  // 愛心收藏(未完成 判斷會員可以收藏)
  // $(`.shop_card_heart`).click(function (e) {
  $(`section`).on("click", ".shop_card_heart", function (e) {
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

  $(".product_tabs_link").on("click", function (e) {
    // e.preventDefault();
    $(".product_tabs_link").removeClass("-pro-bb");
    $(this).addClass("-pro-bb");
    $(".pro_con").hide();

    let activeTab = $(this).attr("href");
    // console.log(activeTab);
    $(activeTab).fadeIn();
    return false;
  });
});

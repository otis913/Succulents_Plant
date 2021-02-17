$(document).ready(function () {
  $(`#product_card_check`).click(function (e) {
    if ($(`#product_card_check`).prop(`checked`)) {
      $(`.product_card`).removeClass(`-off`);
    } else {
      $(`.product_card`).addClass(`-off`);
    }
  });

  $(`.product_card_style>li`).click(function (e) {
    // e.preventDefault();
    $(`.product_card_style>li`).removeClass("-pro-border");
    $(this).addClass("-pro-border");

    // if( $(this).hasClass("-pro-border")){

    // }
  });
});

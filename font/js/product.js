$(document).ready(function () {
  $(`#product_card_check`).click(function (e) {
    if ($(`#product_card_check`).prop(`checked`)) {
      $(`.product_card`).removeClass(`-off`);
    } else {
      $(`.product_card`).addClass(`-off`);
    }
  });
});

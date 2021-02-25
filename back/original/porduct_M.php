<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/back_index.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </script>
  <title>肉多不怪會員管理中心</title>
  <script src="./js/leftbar.js"></script>
</head>

<body>
  <div class="wrapper">
    @@include('./back_layout/back_header.html')
    <div class="section_main">
      @@include('./back_layout/back_LeftNavbar.html')
      <div class="right_main">
        <h1>商品管理</h1>
        <div class="bottom_line"></div>
        <a class="product_inserBtn" href="./product_creat.html">新增商品</a>
        <div class="product_table">
          <table class="table table-striped">
            <tr class="table-dark">
              <th>商品編號</th>
              <th>商品類別</th>
              <th>商品名稱</th>
              <th>商品庫存量</th>
              <th>商品圖片01</th>
              <th>商品狀態</th>
              <th>是否編輯</th>
            </tr>
            <tr>
              <th scope="row">111232312</th>
              <td>植物</td>
              <td>仙人掌</td>
              <td>20</td>
              <td>
                <img class="back_product_img" src="./img/product_big.png" alt="">
              </td>
              <td>上架</td>
              <td>
                <a href="./porduct_edit.html">編輯</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
</body>

</html>
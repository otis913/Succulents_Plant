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
        <h1>訂單管理</h1>
        <div class="bottom_line"></div>
        <div class="order_table">
          <table class="table table-striped">
            <tr class="table-dark">
              <th>訂單編號</th>
              <th>會員編號</th>
              <th>訂單日期</th>
              <th>付款方式</th>
              <th>訂單付款狀態</th>
              <th>訂單狀態</th>
              <th>修改訂單狀態</th>
            </tr>
            <tr>
              <th>112312312</th>
              <th>001</th>
              <td>2020/01/30</td>
              <td>信用卡付款</td>
              <td>已結帳</td>
              <td>送貨中</td>
              <td>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1"></label>
                </div>
              </td>
            </tr>
          </table>

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
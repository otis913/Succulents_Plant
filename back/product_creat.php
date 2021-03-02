<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/back_index.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  </link>

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700;900&display=swap" rel="stylesheet">
  <!-- JQ cdn -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js' integrity='sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==' crossorigin='anonymous'></script>

  <?php
  include("./php/SignSql.php");

  //建立SQL
  // $sql = "SELECT * FROM ec_category WHERE ID = ?";

  // 建立SQL
  $sql = "SELECT * 
          FROM SUCCULENTS_PLANT.PRODUCT ";


  //執行 
  // $statement = $Util->getPDO()->prepare($sql);

  $statement = $pdo->prepare($sql);

  //給值
  // $statement->bindValue(1, $_GET["CID"]);
  // $statement->execute();
  // $data = $statement->fetchAll();

  $statement->bindValue(1, $_GET["productType"]);
  $statement->execute();
  $cate_data = $statement->fetchAll();

  ?>
  <title>肉多不怪商品管理</title>


</head>

<!-- <body onload="doQuery()"> -->

<body>
  <div class="wrapper">
    <header>
      <?php
      include("./php/header.php");
      ?>
    </header>
    <div class="section_main">
      <?php
      include("./php/lefterBar.php");
      ?>
      <div class="right_main">
        <h1>商品新增</h1>
        <div class="bottom_line"></div>
        <a class="product_inserBtn" href="./product_creat.php">新增商品</a>
        <div class="table_div table_div_productNew">
          <!-- <form method="post" action="ProductCreateR.php" enctype="multipart/form-data">         -->
          <form method="post" action="./php/product_creat_ajx.php" enctype="multipart/form-data">
            <table class="table table-striped">
              <tr>
                <td>商品類別</td>
                <td>
                  <select class="productNew_type" name="productN_Type" id="productN_Type">
                    <option value="">請選擇</option>


                    <?php
                    foreach ($cate_data as $index => $row) {
                      $productType = $row["productType"];
                      // switch ($productType) {
                      //   case "0":
                      //     $productType = '植物';
                      //     break;
                      //   case "1":
                      //     $productType = '裝飾品';
                      //     break;
                      //   case "2":
                      //     $productType = '器皿';
                      //     break;
                      //   default:
                      //     $productType = '錯誤';
                      // };
                      echo "<option value=''>" . $row["productDes"] . "</option>";
                    }
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>商品名稱</td>
                <td>
                  <input type="text" id="productName" name="productName" />
                </td>
              </tr>
              <tr>
                <td>商品大小</td>
                <td>
                  <input type="text" id="productSize" name="productSize" />
                </td>
              </tr>
              <tr>
                <td>商品敘述</td>
                <td>
                  <textarea name="productDes" id="productDes" class="" rows="3" required="required">
                    </textarea>
                </td>
              </tr>
              <tr>
                <td>商品價格</td>
                <td>
                  <input type="text" id="productPrice" name="productPrice" />
                </td>
              </tr>
              <tr>
                <td>商品庫存量</td>
                <td>
                  <input type="text" id="productNumber" name="productNumber" />
                </td>
              </tr>
              <tr>
                <td>商品圖片01</td>
                <td>
                  <input type="file" id="productImg01" name="productImg01" />
                </td>
              </tr>
              <tr>
                <td>商品圖片02</td>
                <td>
                  <input type="file" id="productImg02" name="productImg02" />
                </td>
              </tr>
              <tr>
                <td>商品圖片03</td>
                <td>
                  <input type="file" id="productImg03" name="productImg03" />
                </td>
              </tr>
              <tr>
                <td>商品圖片04</td>
                <td>
                  <input type="file" id="productImg04" name="productImg04" />
                </td>
              </tr>
              <tr>
                <td>商品狀態</td>
                <td>
                  <input type="radio" name="productStatus" value="1" checked />上架
                  <input type="radio" name="productStatus" value="2" />下架
                </td>
              </tr>
              <!-- <tr>
                <td>商品標籤選擇</td>
                <td>
                  <select class="productNew_tag" name="" id="">
                    <option value="">新上市</option>
                    <option value="">熱門商品</option>
                    <option value="">客製類</option>
                  </select>
                </td>
              </tr> -->
            </table>
            <div class="cancel_check">
              <input type="button" name="cancel" id="cancel" value="取消" onclick="javascript:history.go(-1);">
              <input type="submit" name="submitBtn" id="submitBtn" value="確定" onclick="return doSubmit();">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  </div>
  <script type="text/javascript">
    function doSubmit() {
      if (document.getElementById('productType').value == '') {
        alert("請選擇[分類]");
        return false;
      }
      if (document.getElementById('productName').value == '') {
        alert("請填寫[商品名稱]");
        return false;
      }
      if (document.getElementById('productNumber').value == '') {
        alert("請填寫[庫存數量]");
        return false;
      }
      if (document.getElementById('productPrice').value == '') {
        alert("請填寫[商品金額]");
        return false;
      }
      if (document.getElementById('productDes').value == '') {
        alert("請填寫[商品敘述]");
        return false;
      }

      //判斷Status(radio button)是否有值?
      var isChecked = false;
      var obj = document.getElementsByName('productStatus');
      for (var i = 0; i < obj.length; i++) {
        if (obj[i].checked) {
          isChecked = true;
        }
      }
      if (!isChecked) {
        alert("請選擇[商品狀態]");
        return false;
      }

      if (document.getElementById('productImg01').value == '') {
        alert("請選擇[商品圖片]");
        return false;
      }
    }
  </script>

  <script src="./js/leftbar.js"></script>
</body>

</html>
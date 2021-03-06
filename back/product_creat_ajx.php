<?php
include("./fileImg.php");
$file = new fileImg();
include("./SignSql.php");

$sql = "SELECT *
        FROM SUCCULENTS_PLANT.PPRODUCT";

$statement = $pdo->prepare($sql);

//Server上的暫存檔路徑含檔名
$filePath_arr = $_FILES["file"]["name"];
$fileTmpName_arr = $_FILES["file"]["tmp_name"];

for ($i = 0; $i < count($filePath_arr); $i++) {

  //Server上的暫存檔路徑含檔名
  $filePath_Temp = $fileTmpName_arr[$i];
  //檔案最終存放位置
  $ServerRoot = $_SERVER["DOCUMENT_ROOT"];
  $filePath = $ServerRoot . "./20210225/back/img/" . $filePath_arr[$i];

  //將暫存檔搬移到正確位置
  move_uploaded_file($filePath_Temp, $filePath);

  //取得POST過來的值
  $productType = $_POST["productType"];
  $productName = $_POST["productName"];
  $productSize = $_POST["productSize"];
  $productDes = $_POST["productDes"];
  $productPrice = $_POST["productPrice"];
  $productNumber = $_POST["productNumber"];
  $productStatus = $_POST["productStatus"];

  $sql = "INSERT INTO `SUCCULENTS_PLANT`.`PRODUCT`
            (`productType`,`productName`,`productSize`,`productDes`,`productPrice`,
              `productNumber`,`productStatus`,`productImg01`,`productImg02`,`productImg03`) 
            VALUES (  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?)";
  //執行
  $statement = $pdo->prepare($sql);

  //給值
  $statement->bindValue(1, $productType);
  $statement->bindValue(2, $productName);
  $statement->bindValue(3, $productSize);
  $statement->bindValue(4, $productDes);
  $statement->bindValue(5, $productPrice);
  $statement->bindValue(6, $productNumber);
  $statement->bindValue(7, $productStatus);
  $statement->bindValue(8, $_FILES["filePath_arr[$i]"]["name"]);
  $statement->bindValue(9, $_FILES["filePath_arr[$i]"]["name"]);
  $statement->bindValue(10, $_FILES["filePath_arr[$i]"]["name"]);
  $statement->execute();

  echo "<script>alert('新增成功!'); location.href = './product_M.php';</script>";
}

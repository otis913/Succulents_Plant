<?php
include("./fileImg.php");
$file = new fileImg();
include("./SignSql.php");


$sql = "SELECT *
        FROM SUCCULENTS_PLANT.PPRODUCT";

$statement = $pdo->prepare($sql);

//先判斷圖片是否上傳成功? 
// echo "上傳失敗: 錯誤代碼" . $_FILES["productImg01"]["error"];
// echo "上傳失敗: 錯誤代碼" . $_FILES["productImg02"]["error"];
// echo "上傳失敗: 錯誤代碼" . $_FILES["productImg03"]["error"];

//Server上的暫存檔路徑含檔名
$filePath_Temp1 = $_FILES["productImg01"]["tmp_name"];
$filePath_Temp2 = $_FILES["productImg02"]["tmp_name"];
$filePath_Temp3 = $_FILES["productImg03"]["tmp_name"];

//欲放置的檔案路徑
$filePath1 = $file->getFilePath() . $_FILES["productImg01"]["name"];
$filePath2 = $file->getFilePath() . $_FILES["productImg02"]["name"];
$filePath3 = $file->getFilePath() . $_FILES["productImg03"]["name"];

//將暫存檔搬移到正確位置
copy($filePath_Temp1, $filePath);
copy($filePath_Temp2, $filePath);
copy($filePath_Temp3, $filePath);

//取得POST過來的值
$productType = $_POST["productType"];
$productName = $_POST["productName"];
$productSize = $_POST["productSize"];
$productDes = $_POST["productDes"];
$productPrice = $_POST["productPrice"];
$productNumber = $_POST["productNumber"];
$productStatus = $_POST["productStatus"];
$productImg01 = $_POST["productImg01"];
$productImg01 = $_POST["productImg02"];
$productImg01 = $_POST["productImg03"];


$sql = "INSERT INTO `SUCCULENTS_PLANT`.`PRODUCT`
            (`productType`,`productName`,`productSize`,`productDes`,`productPrice`,
             `productNumber`,`productStatus`,`productImg01`,,`productImg02`,,`productImg03`) 
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
$statement->bindValue(8, $_FILES["productImg01"]["name"]);
$statement->bindValue(9, $_FILES["productImg02"]["name"]);
$statement->bindValue(10, $_FILES["productImg03"]["name"]);

$statement->execute();


echo "<script>alert('新增成功!'); location.href = './product_M.php';</script>";
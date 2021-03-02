<?php
include("./fileImg.php");
$file = new fileImg();
include("./SignSql.php");

//先判斷圖片是否上傳成功?
if ($_FILES["knowledgeTypeOutPic"]["error"] > 0 && $_FILES["knowledgeTypeContentPic01"]["error"]) {
} else {
  //Server上的暫存檔路徑含檔名
  $filePath_Temp_title = $_FILES["knowledgeTypeOutPic"]["tmp_name"];
  $filePath_Temp_pic01 = $_FILES["knowledgeTypeContentPic01"]["tmp_name"];
  $filePath_Temp_pic02 = $_FILES["knowledgeTypeContentPic02"]["tmp_name"];
  $filePath_Temp_pic03 = $_FILES["knowledgeTypeContentPic03"]["tmp_name"];
  //欲放置的檔案路徑
  $filePath_Title = $file->getFilePath() . $_FILES["knowledgeTypeOutPic"]["name"];
  $filePath_Pic01 = $file->getFilePath() . $_FILES["knowledgeTypeContentPic01"]["name"];
  $filePath_Pic02 = $file->getFilePath() . $_FILES["knowledgeTypeContentPic02"]["name"];
  $filePath_Pic03 = $file->getFilePath() . $_FILES["knowledgeTypeContentPic03"]["name"];


  //將暫存檔搬移到正確位置
  if (copy($filePath_Temp, $filePath)) {

    //取得POST過來的值
    $knowledgeType = $_POST["knowledgeType"];
    $knowledgeTypeTitle = $_POST["knowledgeTypeTitle"];
    $knowledgeTypeContent01 = $_POST["knowledgeTypeContent01"];
    $knowledgeTypeContent02 = $_POST["knowledgeTypeContent02"];
    $knowledgeTypeContent03 = $_POST["knowledgeTypeContent03"];

    //建立SQL
    // $sql = "INSERT INTO 
    //           ec_products
    //           (CateID, ProductName, Price, 
    //         Status, 
    //           PictureName, 
    //           CreateDate) 
    //         VALUES (?,?,?,?,?,
    //         NOW())";

    $sql = "INSERT INTO 
        SUCCULENTS_PLANT.PRODUCT,
        (productType, productName, productSize, productDes, 
        productPrice, productNumber, PictureName, CreateDate) 
      VALUES (?,?,?,?,?,?,?,?)";

    //執行
    $statement = $pdo->prepare($sql);

    //給值
    $statement->bindValue(1, $knowledgeType);
    $statement->bindValue(2, $knowledgeTypeTitle);
    $statement->bindValue(3, $knowledgeTypeContent01);
    $statement->bindValue(4, $knowledgeTypeContent02);
    $statement->bindValue(5, $knowledgeTypeContent03);
    $statement->bindValue(6, $_FILES["productImg01"]["name"]);
    $statement->bindValue(7, $_FILES["productImg01"]["name"]);
    $statement->bindValue(8, $_FILES["productImg01"]["name"]);
    $statement->bindValue(9, $_FILES["productImg01"]["name"]);

    $statement->execute();

    //導頁
    //header("Location: Index.php");
    echo "<script>alert('新增成功!'); location.href = '../knowledge_creat.php';</script>";
  } else {
    echo "拷貝/移動上傳圖片失敗";
  }
}

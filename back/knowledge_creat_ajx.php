<?php
include('./loginCheck.php');
include("./fileImg.php");
$file = new fileImg();

$sql = "SELECT * 
        FROM KNOWLEDGE";

$statement = $pdo->prepare($sql);
if ($_FILES["knowledgeOutPic"]["error"] > 0) {

  $fileOutName = $_FILES["knowledgeOutPic"]["name"];
  $fileOutTmpName = $_FILES["knowledgeOutPic"]["tmp_name"];

  $fileName01 = $_FILES["newPic01"]["name"];
  $fileTmpName01 = $_FILES["newPic01"]["tmp_name"];

  $fileName02 = $_FILES["newPic02"]["name"];
  $fileTmpName02 = $_FILES["newPic02"]["tmp_name"];

  $fileName03 = $_FILES["newPic03"]["name"];
  $fileTmpName03 = $_FILES["newPic03"]["tmp_name"];

  $filePath_OutTemp = $fileOutTmpName;
  $filePath_Temp1 = $fileTmpName01;
  $filePath_Temp2 = $fileTmpName02;
  $filePath_Temp3 = $fileTmpName03;

  //檔案最終存放位置
  $ServerRoot = $_SERVER["DOCUMENT_ROOT"];
  // $filePath = $ServerRoot . "./20210225/back/img/" . $fileName_arr[$i];
  $filePath = $ServerRoot . "./20210225/back/img/" . $filePath_OutTemp;
  $filePath = $ServerRoot . "./20210225/back/img/" . $fileName01;
  $filePath = $ServerRoot . "./20210225/back/img/" . $fileName02;
  $filePath = $ServerRoot . "./20210225/back/img/" . $fileName03;

  //將暫存檔搬移到正確位置
  move_uploaded_file($filePath_Temp, $filePath);

  //取得POST過來的值
  $knowledgeType = $_POST["knowledgeType"];
  $knowledgeTypeTitle = $_POST["knowledgeTypeTitle"];
  $knowledgeTypeContent01 = $_POST["knowledgeTypeContent01"];
  $knowledgeTypeContent02 = $_POST["knowledgeTypeContent02"];
  $knowledgeTypeContent03 = $_POST["knowledgeTypeContent03"];

  //執行
  $statement = $pdo->prepare($sql);

  $sql = "INSERT INTO 
          'SUCCULENTS_PLANT'.'KNOWLEDGE','SUCCULENTS_PLANT'.'KNOWLEDGETYPE'
          ('knowledgeType','knowledgeTypeTitle', 'knowledgeTypeOutPic', 
          'knowledgeTypeContent01', 'knowledgeTypeContent02', 'knowledgeTypeContent03'
          'knowledgeContentPic01', 'knowledgeContentPic02', 'knowledgeContentPic03' ) 
          VALUES (  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ? )";
  //執行
  $statement = $pdo->prepare($sql);
  //給值
  $statement->bindValue(1, $knowledgeType);
  $statement->bindValue(2, $knowledgeTypeTitle);
  $statement->bindValue(3, $knowledgeTypeContent01);
  $statement->bindValue(4, $knowledgeTypeContent02);
  $statement->bindValue(5, $knowledgeTypeContent03);
  $statement->bindValue(6, $_FILES["knowledgeTypeOutPic"]["name"]);
  $statement->bindValue(7, $_FILES["newPic01"]["name"]);
  $statement->bindValue(8, $_FILES["newPic02"]["name"]);
  $statement->bindValue(9, $_FILES["newPic03"]["name"]);
  $statement->execute();

  echo "<script>alert('新增成功!'); location.href = './product_M.php';</script>";
} else {
  echo "移動上傳外顯圖片失敗";
}

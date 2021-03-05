<?php
include("./fileImg.php");
$file = new fileImg();
include("./SignSql.php");

//取得POST過來的值

// $knowledgeTypeOutPic = $_POST["knowledgeTypeOutPic"];
$knowledgeType = $_POST["knowledgeType"];
$knowledgeTypeTitle = $_POST["knowledgeTypeTitle"];
$knowledgeTypeContent01 = $_POST["knowledgeTypeContent01"];
$knowledgeTypeContent02 = $_POST["knowledgeTypeContent02"];
$knowledgeTypeContent03 = $_POST["knowledgeTypeContent03"];

//返回訊息文字
$message = "修改成功!";

//建立SQL
$sql = "UPDATE KNOWLEDGETYPE 
            set 
            knowledgeType = ?, knowledgeTypeTitle = ?, knowledgeTypeContent01 = ?, knowledgeTypeContent02 = ?,  knowledgeTypeContent03 = ?";

//執行
$statement = $pdo->prepare($sql);

//給值    
$statement->bindValue(1, $knowledgeType);
$statement->bindValue(1, $knowledgeTypeTitle);
$statement->bindValue(2, $knowledgeTypeContent01);
$statement->bindValue(3, $knowledgeTypeContent02);
$statement->bindValue(4, $knowledgeTypeContent03);
$statement->execute();

//導頁
//header("Location: Index.php");    
echo "<script>alert('" . $message . "'); location.href = './knowledge_M.php';</script>";

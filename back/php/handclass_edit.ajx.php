<?php
include("./fileImg.php");
$file = new fileImg();
include("./SignSql.php");

//取得POST過來的值

$handClassName = $_POST["handClassName"];
$handClassContent = $_POST["handClassContent"];
$handClassPrice = $_POST["handClassPrice"];
$handClassPeople = $_POST["handClassPeople"];
$handClassDate = $_POST["handClassDate"];

//返回訊息文字
$message = "修改成功!";

//建立SQL
$sql = "UPDATE HANDCLASS 
            set 
            handClassName = ?, handClassContent = ?, handClassPrice = ?,  handClassPeople = ?,  handClassDate = ?";

//執行
$statement = $pdo->prepare($sql);

//給值    
$statement->bindValue(1, $handClassName);
$statement->bindValue(2, $handClassContent);
$statement->bindValue(3, $handClassPrice);
$statement->bindValue(4, $handClassPeople);
$statement->bindValue(5, $handClassDate);
$statement->execute();

//導頁
//header("Location: Index.php");    
echo "<script>alert('" . $message . "'); location.href = '../handclass_edit.php';</script>";

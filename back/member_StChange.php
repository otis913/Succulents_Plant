<?php
include('./loginCheck.php');


$memberStatus = $_POST["memberStatus"];
echo $memberStatus;
exit();

//建立SQL
$sql = "UPDATE MEMBER
            set 
            memberStatus = ? where memberStatus = ?";

$statement = $pdo->prepare($sql);

//給值    
$statement->bindValue(1, $memberStatus);
$statement->execute();

//導頁
//header("Location: Index.php");    
echo "<script>alert('" . $message . "'); location.href = './member_M.php';</script>";

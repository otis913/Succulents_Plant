<?php

//========================================

require_once('./conn.php');
//==========================================
$pass =$_POST['pass'];
$phone =$_POST['phone'];
$address =$_POST['address'];
$orderNo =$_POST['orderNo'];
$orderMethods =$_POST['orderMethods'];
$orderMoney =$_POST['orderMoney'];
$orderStatus =$_POST['orderStatus'];


if($pass){
    $sql ="update member set memberPassword='$pass'";

}
if($phone){
    $sql ="update member set memberCellPhone='$phone'";
}
if($address){
    $sql ="update member set memberAddress='$address'";
}
// if($orderTime){
//     $sql ="update member set memberPassword='$orderTime'";

// }
if($orderNo){
    $sql ="update ORDER set orderNO='$orderNo'";
}
if($orderMethods){
    $sql ="update ORDER set orderMethod='$orderMethods' ";
}
if($orderMoney){
    $sql ="update ORDER set orderTotal='$orderMoney'";
}
// if($orderMethods){
//     $sql ="update ORDER set orderMethod='$orderMethods'";
// }

// $sql ="update member set memberPassword='$pass',memberCellPhone='$phone',memberAddress='$address'";
$result = $conn->query($sql);
if($result){
    header('Location:../member.php');
}else{
    header('Location:../member.php');
}

?>

<?php

require_once('./conn.php');
// if(empty($_POST['name'])||empty($_POST['account'])||empty($_POST['password'])||empty($_POST['address'])||empty($_POST['phone'])){
//     header('Location:login.php');
// }

$account = $_POST['account'];
$password = $_POST['password'];

// echo $account;
// echo $password;

$sql ="select * from MEMBER where memberAccount= '$account' and memberPassword='$password '";
// $sql = sprintf(
//     "select * from MEMBER where memberAccount='%s' and memberPassword='%s'",
//     $account,
//     $password
//   );
  $result = $conn->query($sql);
  $row =   $result->fetch_all();
  //if (!$result) {
  //  die($conn->error);
  //}

  //print_r($row);

  if (count($row) > 0) {
    // 登入成功
    //echo '登入成功！';

    $memberNO = "aaa";
    foreach($row as $data){
      $memberNO = $data[0];
    }

    //set session
    session_start();
    $_SESSION["memberNO"] = $memberNO;
    //echo $memberNO;    

    header("Location:../member.php");
  } else {
    //echo '登入失敗！';
    header("Location:../login.php");
    //echo $conn->error;
  }


?>

SELECT * FROM ORDER full join MEMBER on ORDER.FK_ORDER_memberNO= MEMBER.memberNO;

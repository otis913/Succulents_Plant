<?php

$server_name ='localhost';
$username ='albert_huang';
$password='albert';
$db_name='SUCCULENTS_PLANT';

$conn = new mysqli($server_name,$username,$password,$db_name);

if(!empty($conn->connect_error)){
    die('資料庫連線錯誤:'.$conn->connect_error);
}

$conn->query('SET NAMES UTF8');
$conn->query('SET time_zone ="+8:00"');

?>
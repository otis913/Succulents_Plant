<?php

//MySQL相關資訊
// function getSql()
// {
$db_host = "localhost";
$db_user = "root";
$db_pass = "00000";
$db_select = "SUCCULENTS_PLANT";

// $db_host = "10.2.0.115";
// $db_user = "test";
// $db_pass = "password";
// $db_select = "pdo";
//建立資料庫連線物件
$dsn = "mysql:host=" . $db_host . ";dbname=" . $db_select;

//建立PDO物件，並放入指定的相關資料
$pdo = new PDO($dsn, $db_user, $db_pass);
// }

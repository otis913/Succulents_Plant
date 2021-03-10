<?php

$sql = "SELECT distinct * FROM KNOWLEDGE where knowledgeNO = 3";

function getPDO(){
   $db_host = "127.0.0.1";
   $db_user = "root";
   $db_pass = "password";
   $db_select = "SUCCULENTS_PLANT";

   $dsn = "mysql:host=".$db_host.";dbname=".$db_select;

   $pdo = new PDO($dsn, $db_user, $db_pass);

   return $pdo;
}


$statement = getPDO()->prepare($sql);

$statement->execute();
$data = $statement->fetchAll();


foreach ($data as $index => $row) {
    echo"<div class='blogpage021200px'>
    <div class='blogpage02title'>
            <img src='img/blog1/" . $row['knowledgeContentPic01'] ."'>
        <div class='blogpage02titletext'>
            <p>
            " . $row['knowledgeContent01'] ."
            </p>
        </div>
    </div>

    <div class='blogpage02title01'>
            <img src='img/blog1/" . $row['knowledgeTypeContentPic02'] ."'>
        <div class='blogpage02title01text'>
            <p>
            ". $row['knowledgeTypeContent02'] ."
            </p>
        </div>

    </div>

    <div class='blogpage02title02'>
            <img src='img/blog1/" . $row['knowledgeContentPic03'] ."'>
        <div class='blogpage02title02text'>
            <p>
            ". $row['knowledgeContent03'] ."
            </p>
        </div>

    </div>

</div>";
}
?>
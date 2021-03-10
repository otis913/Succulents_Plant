<?php

// $host = 'localhost';

// $dbuser = 'root';

// $dbpw = 'password';

// $dbname = 'SUCCULENTS_PLANT';

$sql = "SELECT * FROM KNOWLEDGE where knowledgeNO = 1";

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

    echo" <article class='blog_wrapper'>
    <img src='./img/blog1/" . $row['knowledgeContentPic01'] ."'>
    <p class='blog1_p'>" . $row['knowledgeContent01'] ."</p>
</article>"
" <article class='blog_wrapper'>
    <img src='./img/blog1/" . $row['knowledgeTypeContentPic02'] ."'>
    <p class='blog1_p'>" . $row['knowledgeTypeContent02'] ."</p>
</article>"
" <article class='blog_wrapper'>
    <img src='./img/blog1/" . $row['knowledgeContentPic03'] ."'>
    <p class='blog1_p'>" . $row['knowledgeContent03'] ."</p>
</article>";
}

?>
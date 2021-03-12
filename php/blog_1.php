<?php

// $host = 'localhost';

// $dbuser = 'root';

// $dbpw = 'password';

// $dbname = 'SUCCULENTS_PLANT';
// $_POST['id']

$sql = "SELECT * FROM KNOWLEDGE where knowledgeType = 1 and knowledgeNO = ".$_POST['id'];

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

    echo" <div class='ex'></div>

    <article>
        <div class='bread'>
            <a href='./main.html'>首頁<a> > <a href='blog_all.html'>多肉知識</a> > <a>" . $row['knowledgeTitle'] ."</a>
        </div>
    </article>
    <article class='blog01'>
        <article class='blog_wrapper'>
            <img src='./img/blog1/" . $row['knowledgeContentPic01'] ."'>
            <p class='blog1_p'>" . $row['knowledgeContent01'] ."</p>
        </article>
        <article class='blog_wrapper'>
            <img src='./img/blog1/" . $row['knowledgeTypeContentPic02'] ."'>
            <p class='blog1_p'>" . $row['knowledgeTypeContent02'] ."</p>
        </article>
        <article class='blog_wrapper'>
            <img src='./img/blog1/" . $row['knowledgeContentPic03'] ."'>
            <p class='blog1_p'>" . $row['knowledgeContent03'] ."</p>
        </article>
        <div class='ex'></div>
    </article>";
}

?>
<?php

    // $host = 'localhost';

    // $dbuser = 'root';

    // $dbpw = 'password';

    // $dbname = 'SUCCULENTS_PLANT';
    
    $sql = "SELECT * FROM SUCCULENTS_PLANT.KNOWLEDGE";

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

            echo "
                <a href='./blog_1.html'>
                        <div class='blog_word'>
                            <img src='./img/blogall/" . $row['knowledgeTypeOutPic'] ."'>
                            <p>" . $row['knowledgeTitle'] . "</p>
                        </div>
                </a>

            ";
    }
 ?>
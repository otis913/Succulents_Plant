<?php

       //MySQL相關資訊
       $db_host = "localhost";
       $db_user = "root";
       $db_pass = "password";
       $db_select = "SUCCULENTS_PLANT";

       //建立資料庫連線物件
       $dsn = "mysql:host=".$db_host.";dbname=".$db_select;

       //建立PDO物件，並放入指定的相關資料
       $pdo = new PDO($dsn, $db_user, $db_pass);

       //---------------------------------------------------
    
       //建立SQL
       $sql = "DELETE FROM SUCCULENTS_PLANT.FAVORITE WHERE FK_FAVORITE_productNO = ? ";

       
      
       $statement = $pdo->prepare($sql);
       $statement->bindValue(1 , $_POST['productNO']);
       $statement->execute();
     

?>
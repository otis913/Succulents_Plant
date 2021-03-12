<?php
    
    
    $sql = "SELECT * FROM SUCCULENTS_PLANT.RETURN_QUESTION";

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
            <div class='mem_answer'>
                <div class='mem_qs_wrapper '>
                    <img src='img//member/2.png'>
                        <div class='mem_qs_box'>
                            <p>" . $row['returnQues_status'] . "</p>
                            <time class='mem_push'>" . $row['returnQuesDate'] . "</time>
                        </div>
                </div>
                <div class='line_down'></div>
                <div class='mem_talk'>";
    }

    $sql = "SELECT * FROM SUCCULENTS_PLANT.RETURN_QUESTION_DETAIL";
    $statement = getPDO()->prepare($sql);

    $statement->execute();
    $data = $statement->fetchAll();

    foreach ($data as $index => $row) {
            echo "
                    <div class='mem_ans_wrapper'>
                    <img src='img/member/" . $row['FK_RETURN_QUESTION_DETAIL_returnQuesNO'] . ".png'>
                        <div class='mem_ans_box'>
                            <p>" . $row['returnQuesDetail_reply'] . "</p>
                            <time>" . $row['returnQuesDate_DETAIL'] . "</time>
                        </div>
                    </div>
                
                ";
    }
            echo "  </div>       
                    <div class='mem_reply'>
                        <input type='text' placeholder='輸入內容 ...'>
                        <input type='submit' value='回覆問題' class='mem_qareplay'>
                    </div>
            </div>";

    if($_POST["returnQues_status"] === '' || $_POST["returnQuesDetail_reply"] === ''){
        
        echo "上傳失敗";
        
    } else {
        $sql = "INSERT INTO 'SUCCULENTS_PLANT'.'RETURN_QUESTION','SUCCULENTS_PLANT'.'RETURN_QUESTION_DETAIL'
        ('returnQuesDate','returnQues_status','FK_RETURN_QUESTION_memberNO','returnQuesDetail_article',
        'returnQuesDetail_reply','FK_RETURN_QUESTION_DETAIL_returnQuesNO','returnQuesDate_DETAIL')
        VALUES (  ?,  ?,  ?,  ?,  ?,  ?,  ? )";
    
        $statement = $pdo->prepare($sql);
    
        $statement->bindValue(1, $_POST["returnQuesDate"]);
        $statement->bindValue(2, $_POST["returnQues_status"]);
        $statement->bindValue(3, $_POST["FK_RETURN_QUESTION_memberNO"]);
        $statement->bindValue(4, $_POST["returnQuesDetail_article"]);
        $statement->bindValue(5, $_POST["returnQuesDetail_reply"]);
        $statement->bindValue(6, $_POST["FK_RETURN_QUESTION_DETAIL_returnQuesNO"]);
        $statement->bindValue(1, $_POST["returnQuesDate_DETAIL"]);
    }


?>
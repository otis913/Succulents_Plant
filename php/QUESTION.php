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
    
 
?>
<?php
    include('./SignSql.php');

     $sql = 'SELECT * 
            FROM 
            SUCCULENTS_PLANT.HANDCLASS';
  

    $statement = $pdo->prepare($sql);    
    $statement->execute();  



    $data = $statement->fetchAll();

    echo "<tr class='table-dark'>
            <th>課程編號</th>
            <th>課程名稱</th>
            <th>課程價格</th>
            <th>詳細資料</th>
            <th>是否編輯</th>
          </tr>";
    
          foreach($data as $index => $row){
            echo "<tr class='table-light'>
                  <td>".$row["handClassNO"]."</td>";
            echo "<td>".$row["handClassName"]."</td>";
            echo "<td>".$row["handClassPrice"]."</td>";
            echo "<td>"."</td>";
            echo "<td>
                  <div class='custom-control custom-switch'>
                      <input type='checkbox' class='custom-control-input' id='customSwitch1'>
                      <label class='custom-control-label' for='customSwitch1'></label>
                  </div>
                  </td>
            </tr>";
        }
    
?>

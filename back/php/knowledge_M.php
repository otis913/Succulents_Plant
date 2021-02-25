<?php
    include('./SignSql.php');

     $sql = 'select 
              le.knowledgeNO,
              leTy.knowledgeType,
              lety.knowledgeTypeContent01,
              leTy.knowledgeTypeTitle
            from KNOWLEDGE le
            left join  KNOWLEDGETYPE leTy 
                  on le.FK_KNOWLEDGE_knowledgeType = leTy.knowledgeType';
  

    $statement = $pdo->prepare($sql);    
    $statement->execute();  

    echo "<tr class='table-dark'>
            <th>文章編號</th>
            <th>文章版型</th>
            <th>文章外顯示圖片</th>
            <th>文章標題</th>
            <th>是否修改</th>
      </tr>";
    //抓出全部且依照順序封裝成一個二維陣列
    $data = $statement->fetchAll();
   
    foreach($data as $index => $row){
        echo "<tr class='table-light'>
              <td>".$row["knowledgeNO"]."</td>";
        echo "<td>".$row["knowledgeType"]."</td>";
        echo "<td>".$row["knowledgeTypeContent01"]."</td>";
        echo "<td>".$row["knowledgeTypeTitle"]."</td>";
        echo "<td>
              <a href='./knowledge_edit.html'>編輯</a>
              </td>
        </tr>";
    }
?>

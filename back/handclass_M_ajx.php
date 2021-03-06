<?php
include('./SignSql.php');

$sql = 'SELECT * 
            FROM 
            SUCCULENTS_PLANT.HANDCLASS';

$statement = $pdo->prepare($sql);

//     $statement = $pdo->prepare($sql);    
$statement->execute();

$data = $statement->fetchAll();

echo "<tr class='table-dark'>
            <th>課程編號</th>
            <th>課程名稱</th>
            <th>課程價格</th>
            <th>詳細資料</th>
            <th>是否編輯</th>
          </tr>";

foreach ($data as $index => $row) {
  echo "<tr class='table-light'>
                  <td>" . $row["handClassNO"] . "</td>";
  echo "<td>" . $row["handClassName"] . "</td>";
  echo "<td>" . $row["handClassPrice"] . "</td>";
  echo "<td>
                  <i class='fas fa-minus hand_hide'></i>" . "<i class='fas fa-plus hand_show'></i>
                  </td>";
  echo "<td>
           
        <a href='./handclass_edit.php?PID=" . $row['handClassNO'] . "'>編輯</a>
                                          
        </td>
      </tr>";

  echo "<tr class='hand_content'>
                    <td>" . $row['handClassNO'] .
    "</td>";
  "<td class='table__hideText'>                  
                    <ol>
                    <li>" . $row['handClassContent'] . "</li>
                    </ol>
                  </td>";
  echo  "<td>" . $row['handClassPrice'] . "</td>";
  echo  "<td class='table__hideText'>
                  <ul>
                    <li>" . $row['handClassDate'] . "</li>      
                    </ul>
                   </td> 
                   </tr>";
}

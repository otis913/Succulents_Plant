<?php
include('./SignSql.php');

$sql = 'SELECT *
            FROM 
            SUCCULENTS_PLANT.MEMBER';

$statement = $pdo->prepare($sql);
$statement->execute();

//抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();

echo "<tr class='table-dark'>
            <th>會員編號</th> 
            <th>會員帳號</th>
            <th>會員姓名</th>
            <th>帳號狀態</th>
            <th>創建時間</th>
            <th>停權與否</th>
          </tr>";

foreach ($data as $index => $row) {
    echo "<tr class='table-light'>
              <td>" . $row["memberNO"] . "</td>";
    echo "<td>" . $row["memberAccount"] . "</td>";
    echo "<td>" . $row["memberName"] . "</td>";

    $memberStatus = $row["memberStatus"];
    switch ($memberStatus) {
        case "0":
            $memberStatus = '停權';
            break;
        case "1":
            $memberStatus = '正常';
            break;
        default:
            $memberStatus = '錯誤';
    };
    echo "<td>" . $memberStatus . "</td>";
    echo "<td>" . $row["memberDate"] . "</td>";
    echo "<td>
            <div class='custom-control custom-switch'>
                <input type='checkbox' class='custom-control-input' id='customSwitch1'>
                <label class='custom-control-label' for='customSwitch1'></label>
            </div>    
        </td>";
}

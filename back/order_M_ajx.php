<?php
include('./SignSql.php');

$sql = 'SELECT * 
             FROM SUCCULENTS_PLANT.ORDER o
             JOIN ORDER_DETAIL od on o.orderNO = od.FK_ORDER_DETAIL_orderNO';

$statement = $pdo->prepare($sql);
$statement->execute();
echo "<tr class='table-dark'>
            <th>訂單編號</th>
            <th>會員編號</th>
            <th>訂單日期</th>
            <th>付款方式</th>
            <th>訂單付款狀態</th>
            <th>訂單狀態</th>
            <th>修改訂單狀態</th>
          </tr>";

//抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();


foreach ($data as $index => $row) {
    echo "<tr class='table-light'>
              <td>" . $row["orderNO"] . "</td>";
    echo "<td>" . $row["FK_ORDER_memberNO"] . "</td>";
    echo "<td>" . $row["orderDate"] . "</td>";
    echo "<td>" . $row["orderMethod"] . "</td>";
    echo "<td>" . $row["orderPayStatus"] . "</td>";
    echo "<td>" . $row["orederStatus"] . "</td>";
    echo "<td>
              <div class='custom-control custom-switch'>
                  <input type='checkbox' class='custom-control-input' id='customSwitch1'>
                  <label class='custom-control-label' for='customSwitch1'></label>
              </div>
              </td>
        </tr>";
}

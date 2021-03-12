<?php
include('./SignSql.php');

$sql = 'SELECT *
             FROM SUCCULENTS_PLANT.ORDER o
             left JOIN ORDER_DETAIL od on o.orderNO = od.FK_ORDER_DETAIL_orderNO';
// $sql = 'SELECT orderNO, 
//                FK_ORDER_DETAIL_orderNO,
//                orderDate,
//                orderMethod,
//                orderPayStatus,
//                orederStatus
//              FROM SUCCULENTS_PLANT.ORDER o
//              left JOIN ORDER_DETAIL od on o.orderNO = od.FK_ORDER_DETAIL_orderNO';


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

    $orderMethod = $row["orderMethod"];
    switch ($orderMethod) {
        case "1":
            $orderMethod = "ATM匯款";
            break;
        case "2":
            $orderMethod = "信用卡匯款";
            break;
    };
    echo "<td>" . $orderMethod . "</td>";

    $orderPayStatus = $row["orderPayStatus"];
    switch ($orderPayStatus) {
        case "1":
            $orderPayStatus = "未付款";
            break;
        case "2":
            $orderPayStatus = "已付款";
            break;
    };
    echo "<td>" . $orderPayStatus . "</td>";

    $orderPayStatus = $row["orderPayStatus"];
    switch ($orderPayStatus) {
        case "1":
            $orderPayStatus = "訂單處理中";
            break;
        case "2":
            $orderPayStatus = "訂單完成";
            break;
        case "3":
            $orderPayStatus = "訂單取消";
            break;
    };
    echo "<td>" . $orderPayStatus . "</td>";

    echo "<td>
              <div class='custom-control custom-switch'>
                  <input type='checkbox' class='custom-control-input' id='customSwitch1'>
                  <label class='custom-control-label' for='customSwitch1'></label>
              </div>
              </td>
        </tr>";
}

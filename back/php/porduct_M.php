<?php
    include('./SignSql.php');

     $sql = 'SELECT * 
             FROM SUCCULENTS_PLANT.PRODUCT';
  
    $statement = $pdo->prepare($sql);    
    $statement->execute();  
    echo "<tr class='table-dark'>
            <th>商品編號</th>
            <th>商品類別</th>
            <th>商品名稱</th>
            <th>商品庫存量</th>
            <th>商品圖片01</th>
            <th>商品狀態</th>
            <th>是否編輯</th>
          </tr>";

    //抓出全部且依照順序封裝成一個二維陣列
    $data = $statement->fetchAll();

   
    foreach($data as $index => $row){
        echo "<tr class='table-light'>
              <td>".$row["productNO"]."</td>";

        // echo "<td>".$row["productType"]."</td>";

        $productType=$row["productType"];
        switch ($productType) {
            case "0":
                $productType = '植物';
            break;
            case "1":
                $productType = '裝飾品';
            break;
            case "2":
                $productType = '器皿';
            break;    
            case "3":
                $productType = '賀卡';
            break;
            case "4":
                $productType = '客製植物';
            break;
            case "5":
                $productType = '課程';
            break;
            default:
                $productType = '錯誤';
        };
        echo "<td>".$productType."</td>";



        echo "<td>".$row["productName"]."</td>";
        echo "<td>".$row["productNumber"]."</td>";
        echo "<td>".$row["productImg01"]."</td>";
        echo "<td>".$row["orederStatus"]."</td>";       
        echo "<td>
                <a href="./porduct_edit.html">編輯</a>
              </td>
        </tr>";
    }
?>

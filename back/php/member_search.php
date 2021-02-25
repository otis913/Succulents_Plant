<?php
    include('./SignSql.php');

    // $sql = "SELECT * FROM member";
    // $sql = "SELECT * FROM member WHERE Name = '".$account."' and PWD = '".$pwd."' ";  //作業
    

    // $sql = 'SELECT 
    //          e.member_id, e.name, e.account, e.password, e.email, 
    //          e.level, e.blacklist, e.introduction, count(d.work_id),
    //          e.join_date
    //         FROM 
    //             member e
    //             join work d
    //                 on e.member_id = d.member_id
    //         group by member_id';

    $sql = 'SELECT *, 
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
    
    foreach($data as $index => $row){
        echo "<tr class='table-light'><td>".$row["member_id"]."</td>";
        echo "<td>".$row["memberNO"]."</td>";
        echo "<td>".$row["memberAccount"]."</td>";
        echo "<td>".$row["memberName"]."</td>";
        echo "<td>".$row["memberStatus"]."</td>";
        echo "<td>".$row["memberDate"]."</td>";
        echo "<td>
            <div class='custom-control custom-switch'>
                <input type='checkbox' class='custom-control-input' id='customSwitch1'>
                <label class='custom-control-label' for='customSwitch1'></label>
            </div>
        </td>";
    }
?>

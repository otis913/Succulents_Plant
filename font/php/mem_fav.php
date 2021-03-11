<?php
  

        //資料庫-------------------------------------------
       
$server_name ='localhost';
$username ='albert_huang';
$password='albert';
$db_name='SUCCULENTS_PLANT';

$conn = new mysqli($server_name,$username,$password,$db_name);

if(!empty($conn->connect_error)){
    die('資料庫連線錯誤:'.$conn->connect_error);
}

$conn->query('SET NAMES UTF8');
$conn->query('SET time_zone ="+8:00"');



        //建立SQL語法
        $sql = "SELECT productName,productPrice,productImg01,productNO from SUCCULENTS_PLANT .PRODUCT p join FAVORITE f on p.PRODUCTNO = f.FK_FAVORITE_productNO";
        //執行
      //   $statement  = $conn->prepare($sql);
      // //   $statement->bindValue(1,"%".$ID."%");
      //   $statement->execute();
      //   //抓出全部且依照順序封裝成一個二為陣列
      //   $data = $statement->fetc();
      $result = $conn->query($sql);
      // $row =  $result->fetch_assoc();
      if($result){
        while( $row =  $result->fetch_assoc()){

            echo '<li>';
            echo '<img src="./img/product/'.$row["productImg01"].'">';
            echo '<p class="name">'.$row["productName"].'</p>';
            echo '<p>$'.$row["productPrice"].'</p>';
            echo '<p class="productNO" style="display:none">'.$row["productNO"].'</p>';
            echo '<div class="mem_love_btn">';
            echo '<i class="fas fa-trash-alt aa" ></i>';
            echo '<div class="gobuy">';
            echo '<a href="custom.html">前往購買</a>';
            echo '</div>';
            echo '</div>';
            echo '</li>';
              
        }
      }
        // foreach($row as $index =>$key){
        //     echo '<li>';
        //     echo '<img src="'.$key["productImg01"].'">';
        //     echo '<p class="name">'.$key["productName"].'</p>';
        //     echo '<p>$'.$key["productPrice"].'</p>';
        //     echo '<p class="productNO" style="display:none">'.$row["productNO"].'</p>';
        //     echo '<div class="mem_love_btn">';
        //     echo '<i class="fas fa-trash-alt aa" ></i>';
        //     echo '<div class="gobuy">';
        //     echo '<a href="custom.html">前往購買</a>';
        //     echo '</div>';
        //     echo '</div>';
        //     echo '</li>';
        // };
      //   foreach($data as $index =>$row){
      //    echo "<ul>";  
      //    echo '<li class="mem_time">
      //    <div class="tit">訂單時間</div>'.$row["orderDate"].'</li>';       
      //    echo '<li>'.$row["orderNo"].'</li>';       
      //    echo '<li>'.$row["orderMethod"].'</li>';       
      //    echo '<li>'.$row["orderTotal"].'</li>';       
      //    echo '<li>'.$row["orederStatus"].'</li>';       
      //    echo "</ul>";
      // }

//       <li>
//       <img src="./img/product_1.png" alt="">
//       <p>黃金山脈 – 金晃丸盆栽</p>
//       <p>NT$1850</p>
//       <div class="mem_love_btn">
//           <i class="fas fa-trash-alt"></i>
//           <div class="gobuy">
//               <a href="custom.html">前往購買</a>
//           </div>
//       </div>
//   </li>

<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "00000";
$db_select = "SUCCULENTS_PLANT";

//建立資料庫連線物件
$dsn = "mysql:host=" . $db_host . ";dbname=" . $db_select;
//建立PDO物件，並放入指定的相關資料
$pdo = new PDO($dsn, $db_user, $db_pass);

// ---------------------------------------
$sql = 'SELECT *
     from HANDCLASS
     where handClassNO = 2';

$statement = $pdo->prepare($sql);

$statement->execute();
$data = $statement->fetchAll();
// ---------------------------------------
foreach ($data as $index => $row) {

  echo "<div class='handmake_section ex20px'>
  <div class='handmake_left ex20px'>
    <div class='HM_class'>
      <h1>選擇課程</h1>
      <div class='HM_class_btn'>
        <button class='HDclass01'>手捏陶器 + 多肉組盆</button>
        <button class='HDclass02'>諧意繪泥 & 療癒植栽</button>
        <button class='HDclass03'>室內多肉照顧課</button>
      </div>
    </div>

    <div class='HM_date_number'>
      <div class='HM_Date '>
        <h1>選擇日期</h1>
        <div class='HM_Date_select'>
          <select name='handClassDate' class='custom_select ' id=''>
            <option name='handClassDate' value='2021/4/01'>2021/4/01</option>
            <option name='handClassDate' value='2021/4/011'>2021/4/11</option>
            <option name='handClassDate' value='2021/4/028'>2021/4/28</option>
          </select>
        </div>
      </div>

      <div class='HM_Number'>
        <h1>選擇人數</h1>
        <div class='HM_choseNumber'>
          <i class='fas fa-minus'></i>
          <input type='number' value='1' min='1' class='number_people'>
          <i class='fas fa-plus'></i>
        </div>
      </div>
    </div>

    <div class='handmake_left_text ex20px'>
      <h1>
        尚於<span>" . $row['handClassPeople'] . "</span>人可報名
      </h1>
      <h1>
        課程費用<span>" . $row['handClassPrice'] . "</span>/人
      </h1>
    </div>

    <!-- 黃色bubble按鈕 start -->
    <div class='bubble_btnn SignUp '>
      <svg xmlns='http://www.w3.org/2000/svg' version='1.1' class='goo'>
        <defs>
          <filter id='goo'>
            <feGaussianBlur in='SourceGraphic' stdDeviation='10' result='blur' />
            <feColorMatrix in='blur' mode='matrix' values='1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9'
              result='goo' />
            <feComposite in='SourceGraphic' in2='goo' />
          </filter>
        </defs>
      </svg>

      <span class='button--bubble__container'>
        <a href='' class='button_y button--bubble'>
          確認報名
        </a>
        <span class='button--bubble__effect-container'>
          <span class='circle top-left'></span>
      <span class='circle top-left'></span>
      <span class='circle top-left'></span>

      <span class='button effect-button'></span>

      <span class='circle bottom-right'></span>
      <span class='circle bottom-right'></span>
      <span class='circle bottom-right'></span>
      </span>
      </span>
    </div>
    <!-- 黃色bubble按鈕 end -->
  </div>

  <div class='handmake_right '>
    <img src='./img/handclass/" . $row['handClassPic'] . "' alt=''>
    <div class='handmake_right_main'>
      <h1>開課時間/地點</h1>
      <p>" . $row['handClassDate'] . "</p>
      <p>台北市大安區金山南路二段123巷50號</p>

      <h1>課程介紹</h1>
      <ul>
        <li>" . $row['handClassContent'] . "</li>        
      </ul>
      <div class='notice'>
        <h1>注意事項</h1>
        <div class='notice_main'>
          <ul>
            <li>1.開課日前3天,不予退費及更改梯次,如無法參加課程,請將名額轉讓給其他人參加</li>
            <li>2.如課程招生未滿或因天災不可抗力因素,我們將於2天前主動聯繫協助更改梯或全額退費</li>
            <li>3.若遲到30分鐘則無法參與課程,視同取消</li>
          </ul>
        </div>
      </div>
    </div>

    <div class='handmake_left_text handmark_text_RWD ex20px'>
      <h1>尚於<span>10</span>人可報名</h1>
      <h1>課程費用<span>$2800</span>/人</h1>
    </div>

    <!-- 黃色bubble按鈕 start -->
    <div class='bubble_btnn SignUp_RWD '>
      <svg xmlns='http://www.w3.org/2000/svg' version='1.1' class='goo'>
        <defs>
          <filter id='goo'>
            <feGaussianBlur in='SourceGraphic' stdDeviation='10' result='blur' />
            <feColorMatrix in='blur' mode='matrix' values='1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9'
              result='goo' />
            <feComposite in='SourceGraphic' in2='goo' />
          </filter>
        </defs>
      </svg>

      <span class='button--bubble__container'>
        <a href='' class='button_y button--bubble'>
          確認報名
        </a>
        <span class='button--bubble__effect-container'>
          <span class='circle top-left'></span>
      <span class='circle top-left'></span>
      <span class='circle top-left'></span>

      <span class='button effect-button'></span>

      <span class='circle bottom-right'></span>
      <span class='circle bottom-right'></span>
      <span class='circle bottom-right'></span>
      </span>
      </span>
    </div>
    <!-- 黃色bubble按鈕 end -->
  </div>
</div>";
}

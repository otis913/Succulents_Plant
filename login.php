<?php
require_once('./conn.php');

// $result = $conn->query("SELECT * FROM `MEMBER` ");
// if (!$result) {
//   die($conn->error);
// }

// while ($row = $result->fetch_assoc()) {
//   echo "id:" . $row['memberNO'];
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>肉多不怪-部落格內頁板型2</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
        integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    </link>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- aos動畫效果 -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- 自己的css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.js"></script>
</head>

<body>

    <!-- header開始，要放在body下面 -->
    <div class="header_bg">
        <div class="headers">
            <div class="navs">
               <a href="./main.html"><img src="img/logo.png" alt=""></a>
                <ul>
                    <li><a href="./shop.html">商品專區</a></li>
                    <li><a href="./custom.html">客製多肉</a></li>
                    <li><a href="./mindtest.html">心理測驗</a></li>
                    <li><a href="./HandMake.html">手作課程</a></li>
                    <li><a href="./blog_all.html">多肉知識</a></li>
                </ul>
            </div>  
            <ol>
                <li><a href=""><i class="fas fa-shopping-basket"></i></a></li>
                <li><a href="./member.html"><i class="fas fa-user"></i></a></li>
            </ol>
            <div class="ham">
                <span></span> 
                <span></span> 
                <span></span>
            </div>
        </div>
    </div> 
    <!-- header結束 -->



    <!-- section 的範圍為全螢幕，主要用來放background-image的-->
    <!-- 要新增背景圖請另外加class ex:class="full_wrapper" -->
    <section class="full_wrapper">
        
        <!-- 麵包屑在這 -->
        <article class="articlebread">
            <div class="bread">
                <a href="">首頁<a> > <a href="">部落格</a> > <a>部落格版型02</a>
            </div>
        </article>

        <!-- article 的內容的安全範圍(1200px)，每個區塊都用一個article包起來 -->
        <div class="Signin_bg">
            <article class="Signin_enter">
                <div class="Signin_enter_bg">
                    <ul class="Signin_enter_bg_login">
                        <li class="Signin_login_btn">登入</li>
                        <li class="Signin_reg_btn">註冊</li>
                        <img class="Signin_enter_bg_x" src="img/Signin/X.png">
                    </ul>
                    <!-- 登入 -->
                    <form class="Signin_login Signin_block" method="POST" action="./php/handleLogin.php" >
                        
                            <ul class="Signin_enter_text">
                                <li>帳號: <br>
                                    <input class="Signin_id_text" type="text" name="account" >
                                    <!-- <span style="color: red;">請輸入帳號</span> -->
                                </li>
                                <li>密碼: <br>
                                    <input class="Signin_password_text" type="password" name="password" >
                                    <!-- <span style="color: red;">請輸入密碼</span> -->
                                </li>
                                <small><a href="">忘記密碼?</a></small>
                            </ul>
                        <input class="btn_yellow" type="submit" value="送出" >
                                <!-- <a class="Signin_enter_btn" href="login.php?emmberNO=7">登入</a> -->
                                <!-- <a class="Signin_enter_btn" >登入</a> -->
                        </input> 
                        <div class="error">

                        </div>  
                    </form> 
                    <!-- 註冊 -->
                    <form class="Signin_reg" method="POST" action="./php/add.php">
                        <ul class="registered_enter_text">
                            <li>姓名: <br>
                                <input type="text" name="name" >
                            </li>
                            <li>帳號: <br>
                                <input type="text" class="registered_ID" name="account">
                            </li>
                            <li>設定密碼:<br>
                                <input type="password" v-model="form_value.password.value" name="password" >
                                <span v-if="form_value.password.check === false">密碼錯誤</span>
                            </li>
                            <!-- <li>密碼確認: <br>
                                <input type="password">
                            </li> -->
                            <li>地址: <br>
                                <input type="text" name="address" >

                            </li>
                            <li>電話: <br>
                                <input type="text" name="phone" >
                            </li>
                            

                        </ul>
                       <input class="btn_yellow" type="submit" value="送出" >
                            <a href="#" @click="check_all()">註冊會員</a>
                       </input>
                       <span class="error"></span>
                    </form>
                </div>
            </article>
        </div>        




        <!-- 用來調整上下間隔高度的，高度目前設定為100px，一定要放在section裡 -->
        <div class="ex"></div>
        <div class="ex"></div>
        <div class="ex"></div>
        <div class="ex"></div>
        <div class="ex"></div>
        <div class="ex"></div>
    </section>







    <footer>
        <article class="memberfooter">
            <div class="brand_info">
                <ul>
                    <li><a href="">商品專區</li>
                    <li><a href="">客製多肉</li>
                    <li><a href="">心理測驗</li>
                    <li><a href="">手作課程</li>
                    <li><a href="">部落格</li>
                </ul>

                <ol>
                    <li><a href=""><i class="fab fa-facebook-square"></i></li>
                    <li><a href=""><i class="fab fa-youtube"></i></li>
                    <li><a href=""><i class="fab fa-twitter"></i></li>
                </ol>

                <p>ⓒ Copyright Shimabara Shokuhin All Rights Reserved. </p>
            </div>

            <div class="line"></div>

            <div class="logo_info">
                <a href=""><img src="img/icon_logo_footer.png" alt="">
                    <p>tel : 02-2338-8365</p>
                    <p>e-mail : Succulents Monster@gmail.com </p>
                    <p>address : 104 台北市中山區南京東路三段219號</p>
                    <p>open : 週一至週日 11:00 – 18:30</p>

            </div>

        </article>

    </footer>
    <!-- footer end -->

    

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- aos動畫效果 -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- bubble_btn動畫效果 -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="js/bubblebtn.js"></script>

    <!-- 自已的js -->
      <!-- 每一個頁面都要引入以下這兩個js -->
      <script src="./js/header.js"></script>
      <script src="./js/qa.js"></script>
      
    <script src="js/login.js"></script>
    <!-- <script src="js/your.js"></script> -->
    <script>
        //==========
        // let xhr = new XMLHttpRequest();
        // xhr.open('get','http://localhost/succulents_plant_new4/font/php/add.php',true);
        // xhr.send(null);
        // xhr.onload=function(){
        //     let res = xhr.response;
        //     // console.log(res);
        //     let error = document.querySelector('.error');
        //     error.innerHTML = res
        // }
        //==========

        new Vue({
            el: '.Signin_bg',
            data(){
                return {
                    // 'fail'
                    // 'success'
                    date_check:'false',
                    form_value:{
                        selectedYear:{
                            value:null,
                            check:null
                        },
                        selectedMonth:{
                            value:null,
                            check:null
                        },
                        selectedDate:{
                            value:null,
                            check:null
                        },
                        password:{
                            value:null,
                            check:null
                        }
                    },
                years: [1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021],
                months: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'], 
                day: {'1月': {day:31},'2月': {day:28},'3月': {day:31},'4月': {day:31},'5月': {day:31},'6月': {day:31},'7月': {day:31},'8月': {day:31},'9月': {day:31},'10月': {day:31},'11月': {day:31},'12月': {day:31}}, 
                }
            },
            methods: {
                check_all(){

                    
                    if(this.form_value.selectedDate.value !== null){
                        this.date_check='success'

                    }else{
                        this.date_check= 'fail'
                    }
                   

                }
            },
        })
    </script>
</body>

</html>
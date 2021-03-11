<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>客製化多肉</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
        integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    </link>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- vue cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.js"></script>

    <!-- tweenmax動畫效果 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

    <!-- aos動畫效果 -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- 自己的css -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body class="full_wrapper">

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

    <section class="custom_pos">

        <div class="ex"></div>

        <article>
            <div class="bread">
                <a href="./main.html">首頁</a> > <a href="">客製多肉</a>
            </div>
        </article>


        <article class="custom_wrapper">
            <div class="custom_block7">
                <!-- 爪子 -->
                <!-- <div class="custom_paw">
                    <img src="img/custom/paw.png" alt="">
                </div> -->

                <!-- 爪子 -->
                <div class="custom_paw">
                    <div class="custom_paw_out">
                        <img src="img/custom/paw_l.png" alt="" class="paw_l">
                        <img src="img/custom/paw_main.png" alt="" class="paw_m">
                        <img src="img/custom/paw_r.png" alt="" class="paw_r">  
                    </div>
                </div>

                <div class="custom_draw">
                    <!-- 禮物上半部 -->
                    <img src="img/custom/ribbon.png" alt="" class="custom_gift_ribbon">
                    <img src="img/custom/gift_top.png" alt="" class="custom_gift_top">                   
                  
                    <div class="custom_draw_plant">
                        <img src="img/custom/custom_01.png" alt="" id="custom_01">
                        <img src="img/custom/custom_02.png" alt="" id="custom_02">
                        <img src="img/custom/custom_03.png" alt="" id="custom_03">
                        <img src="" alt="" id="decoration">
                    </div>

                    <div class="custom_draw_pot ">
                        <img src="img/custom/pot_01.png" alt="" id="pot">
                    </div>
                </div> 

                <!-- 禮物底部 -->
                <img src="img/custom/gift_bottom.png" alt="" class="custom_gift_bottom">
               
                <div class="custom_price">
                    每盆售價<br> $<span>1660</span>元
                </div>

                <!-- bubble按鈕 start -->
                <div class="bubble_btnn">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
                      <defs>
                        <filter id="goo">
                          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                          <feComposite in="SourceGraphic" in2="goo"/>
                        </filter>
                      </defs>
                    </svg>
                    
                    <span class="button--bubble__container">
                      <a ref="" class="button button--bubble">
                        確認送出
                      </a>
                      <span class="button--bubble__effect-container">
                        <span class="circle top-left"></span>
                        <span class="circle top-left"></span>
                        <span class="circle top-left"></span>
                    
                        <span class="button effect-button"></span>
                    
                        <span class="circle bottom-right"></span>
                        <span class="circle bottom-right"></span>
                        <span class="circle bottom-right"></span>
                      </span>
                    </span>
                </div>
                <!-- bubble按鈕 end -->

                <div class="custom_btn">
                    <div class="btn_delet turn180"></div>
                    <i class="fas fa-trash-alt btn_delet" id="delet"></i>
                </div>

            </div>

            <div class="custom_block3 ">
                <img src="img/custom/door.png" alt="">
               
                <div class="custom_product">
                    <ul class="custom_product_type">
                        <li>多<br class="pconly">肉</li>
                        <li class="bg_gold">裝<br class="pconly">飾</li>
                        <li class="bg_green">器<br class="pconly">皿</li>    
                    </ul>

                    
                    <div class="custom_product_items">
                        <div class="custom_say">
                            <p>請選擇<b>3</b>種</p> 
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <ul class="_onon pp" >
                            <li><a ref=""><img src="img/custom/custom_01.png" alt="">銀月</a></li>
                            <li><a ref=""><img src="img/custom/custom_02.png" alt="">大統領</a></li>
                            <li><a ref=""><img src="img/custom/custom_03.png" alt="">波露</a></li>
                            <li><a ref=""><img src="img/custom/custom_04.png" alt="">金手指</a></li>
                            <li><a ref=""><img src="img/custom/custom_05.png" alt="">短毛丸</a></li>
                            <li><a ref=""><img src="img/custom/custom_06.png" alt="">龍城</a></li>
                            <li><a ref=""><img src="img/custom/custom_07.png" alt="">姬朧月</a></li>
                            <li><a ref=""><img src="img/custom/custom_08.png" alt="">白烏帽子</a></li>
                            <li><a ref=""><img src="img/custom/custom_09.png" alt="">若綠</a></li>
                            <li><a ref=""><img src="img/custom/custom_010.png" alt="">綠之鈴</a></li>
                        </ul>

                        <ul class="dd">
                            <li><a ref=""><img src="img/custom/dec_01.png" alt="">巴哥陶偶</a></li>
                            <li><a ref=""><img src="img/custom/dec_02.png" alt="">鬧脾氣艾摩</a></li>
                            <li><a ref=""><img src="img/custom/dec_03.png" alt="">歐式路燈</a></li>
                            <li><a ref=""><img src="img/custom/dec_04.png" alt="">水泥仙人掌</a></li>
                            <li><a ref=""><img src="img/custom/dec_05.png" alt="">冒煙小房子</a></li>
                            <li><a ref=""><img src="img/custom/dec_06.png" alt="">木製鯉魚旗</a></li>
                        </ul>

                        <ul class="bb">
                            <li><a ref=""><img src="img/custom/pot_01.png" alt="">白色世界</a></li>
                            <li><a ref=""><img src="img/custom/pot_02.png" alt="">雙色鑽石</a></li>
                            <li><a ref=""><img src="img/custom/pot_03.png" alt="">小公寓</a></li>
                            <li><a ref=""><img src="img/custom/pot_04.png" alt="">手拉坏半瓷</a></li>
                            <li><a ref=""><img src="img/custom/pot_05.png" alt="">金色陛下</a></li>
                            <li><a ref=""><img src="img/custom/pot_06.png" alt="">雙層鮮奶油</a></li>
                        </ul>
                    </div>
                    
                </div>

            </div>
            
        </article>
 
        <div class="ex"></div>
        <div class="ex"></div>


        <!-- 背景泡泡動畫 start-->
        <div class="circle_block -left_top">
            <div class="circle_green2"></div>
            <div class="circle_gold"></div>
        </div>

        <div class="circle_block -right_bottom">
            <div class="circle_deepgreen"></div>
            <div class="circle_green1"></div>
        </div>

        <!-- 背景泡泡動畫 end-->


        <!-- 製作賀卡 彈跳視窗 -->
        <div class="c_wrapper">
            <div class="c_lightbox" id="cus_box1">
                <i class="fas fa-times"></i>
                <p>您的客製多肉已加入購物車<br>單筆客製訂單附贈一張賀卡<br>有需要訂製賀卡嗎？</p>
                <div class="c_btn_wra">
                   
                    <div class="bubble_btnn">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
                          <defs>
                            <filter id="goo">
                              <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                              <feComposite in="SourceGraphic" in2="goo"/>
                            </filter>
                          </defs>
                        </svg>
                        
                        <span class="button--bubble__container">
                          <a href="main.html" class="button button--bubble">
                            不需要
                          </a>
                          <span class="button--bubble__effect-container">
                            <span class="circle top-left"></span>
                            <span class="circle top-left"></span>
                            <span class="circle top-left"></span>
                        
                            <span class="button effect-button"></span>
                        
                            <span class="circle bottom-right"></span>
                            <span class="circle bottom-right"></span>
                            <span class="circle bottom-right"></span>
                          </span>
                        </span>
                    </div>
                   

                    
                    <div class="bubble_btnn" id="cus_card">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
                          <defs>
                            <filter id="goo">
                              <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                              <feComposite in="SourceGraphic" in2="goo"/>
                            </filter>
                          </defs>
                        </svg>
                        
                        <span class="button--bubble__container">
                          <a ref="" class="button button--bubble">
                            前往訂製賀卡
                          </a>
                          <span class="button--bubble__effect-container">
                            <span class="circle top-left"></span>
                            <span class="circle top-left"></span>
                            <span class="circle top-left"></span>
                        
                            <span class="button effect-button"></span>
                        
                            <span class="circle bottom-right"></span>
                            <span class="circle bottom-right"></span>
                            <span class="circle bottom-right"></span>
                          </span>
                        </span>
                    </div>
                    
                </div>
            </div>

            <div class="c_lightbox" id="cus_box2">
                <i class="fas fa-times"></i>
                <p style="font-weight: 700;">賀卡訂製</p>
                <?php
                if(!isset($_POST['submit'])){
                //如果沒有表單提交，顯示一個表單
                ?>
                <form action="" method="post">
                    <ul>
                        <li>
                            <label for="">收禮人 / 公司名 / 店名資訊</label>
                            <input type="text" maxlength="30" name="cardReceivePeople">
                        </li>
                        <li>
                            <label for="">賀詞內容</label>
                            <textarea name="cardSendPeople" id="" cols="2" rows="4" placeholder="限制字數30字以內" maxlength="30"></textarea>
                        </li>
                        <li>
                            <label for="">送禮人資訊</label>
                            <input type="text" maxlength="30" name="cardSendPeople">
                        </li>

                        <li>
                            <label for="">賀卡樣式(4選1)</label>
                            <ol>
                                <li>
                                    <img src="./img/custom/card_01.png" alt="">Ａ.幸福青鳥
                                    <input type="hidden" name="cardTYPE" value="1">
                                </li>
                                <li>
                                    <img src="./img/custom/card_02.png" alt="">B.綠意盎然
                                    <input type="hidden" name="cardTYPE" value="2">
                                </li>
                                <li>
                                    <img src="./img/custom/card_03.png" alt="">C.小草黃了
                                    <input type="hidden" name="cardTYPE" value="3">
                                </li>
                                <li>
                                    <img src="./img/custom/card_04.png" alt="">D.銀色大地
                                    <input type="hidden" name="cardTYPE" value="4">
                                </li>
                            </ol>
                        </li> 
                        
                    </ul>   
                    <input type="submit" name="submit" value="確認送出" class="c_submit" /> 
                </form>    
                <?php
                }
                else
                {
                //如果提交了表單
                //資料庫連線引數
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "test";
                // 何問起 hovertree.com
                //取得表單中的值，檢查表單中的值是否符合標準，並做適當轉義，防止SQL注入
                $country = ($_POST['cardReceivePeople']);
               // mysql_escape_string($_POST['country']);
                $animal = ($_POST['cardContentText']);
              //  mysql_escape_string($_POST['animal']);
                $cname = ($_POST['cardSendPeople']);
                $ctype = ($_POST['cardTYPE']);
              //  mysql_escape_string($_POST['cname']);
              //實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
                $connect = new mysqli($host, $user, $pass, $db);
                
                if ($connect->connect_error) {
                    die("連線失敗: " . $connect->connect_error);
                }
                echo "連線成功";

                $connect->query("SET NAMES 'utf8'");
                
                $insertSql = "INSERT INTO card (cardTYPE,cardReceivePeople, cardContentText, cardSendPeople,memberNO,productNO) VALUES ('$ctype','$country','$animal', '$cname',22,33)";
                $status = $connect->query($insertSql);
                
                if ($status) {
                    echo '新增成功';
                } else {
                    echo "錯誤: " . $insertSql . "<br>" . $connect->error;
                }
                }
                ?>
                

            </div>
        </div>
        



    </section>



    <!-- footer start -->
    <!-- <div class="plant_info">
        <img src="img/icon_plant_footer.png" alt="">
    </div> -->

        <!-- 購物車 側邊欄  開始-->
        <div class="order">
            <i class="fas fa-window-close"></i>
            <h2>購物清單</h2>
            <div class="orderPith"></div>
            <div class="order-custom">
                <i class="fa fa-times" aria-hidden="true"></i>
                <div class="order_custom_con">
                    <img src="img/shopcart/assets_5.png" alt="">
                    <div class="txt">
                        <h4>黃金山脈-金 晃丸盆栽</h4>
                        <h2>賀卡訂製</h2>
                        <p>NT$1850</p>
                        <div id="app8">
                            <div class="shop">
                                <i @click="counter += -1" class="fa fa-minus" aria-hidden="true"></i> 
                                <div class="counter">{{counter}}</div>
                                <i @click="counter += 1" class="fa fa-plus" aria-hidden="true"  ></i>          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-custom-pro">
                <i class="fa fa-times" aria-hidden="true"></i>
                <div class="order_custom_con_con">
                    <img src="img/shopcart/assets_5.png" alt="">
                    <div class="txt">
                        <h4>客製化多肉</h4>
                        <h2>賀卡訂製</h2>
                        <p>NT$1850</p>
                        <div id="app9">
                            <div class="shop">
                                <i @click="counter += -1" class="fa fa-minus" aria-hidden="true"></i> 
                                <div class="counter">{{counter}}</div>
                                <i @click="counter += 1" class="fa fa-plus" aria-hidden="true"  ></i>          
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail">
                    <h2>詳細內容</h2>
                    <p>黃金山脈多肉 x1</p>
                    <p>黃金山脈多肉 x1</p>
                    <p>黃金山脈多肉 x1</p>
                    <p>器皿-水泥器皿 x1</p>
                    <p>裝飾品-小蘑菇 x1</p>
                </div>
                
            </div>
            <div class="amount">
                <h2 class="coin">金額
                    <p>$3600</p>
                </h2>
                <h2 class="sale">優惠
                    <p>-＄20</p>
                </h2>
            </div>
            <div class="total">
             <h4>總金額</h4>
             <p>$3580</p>
            </div>
            <a href=""></a>
            <button class="checkbuy"> <a href="./shopCart.html">確定購買</a></button>
        </div>
    
         <!-- 購物車 側邊欄  結束-->

   <!-- QA仙人掌開始 -->
   <section class="qa_pos">
    <div class="qa_wrapper">
        <img src="img/QA/QA_LOGO.png" alt="">
    </div>   
    
    <div class="qaBg_wrapper" id="app">
        <div class="qaBg">
          <img src="img/QA/QA_close.png" alt="" class="cancel">
          <ul>
            <li class="question">
                <h2>Q:想更換或取消訂單，怎麼辦呢？</h2>
                <p>A:植栽沒有提供七天鑑賞期，恕無法退貨。</p>
            </li>
            <li class="question">
                <h2>Q:想更換或取消訂單，怎麼辦呢？</h2>
                <p>A:植栽沒有提供七天鑑賞期，恕無法退貨。</p>
            </li>
            <li class="question">
              <h2>Q:想更換或取消訂單，怎麼辦呢？</h2>
              <p>A:植栽沒有提供七天鑑賞期，恕無法退貨。</p>
            </li>

            <div class="cusQUS" >{{message}}</div>
            <div class="answer">we will hope you</div>
          </ul> 
          
          <div class="cusQ" >
              <div class="adimit">
                <input type="text" v-model="message">
                <button class="btn">送出</button>
              </div>
          </div>
        
        </div>
    
    </div>
</section>
<!-- QA仙人掌結束 -->


    <!-- footer start -->
    <footer>
        <article>
            <div class="brand_info">
                <ul>
                    <li><a href="./shop.html">商品專區</a></li>
                    <li><a href="./custom.html">客製多肉</a></li>
                    <li><a href="./mindtest.html">心理測驗</a></li>
                    <li><a href="./HandMake.html">手作課程</a></li>
                    <li><a href="./blog_all.html">多肉知識</a></li>
                </ul>    
  
                <ol>
                    <li><a ref=""><i class="fab fa-facebook-square"></i></a></li>
                    <li><a ref=""><i class="fab fa-youtube"></i></a></li>
                    <li><a ref=""><i class="fab fa-twitter"></i></a></li>
                </ol>
  
                <p>ⓒ Copyright Shimabara Shokuhin All Rights Reserved. </p>
            </div>
  
            <div class="line"></div>
  
            <div class="logo_info">
                <a href="main.html"><img src="img/icon_logo_footer.png" alt=""></a>
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

    <!-- jquery-ui -->
    <script src="js/jquery-ui.min.js"></script>

    <!-- aos動畫效果 -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- bubble_btn動畫效果 -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="js/bubblebtn.js"></script>

    <script>
        $(document).ready(function () {

            //客製多肉商品區
            $('.custom_product_type li:nth-child(1)').click(function () {    
                $('.custom_product_items ul:first').addClass('_onon');
                $('.custom_product_items ul:first').siblings().removeClass('_onon');  
                $('.custom_product_items').removeClass('bg_green');  
                $('.custom_product_items').removeClass('bg_gold');
                $('.custom_say p').html('請選擇<b>3</b>種');    
                   
            });
            $('.custom_product_type li:nth-child(2)').click(function () {    
                $('.custom_product_items ul:nth-child(3)').addClass('_onon');
                $('.custom_product_items ul:nth-child(3)').siblings().removeClass('_onon');  
                $('.custom_product_items').addClass('bg_gold');  
                $('.custom_product_items').removeClass('bg_green');  
                $('.custom_say p').html('請選擇<b>1</b>種');     
                   
            });
            $('.custom_product_type li:nth-child(3)').click(function () {    
                $('.custom_product_items ul:last').addClass('_onon');
                $('.custom_product_items ul:last').siblings().removeClass('_onon');     
                $('.custom_product_items').addClass('bg_green');  
                $('.custom_product_items').removeClass('bg_gold');   
                $('.custom_say p').html('請選擇<b>1</b>種');    
                   
            });
            $('.turn180').click(function () { 
                $('.custom_draw_plant img').toggleClass('-mirror');
                $('.custom_draw_pot img').toggleClass('-mirrorpot');
                
            });


            //客製多肉拖曳功能
            $('.custom_draw_plant img').draggable({
                cursor: "pointer",
                revert: false, //回到原點
                axis: "x", //只能拖x軸 or y軸
                containment:"parent", //只能在父層範圍內使用
            });


            //訂製賀卡彈跳視窗
            $('.custom_block7 .bubble_btnn').click(function () { 
                $('.c_wrapper').delay(10500).fadeIn(400);   
                $('#cus_box1').show();               
            });

            $('#cus_card').click(function () { 
                $('#cus_box1').fadeOut(400);  
                $('#cus_box2').fadeIn(400); 
            });

            $('#cus_box2 ol li').click(function () { 
                $(this).addClass('-this');
                $('#cus_box2 ol li').not(this).removeClass('-this');
            });

            $('.c_lightbox i').click(function () { 
                $('.c_wrapper').fadeOut(400);
            });


            
        });
        

       
            
    </script>

    <!-- 每一個頁面都要引入以下這兩個js -->
    <!-- <script src="./js/shopcart.js"></script> -->
    <script src="./js/header.js"></script>
    <script src="./js/qa.js"></script>

    <!-- 自已的js -->
    <script src="js/custom.js"></script>
</body>

</html>
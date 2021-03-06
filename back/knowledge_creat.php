<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/back_index.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  </link>

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700;900&display=swap" rel="stylesheet">
  <!-- JQ cdn -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js' integrity='sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==' crossorigin='anonymous'></script>

  <title>肉多不怪文章管理</title>

</head>

<!-- <body onload="doQuery()"> -->

<body>
  <div class="wrapper">
    <header>
      <?php
      include("./php/header.php");
      ?>
    </header>
    <div class="section_main">
      <?php
      include("./php/lefterBar.php");
      ?>
      <div class="right_main">

        <div class="knowledge_content">
          <h1>文章新增</h1>
          <div class="bottom_line"></div>
          <a class="inserBtn knowledge_inserBtn" href="./knowledge_creat.html">新增文章</a>
          <div class="table_div table_div_knowCreat">
            <form action="">
              <table class="table table-striped">
                <tr>
                  <td>文章版型</td>
                  <td>
                    <input type="radio" name="knowledgeType" value="1" checked />版型1
                    <input type="radio" name="knowledgeType" value="2" />版型2
                  </td>
                </tr>
                <tr>
                  <td>文章外顯示圖片</td>
                  <td>
                    <input type="file" id="knowledgeTypeOutPic" name="knowledgeTypeOutPic" />
                  </td>
                </tr>
                <tr>
                  <td>文章標題</td>
                  <td>
                    <input type="text" id="knowledgeTypeTitle" name="knowledgeTypeTitle" />
                  </td>
                </tr>
                <tr>
                  <td>內文01</td>
                  <td>
                    <textarea name="knowledgeTypeContent01" id="knowledgeTypeContent01" class="" rows="3" required="required">
                    </textarea>
                  </td>
                </tr>
                <tr>
                  <td>內文02</td>
                  <td>
                    <textarea name="knowledgeTypeContent02" id="knowledgeTypeContent02" class="" rows="3">
                    </textarea>
                  </td>
                </tr>
                <tr>
                  <td>內文03</td>
                  <td>
                    <textarea name="knowledgeTypeContent03" id="knowledgeTypeContent03" class="" rows="3">
                  </textarea>
                  </td>
                </tr>
                <tr>
                  <td>圖片01</td>
                  <td>
                    <input type="file" id="knowledgeTypeContentPic01" name="knowledgeTypeContentPic01" />
                  </td>
                </tr>
                <tr>
                  <td>圖片02</td>
                  <td>
                    <input type="file" id="knowledgeTypeContentPic02" name="knowledgeTypeContentPic02" />
                  </td>
                </tr>
                <tr>
                  <td>圖片03</td>
                  <td>
                    <input type="file" id="knowledgeTypeContentPic03" name="knowledgeTypeContentPic03" />
                  </td>
                </tr>
              </table>
              <div class="cancel_check">
                <input type="button" name="cancel" id="cancel" value="取消" onclick="javascript:history.go(-1);">
                <input type="submit" name="submitBtn" id="submitBtn" value="確定" onclick="return doSubmit();">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function doSubmit() {
      if (document.getElementById('knowledgeTypeTitle').value == '') {
        alert("請填寫[文章標題]");
        return false;
      }
      if (document.getElementById('knowledgeTypeContent01').value == '') {
        alert("請填寫[文章內容01]");
        return false;
      }

      //判斷Status(radio button)是否有值?
      var isChecked = false;
      var obj = document.getElementsByName('knowledgeType');
      for (var i = 0; i < obj.length; i++) {
        if (obj[i].checked) {
          isChecked = true;
        }
      }
      if (!isChecked) {
        alert("請選擇[文章版型]");
        return false;
      }

      if (document.getElementById('knowledgeTypeOutPic').value == '') {
        alert("請選擇[外顯示圖片]");
        return false;
      }
      if (document.getElementById('knowledgeTypeContentPic01').value == '') {
        alert("請選擇[內文圖片01]");
        return false;
      }
    }
  </script>

  <script src="./js/leftbar.js"></script>
</body>

</html>
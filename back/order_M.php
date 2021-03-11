<?php
include('./loginCheck.php');
?>
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
	</script>
	<title>肉多不怪訂單管理</title>
</head>

<body onload="doQuery()">
	<!-- <body> -->
	<div class="wrapper">
		<header>
			<?php
			include("./layout/header.php");
			?>
		</header>
		<div class="section_main">
			<?php
			include("./layout/lefterBar.php");
			?>
			<div class="right_main">
				<h1>訂單管理</h1>
				<div class="bottom_line"></div>
				<div class="table_div table_div_order">
					<table class="table table-striped">
						<!-- <tr class="table-dark">
							<th>訂單編號</th>
							<th>會員編號</th>
							<th>訂單日期</th>
							<th>付款方式</th>
							<th>訂單付款狀態</th>
							<th>訂單狀態</th>
							<th>修改訂單狀態</th>
						</tr> -->
						<!-- <tr>
              <th>112312312</th>
              <th>001</th>
              <td>2020/01/30</td>
              <td>信用卡付款</td>
              <td>已結帳</td>
              <td>送貨中</td>
              <td>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1"></label>
                </div>
              </td>
            </tr> -->
					</table>
				</div>
			</div>

			<script>
				function doQuery(str) {
					//Typing your code...
					$.ajax({
						method: "POST",
						url: "./order_M_ajx.php",
						data: {
							Name: str
						},
						dataType: "html",
						success: function(response) {
							//更新html內容
							document.getElementsByClassName('table')[0].innerHTML = response;
						},
						error: function(exception) {
							alert("發生錯誤: " + exception.status);
						}
					});
				}
			</script>
			<script src="./js/leftbar.js"></script>
</body>

</html>
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
	<title>肉多不怪會員管理</title>
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
				<h1>會員管理</h1>
				<div class="bottom_line"></div>
				<!-- <div class="search_name">
					<h2>姓名搜尋</h2>
					<input type="text" class="search_text">
					<input type="submit" class="search_btn" value="search">
				</div> -->
				<div class="table_div table_div_member">
					<form action="">
						<table class="table table-striped">
							<!-- <tr class="table-dark">
								<th>會員編號</th>
								<th>會員帳號</th>
								<th>會員姓名</th>
								<th>帳號狀態</th>
								<th>創建時間</th>
								<th>停權與否</th>
							</tr> -->

						</table>
					</form>
				</div>
			</div>
		</div>
		<script>
			function doQuery(str) {
				//Typing your code...
				$.ajax({
					method: "POST",
					url: "./member_M_ajx.php",
					data: {

					},
					dataType: "html",
					success: function(response) {
						//更新html內容
						document.getElementsByClassName('table')[0].innerHTML = response;
						// ----------------------
						document.body.addEventListener('click', (e) => {
							let target = e.target;
							let switch_input_div = target.parentElement;
							let switch_input_td = switch_input_div.parentElement;
							let Member_creatDate = switch_input_td.previousElementSibling;
							let Member_status = Member_creatDate.previousElementSibling;
							let tr = Member_status.closest('tr');
							// let member_id = tr.querySelector('.memberNO').innerText;
							console.log(tr);
							if (target.checked == true) {
								Member_status.innerText = '停權';
								Member_status.setAttribute('name', 'memberStatus');
								Member_status.setAttribute('value', '0');
								// let status = tr.querySelector('.Member_status').innerText;
								console.log(status);
								// function changeSt() {
								// 	$.ajax({
								// 		method: "POST",
								// 		url: "./member_StChange.php",
								// 		data: {
								// 			Name: Member_status.value,
								// 		},
								// 		dataType: "html",
								// 		success: function(response) {
								// 			//更新html內容
								// 			document.getElementsByClassName('Member_status')[0].innerHTML = response;
								// 		},
								// 		error: function(exception) {
								// 			alert("發生錯誤: " + exception.status);
								// 		}
								// 	});
								// };
								// changeSt();
							}
							if (target.checked == false) {
								Member_status.innerText = '正常';
								Member_status.setAttribute('name', 'memberStatus');
								Member_status.setAttribute('value', '1');
								// let status = tr.querySelector('.Member_status').innerText;
								// console.log(status);
							} else {
								console.log("else");
							}
						});

					},
					error: function(exception) {
						alert("發生錯誤: " + exception.status);
					}
				});
			}

			// var cusSwitch = document.getElementById('customSwitch1');
			// console.log(cusSwitch);

			// cusSwitch.addEventListener('click', () => {
			// 	console.log(123);

			// });
		</script>

		<script src="./js/leftbar.js"></script>
</body>

</html>
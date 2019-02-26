<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/car.css"/>
		<link rel="stylesheet" href="css/reset.css"/>
		<style>

			.top{
				width: 100%;
				height: 70px;
				background-color: palegoldenrod;
				position: relative;
				z-index: 999;

			}
			.top .top_in{
				width: 100%;
				height: 70px;

				float: right;

			}
			.top .top_left{
				margin-top: 20px;
				margin-left: 10%;
				display: inline-block;
				float: left;
				height: 70px;
				width: 20%;

				background: url("images/logo-main.png") no-repeat ;
			}
			.top .top_left>h1{
				width: 100%;
				height: 100%;
			}
			.top .top_left>h1>a{
				display: inline-block;
				height: 100%;
				width: 100%;
				text-align: center;
				/*background: url("images/logo.png") no-repeat ;*/
				background-size: 190px 70px;

			}
			.top .top_right{
				float: right;
				height: 60px;
				width: 70%;
				display: inline-block;



			}
			.top .top_nav{
				width: 55%;
				height: 100%;
				float: left;



			}
			.top .top_nav>li{
				float: left;
				margin-left: 15px;


			}
			.top .top_nav>li>a{
				font-size: 16px;
				font-weight: bold;
				color: #122b40;
				line-height: 70px;
				text-align: center;


			}
			.top .top_login{
				float: right;
				width: 150px;
				height: 100%;
				padding-right: 25px;
			}
			.top .top_login>li{
				float: right;
				line-height: 60px;
				margin-left: 10px;
			}
			.top .top_login>li:nth-child(3){
				width: 30px;
				height: 30px;
				background:url("../images/yonghu.png");
				background-size: 30px 30px;
				margin-top: 15px;
			}
			.top .top_login>li>a{
				color: #ccc;
			}
		</style>
	</head>
	<body>
	<div class="top">

		<div class="top_left">

		</div>
		<div class="top_right">
			<ul class="top_nav">

				<li><a href="index.php">融资者</a></li>
				<li><a href="index.php">投资者</a></li>
				<li><a href="admlogin.php">融资活动</a></li>
			</ul>

			<ul class="top_login">
				<?php
				//                    session_start();
				//                if($_SESSION['txt_account_login']){


				//
				//                      $useraccount = $_COOKIE['username'];

				if($_COOKIE){
					if($_COOKIE['account']){
						//echo'<ul class="top_login">';
						echo"<font color='#fffaa' size='4px' >welcome ".$_COOKIE['account'];
						echo'<li><a href="logout.php" id="lg_id" name="lg_nm">注销</a>|<a href="alteruser.php" id="alt_id" name="alt_nm">修改</a></li>';
						//echo'<a href="logout.php" id="lg_id" name="lg_nm">修改</a>';
						//                    echo'welcom'.$_s

					}else{
						echo  " <ul class=\"top_login\">
					<li><a href=\"#\" id=\"btn_to_login\">登录</a></li>
					<li><a href=\"#\" id=\"btn_to_register\">注册</a></li>
					<li></li>";

					}

				}
				else {
					echo "<ul class=\"top_login\">
					<li><a href=\"#\" id=\"btn_to_login\">登录</a></li>
					< li><a href = \"#\" id=\"btn_to_register\">注册</a></li>
					<li></li> ";
				}
				?>

				<!--                 <li><a href="#" id="btn_to_login">登录</a></li>
                                <li><a href="#" id="btn_to_register">注册</a></li>
                                <li></li>-->

			</ul>

		</div>

	</div>
		<div class="project">
			<div class="projiect-img">
				<img src="images/5afce8dbN0adb6ab8.jpg"/>
			</div>
			<div class="produt-introduce">
				<h1>新境界 更多彩·骏派CX65</h1>
				<p class="have">已筹到</p>
				<p class="num">
					<span>￥</span>
					666666
				</p>
				<p class="progress">
					<span class="fl percent" style="color: rgb(161, 6, 224);">当前进度333%</span>
					<span class="fr">2762名支持者</span>
				</p>
				<p class="target">
					此项目必须在 2018年06月28日 前得到 ￥200000的支持才可成功！ 剩余 16天!
				</p>
			</div>
		</div>
		<div class="projectintroduction ">

			<div class="picture">
				<img src="images/5afc2ad6Nd1bf6c90.jpg"/>
				<img src="images/5afc2adeNefb0d38a.jpg"/>
				<img src="images/5afc2ae6Ne974f817.jpg"/>
				<img src="images/5afc2b01Nf76997f2.jpg"/>
			</div>
		</div>
		<div class="comment">
		<?php require_once "sp.php"?>
		</div>	
		
	</body>
</html>

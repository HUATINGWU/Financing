<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" href="css/inde.css">
	</head>

	<body>

	<div class="top">

		<div class="top_left">

		</div>
		<div class="top_right">
			<ul class="top_nav">

				<li><a href="index.php">找项目</a></li>
				<li><a href="index.php">投资金</a></li>
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
		<!--nav-->
		<div class="container">
			<ul class="nav-box">
				<li>
					<a href="index.php">首页</a>
				</li>
				<li>
					<a href="#">居家</a>
				</li>
				<li>
					<a href="#">餐厨</a>
				</li>
				<li>
					<a href="#">配件</a>
				</li>
				<li>
					<a href="#">服装</a>
				</li>
				<li>
					<a href="#">洗护</a>
				</li>
				<li>
					<a href="#">婴童</a>
				</li>
				<li>
					<a href="#">杂货</a>
				</li>
				<li>
					<a href="#">饮食</a>
				</li>
				<li>
					<a href="#">其他</a>
				</li>
				<li>
					<a href="#">甄选家</a>
				</li>
			</ul>
		</div>
		<!--banner-->
		<div class="banner">

		</div>
		<div class="container container-product">
			<ul>
				<h1>热门推荐</h1>
				<li style="float: right;">
					<a href="#">更多 ></a>
				</li>
			</ul>
			<div class="div1">
				<a href="car.php">
					<div class="div2">
						<img src="images/5afa4cd7N1edb4c72.png" />
						<div class="lala">
							<div class="name">
								<p>新境界 更多彩·骏派CX65</p>
							</div>
							<div class="course">
								<span>已筹￥666666</span>
							</div>
						</div>
					</div>
				</a>
				<a href="">
					<div class="div3">
						<img src="images/5b04dd6bN5fd485b8.png" />
						<div class="lala">
							<div class="name">
								<p>手机膜法传奇-1擦秒变新机</p>
							</div>
							<div class="course">
								<span>已筹￥666666</span>
							</div>
						</div>
					</div>
				</a>
				<a href="">
				<div class="div3">
					<img src="images/5b18fb37Ndc8b25aa.png" />
					<div class="lala">
						<div class="name">
							<p>贝壳云·畅快独享的私有云盘</p>
						</div>
						<div class="course">
							<span>已筹￥666666</span>
						</div>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="container container-jujia">
			<ul>
				<h2>最新上架</h2>
				<li style="float: right;">
					<a href="#">更多 ></a>
				</li>
			</ul>
			<div class="div1">
				<a href="#">
					<div class="div2">
						<img src="images/5b1105d5N141d3414.jpg" />
						<div class="lala">
							<div class="name">
								<p>超广角全金属专业针孔摄影镜头</p>
							</div>
							<div class="course">
								<span>已筹￥666666</span>
							</div>
						</div>
					</div>
				</a>
				<a href="">
					<div class="div3">
						<img src="images/5b187a42N66a797fa.jpg" />
						<div class="lala">
							<div class="name">
								<p>新一代超舒适阿罗裤</p>
							</div>
							<div class="course">
								<span>已筹￥666666</span>
							</div>
						</div>
					</div>
				</a>
				<a href="">
				<div class="div3">
					<img src="images/5b1a3e98N0798deaf.jpg" />
					<div class="lala">
						<div class="name">
							<p>寻密十八岁东魁杨梅酒</p>
						</div>
						<div class="course">
							<span>已筹￥666666</span>
						</div>
					</div>
				</div>
				</a>
			</div>
		</div>
	</body>

</html>
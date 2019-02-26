
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		$(function() {
			var comments = $("#comments");
			$.getJSON("data.php", function(json) {
				$.each(json, function(index, array) {
					var txt = "<p><strong>" + array["user"] + "</strong>：" + array["comment"] + "<span>" + array["addtime"] + "</span></p>";
					comments.append(txt);
				});
			});
			//将评论的内容展出
			$("#add").click(function() {
				var user = $("#user").val();
				var txt = $("#txt").val();
				$.ajax({
					type: "POST",
					url: "comment.php",
					data: "user=" + user + "&txt=" + txt,
					dataType : 'JSON',
					success: function(res) {
						if (res.code == 1) {
							var str = "<p><strong>" + res.user + "</strong>：" + res.txt + "<span>刚刚</span></p>";
							comments.append(str);
							$("#message").show().html("发表成功！").fadeOut(1000);
							$("#txt").attr("value", "");
						} else {
							$("#message").show().html(res.message).fadeOut(1000);
						}
					}
				});
			});
		});
	</script>
	<style type="text/css">
body{
	background-color: darkgrey;
}
		.top{
			width: 100%;
			height: 70px;
			background-color: gray;
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
			/*background: url("../images/logo.png") no-repeat ;*/
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

		.top .top_login>li>a{
			color: #ccc;
		}

		li{
			list-style: none;
		}
		#comments{
			margin:10px auto;
		}
		#post{
			margin-top:10px;
		}
		#comments p,
		#post p{
			line-height:30px;
		}
		#comments p span{
			margin:4px;
			color:#bdb8b8;
		}
		#message{
			position: absolute;
			top: 40%;
			left: 100px;
			width: 200px;
			height: 50px;
			background: #f2f2f2;
			border: 1px solid;
			border-radius: 3px;
			line-height: 50px;
			text-align: center;
			display: none;
		}

		textarea{
			width: 100%;
			border: none;
			outline: none;
			resize:none;
			overflow: hidden;
			padding-bottom: 5%;
			background-color: inherit;

		}
	</style>
</head>
<body>

<div class="top">

	<div class="top_left">

	</div>
	<div class="top_right">
		<ul class="top_nav">

			<li><a href="#class">找项目</a></li>
			<li><a href="inde.php">找资金</a></li>
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
<?php
require_once "conn.php";

$pic="select * from upload where uploadid=61";
$rows=mysqli_query($conn,$pic);

foreach($rows as $row){

	echo "<ul><li>

         <div>

            <span><h1 style=\"color: red;text-align: center;\">{$row['title']}</h1></span>

        </div>
        <img style='width:90%;margin-left:5%;height: 470px;' src='{$row['pic']}'>;<p>{$row['other']}</p>
        </li></ul>";

}

?><?php
/*
 * 本例相关介绍及文档
 * 接口官网 https://www.nowapi.com
 * 接口文档 https://www.nowapi.com/api/finance.rate
 */


function nowapi_call($a_parm){
	if(!is_array($a_parm)){
		return false;
	}
	//combinations
	$a_parm['format']=empty($a_parm['format'])?'json':$a_parm['format'];
	$apiurl=empty($a_parm['apiurl'])?'http://api.k780.com:88/?':$a_parm['apiurl'].'/?';
	unset($a_parm['apiurl']);
	foreach($a_parm as $k=>$v){
		$apiurl.=$k.'='.$v.'&';
	}
	$apiurl=substr($apiurl,0,-1);
	if(!$callapi=file_get_contents($apiurl)){
		return false;
	}
	//format
	if($a_parm['format']=='base64'){
		$a_cdata=unserialize(base64_decode($callapi));
	}elseif($a_parm['format']=='json'){
		if(!$a_cdata=json_decode($callapi,true)){
			return false;
		}
	}else{
		return false;
	}
	//array
	if($a_cdata['success']!='1'){
		echo $a_cdata['msgid'].' '.$a_cdata['msg'];
		return false;
	}
	return $a_cdata['result'];
}

$nowapi_parm['app']='finance.rate';
$nowapi_parm['scur']='USD';
$nowapi_parm['tcur']=$_POST["select"];
$nowapi_parm['appkey']='10003';
$nowapi_parm['sign']='b59bc3ef6191eb9f747dd4e83c99f2a4';
$nowapi_parm['format']='json';
if(!$result=nowapi_call($nowapi_parm)){
	die('fail');
}
//var_dump($result);
//print_r($result);
echo "   scur : ".$result['scur']."<br>";
echo "   tcur : ".$result['tcur']."<br>";
echo " ratenm : ".$result['ratenm']."<br>";
echo "   rate : ".$result['rate']."<br>";
echo " update : ".$result['update']."<br>";
echo " <lable style='color: red;font-weight: bold'>项目总金额（美元）</lable> : ".$_POST['number']/$result['rate']."<br>";
?>

<?php
include_once("conn.php");//连接数据库

$sl="select * from comments";
$rows=mysqli_query($conn,$sl);//获取数据库的数据
foreach($rows as $row){
	echo "
<div style='height: 80px;width: 600px;'><p style=\" float: left;background:url(images/share05.png);width: 50px;height: 50px;border-radius: 60%\"></p><p style='float: left;margin-top: 30px;margin-left: 10px;font-weight: bold;'>{$row['user']}----{$row['addtime']}</p>
</div>
		<p style='font-weight: bold;'>评论内容：</p>
		<p><textarea readonly='readonly' class=\"input\" name=\"txt\" style=\"width:100%; height:80px\">{$row['comment']}</textarea></p>---------------------------------------------------------------------------------------------------------------------------
		<br>";
}
?>
<a href="addcomment.php"><button>发表评论</button></a>

</body>
</html>

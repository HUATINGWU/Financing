<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
        require_once 'mysql.php';
        ?>
    <meta charset="gb2312">
    <title>融资网</title>
   <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="js\jquery-2.2.1.min.js"></script>
     <script src="js1\db_user.js"></script>
    <script src="js/poll.js"></script>
    <script src="third-part\JQuery\jquery-1.12.1.min.js"></script>
<script src="js\jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/banner.css">

    <link rel="stylesheet" href="css/responsive.css">

    <style>
        /*css层叠样式表的衣柜*/
        *{margin:0px;padding:0px;/*上下左右*/}
        #box{

            width:100%;height:510px;background:whitesmoke;/*背景*//*overflow:hidden;超出隐藏*/position:relative;/*相对定位*/}
        #box div.img ul li{list-style:none;width:100%;height:410px;display:none;/*隐藏*/opacity:1;}
        #box div.img ul li.curr{display:block;/*显示  块级元素*/}
        #box div.bg{width:247px;height:371px;background:url("images/bg.png");position:absolute;/*绝对定位*/
            top:40px;right:20px;}
        #box div.bg div.nav{width:212px;height:340px;margin:18px 16px;/*上下  左右*/color:#ccc;
            border-radius:8px;/*边框圆角*/overflow:hidden;}
        #box div.bg div.nav ul li{list-style:none;/*去除实心圆的*/font-size:14px;/*字体大小*/width:212px;
            height:34px;line-height:34px;/*行高 上下居中*/padding-left:8px;/*左内间距*/}
        #box div.bg div.nav ul li a{color:#fff;/*字体颜色*/
            text-decoration: none;}
    </style>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

     <script>
        $(document).ready(function () {
            var userManager = getUserManager();
            // ---------------------------------------------------------
            $('#btn_login').click(function () {
                var account = $('#account0').val();   // string key
                var pwd = $('#pwd0').val();           // string
                if (userManager.login(account, pwd)) {
                    
                    $('#LoginBox').hide();
                    $('#mask').addClass('#mask').hide();
                    //
                    $('#div_loginOrRegister').hide();
                    $('#div_account').show();
                    var user = userManager.getCurrentUser();
                    $('#span_name').html(user.name +"欢迎你");
                } else {
                    alert('用户名或密码不正确');
                }
            });
            $('#btn_logout').click(function () {
                userManager.logout();
                $('#div_account').hide();
                $('#div_loginOrRegister').show();
                $('#span_name').empty();
            });
            $('#btn_register').click(function () {
                var user = {
                    account: $('#account').val(),   // string key
                    pwd: $('#pwd').val(),           // string
                    name: $('#name').val(),         // string
                    gender: $('#gender').val(),     // string
                    age: parseInt($('#age').val()), // int
                    tel: $('#tel').val(),           // string
                    email: $('#email').val(),       // string
                    address: $('#address').val(),   // string
                };
                if (userManager.registerUser(user)) {
                    $('#div_loginOrRegister').hide();
                    if (userManager.login(user.name, user.pwd)) {
                        $('#div_register').hide();
                    $('#mask').addClass('#mask').hide();
                        //
                        $('#div_loginOrRegister').hide();
                        $('#div_account').show();
                        $('#span_name').html(user.name +"欢迎你");
                    } else {
                    }
                } else {
                    alert('注册失败');
                }
            });
            // ---------------------------------------------------------挡住登陆或者注册页面
            $('#btn_to_login').click(function () {
                $('#div_login').show();
                $('#div_register').hide();
            });
            $('#btn_to_register').click(function () {
                $('#div_login').hide();
                $('#div_register').show();
            });
            // ---------------------------------------------------------
            var user = userManager.getCurrentUser();
            if (user) {
                $('#div_account').show();
                $('#span_name').html(user.name);
            } else {
                $('#div_loginOrRegister').show();
            }
        });
    </script>

    

    <style>
    #div_register{position:absolute;left:460px;top:150px;background:white;width:426px;height:682px;border:3px solid #444;border-radius:7px;z-index:10000;display:none;}
.row3{background:#f7f7f7;padding:0px 20px;line-height:50px;height:50px;font-weight:bold;color:#666;font-size:20px;}
.row4{height:57px;line-height:77px;padding:0px 30px;font-family:华文楷体;font-size:x-large;}


    </style>

</head>
<body>
<!--顶部区域-->

<div class="top">

        <div class="top_left">

        </div>
        <div class="top_right">
            <ul class="top_nav">

                <li><a href="xiangmu.php">找项目</a></li>
                <li><a href="inde.php">找资金</a></li>
                <li><a href="admlogin.php">发布融资项目</a></li>
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
    <div id="div_account" style=" float: right;color: gray; font-size: 15px;font-weight:initial ;margin-top: -50px" >
        <span id="span_name" ></span>
        <button id="btn_logout" style="background:salmon;text-align: none;opacity: 0">注销</button>

    <div id="user1" style="float: right;margin-top: -30px;" >
        <!--                    <a href="html\allUsers.html">所有用户</a>-->
    </div>

</div>




<!--登陆窗-->
<form id="LoginBox" style=" display:none;" action="login.php" method="post" name="loginbox1">
    <div class="row1">
        登录窗口<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="closeBtn">×</a>
    </div>

    <div class="row">
        账号: <span class="inputBox">
            <input type="text" id="account0" name="txt_account_login" placeholder="账号/邮箱" />
            </span><a href="javascript:void(0)" title="提示" class="warning" id="warn">*</a>
    </div>
    <div class="row">
        密&nbsp;码: <span class="inputBox">
            <input type="text" id="pwd0" name="txt_pwd_login" placeholder="密码" />
            </span><a href="javascript:void(0)" title="提示" class="warning" id="warn2">*</a>
    </div>
    <div class="row">
        <input type="submit" name="submit_login" value="sbumit">
    </div>
</form>

<script type="text/javascript">
    $(function ($) {
        //弹出登录
        $("#btn_to_login").hover(function () {
            $(this).stop().animate({
                opacity: '1'
            }, 600);
        }, function () {
            $(this).stop().animate({
                opacity: '0.6'
            }, 1000);
        }).on('click', function () {
            $("body").append("<div id='mask'></div>");
            $("#mask").addClass("mask").fadeIn("slow");
            $("#LoginBox").fadeIn("slow");
        });
        //
        //按钮的透明度
        $("#loginbtn").hover(function () {
            $(this).stop().animate({
                opacity: '1'
            }, 600);
        }, function () {
            $(this).stop().animate({
                opacity: '0.8'
            }, 1000);
        });

        $(".close_btn").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
            $("#LoginBox").fadeOut("fast");
            $("#mask").css({ display: 'none' });
        });
    });
</script>

<!--注册-->
<div id="div_register" style="display: none;"   >

    <div class="row3">
        注册窗口<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="closeBtn">×</a>
    </div>
    <form action="register.php" method="post">
        <div class="row4">

            账号<input type="text" id="account" name="txt_acount_reg">

        </div>

        <!--        <div class="row4">密码<input  type="text" id="pwd" name="txt_pwd_reg">
        </div>-->

        <lable>姓名：</lable><input type="text" id="name" name="txt_nm_reg">

        <div class="row4">密码<input  type="text" id="pwd" name="txt_pwd_reg">
        </div>
        <!--     <div class="row4">性别<select name="" id="gender" name="sl_gdr_reg">
                <option value="male" >男</option>
                <option value="female">女</option>
            </select>
        </div>-->
        <div class="row4" id="gender">性别
            <input type="radio" name="gender" value="male">男
            <input type="radio" name="gender" value="female">女

        </div>
        <div class="row4">年龄<input type="text" id="age" name="txt_age_reg" min="10" max="50">
        </div>

        <div class="row4">电话号码<input type="tel" name="tel_tnm_reg" id="tel" >
        </div>

        <div class="row4">邮箱<input type="text" id="email" name="txt_em_reg">
        </div>

        <div class="row4">地址<input type="text" id="address" name="txt_ad_reg">
        </div>

        <div class="row4">
            <label>注册</label>>
            <input type="submit" name="submit">
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function ($) {
        //弹出登录
        $("#btn_to_register").hover(function () {
            $(this).stop().animate({
                opacity: '1'
            }, 600);
        }, function () {
            $(this).stop().animate({
                opacity: '0.6'
            }, 1000);
        }).on('click', function () {
            $("body").append("<form id='mask'></div>");
            $("#mask").addClass("mask").fadeIn("slow");
            $("#div_register").fadeIn("slow");
        });

        //
        //按钮的透明度
        $("#loginbtn").hover(function () {
            $(this).stop().animate({
                opacity: '1'
            }, 600);
        }, function () {
            $(this).stop().animate({
                opacity: '0.8'
            }, 1000);
        });

        $(".close_btn").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
            $("#div_register").fadeOut("fast");
            $("#mask").css({ display: 'none' });
        });

    });
</script>



<!--主页区域-->
<!--课程区域-->
<div id="box">
    <div class="img">
        <ul>

            <li class="curr" style="background:url(images/3.jpg) no-repeat;"><a href="#"></a></li>
            <li style="background:url(images/2.jpg) no-repeat;"><a href="#"></a></li>
            <li style="background:url(images/3.jpg) no-repeat;"><a href="#"></a></li>
            <li style="background:url(images/4.jpg) no-repeat;"><a href="#"></a></li>
            <li style="background:url(images/5.jpg) no-repeat;"><a href="#"></a></li>
            <li style="background:url(images/2.jpg) no-repeat;"><a href="#"></a></li>
            <li style="background:url(images/4.jpg) no-repeat;"><a href="#"></a></li>
            <li style="background:url(images/5.jpg) no-repeat;"><a href="#"></a></li>
            <li style="background:url(images/4.jpg) no-repeat;"><a href="#"></a></li>
            <li style="background:url(images/2.jpg) no-repeat;"></li>
        </ul>
       <?php require_once "Touhome.php"?>
    </div>
    <div class="bg">
        <div class="nav">
            <ul>
                <li class="first"><a href="toupiao.php" ">资源管理项目融资500万</a></li>
                <li><a href="">东旧村改造项目融资20亿</a></li>
                <li><a href="">升降窗帘项目融资180万</a> </li>
                <li><a href="">屋顶光伏电站项目融资600万</a></li>
                <li><a href="">金属制造项目融资1000万</a></li>
                <li><a href="">九隆天一家居项目融资1500万</a></li>
                <li><a href="">七彩旅游项目融资200万</a></li>
                <li><a href="">人工卫星项目融资5亿</a></li>
                <li><a href="">外国语学院项目融资5亿</a></li>
                <li><a href="">金属制造项目融资1000万</a></li>
            </ul>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script>
    //alert($);弹出窗口代理函数
    $("#box div.bg div.nav ul li").hover(function(){
        var index = $(this).index();
        $(this).addClass("first").siblings().removeClass("first");
        $("#box div.img ul li").eq(index).css({"display":"block","opacity":"0"}).
        animate({"opacity":1},500).siblings().css({"opacity":1,"display":"none"});//自定义动画


        //alert(index);
    });
</script>



<div class="home">




    <div class="banner">
        <div class="text">
            <ul id="text-list">
                <li>人工智能<span>|</span></li>
                <li>高端餐饮<span>|</span></li>
                <li>雅致生活<span>|</span></li>
                <li>艺术精工<span>|</span></li>
                <li>游戏音乐</li>
            </ul>
        </div>
        <div class="car"></div>
        <div class="pic">
            <ul id="pic">
                <li style="background-image:url('images/item1.jpg');left:50px; "></li>
                <li style="background-image:url('images/item2.jpg')"></li>
                <li style="background-image:url('images/item3.jpg')"></li>
                <li style="background-image:url('images/item4.jpg')"></li>
                <li style="background-image:url('images/item5.jpg')"></li>
            </ul>
        </div>


    </div>
    <script src="js/move.js"></script>
    <script>
        var Car = document.getElementsByClassName('car')[0];//运动条
        var oPic = document.getElementById('pic');
        var aPicli = oPic.getElementsByTagName('li');//图片序列
        var otext = document.getElementById('text-list');
        var otextli = otext.getElementsByTagName('li');//文字序列
        var index = 0;
        for(var i=0;i<otextli.length;i++){
            otextli[i].index = i;
            otextli[i].onclick = function(){
                var lastIndex = index;
                var nowLeft = this.index*229+15;
                var left = 1146;
                index = this.index;
                //运动条动画
                move( Car , "left" , nowLeft , 20 );

                if ( index > lastIndex )
                {
                    left = -left;
                };
                aPicli[index].style.left = -left+'px';
                //移出图片动画
                move( aPicli[lastIndex] , 'left' , left , 50 );
                //移入图片动画
                move( aPicli[index] , 'left' , 0 , 50 );
            }
        };
    </script>


    <!--底部区域-->
<div class="footer">
    <p><a href="#">关于钱钱融</a>   <a href="#">客户服务</a>  <a href="#">隐私政策</a>|  钱钱融公司版权所有 © 1997-2017 吴华庭、王鹏飞、赵英旗、张金熠

</p>
</div>
</body>
</html>
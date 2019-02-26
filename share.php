<?php
session_start();
if ($_POST){
    include_once('conn.php');
    include_once('uploadclass.php');
    $title=$_POST['title'];
    $other=$_POST['other'];
    $pic=$uploadfile;
    if($title == "")
     echo"<Script>window.alert('对不起！你输入的信息不完整!');history.back()</Script>";
    $sql="update upload set title='$title',pic='$pic',other='$other' where uploadid=61 ";
    $result=mysqli_query($conn,$sql);
echo"<Script>window.alert('信息添加成功');location.href='upload.php'</Script>";
header("Location:toupiao.php");
}
?>
<?php
include_once('conn.php');
$que="select username from adm";
$res=mysqli_query($conn,$que);
$row=$res->fetch_array();

?>
<html>
<head>
    <title>发布新融资</title>
    <style>
        .self{

            margin: 150px auto;
            border: 2px solid gray;
            border-radius: 9px;
            width: 600px;
            height: 380px;
            background-color: #584f60;
        }

        body{
            background-color: lightskyblue;
            background-size: cover;
        }
        .self td{
            color: ghostwhite;
            width: 60px;
        }
        #load{
            margin-left: 150px;
        }
        td{
            width: 60px;
        }
    </style>
</head>
<body>
<?php
if($_SESSION['username1']==$row['username']){
	echo"<div class='self'><form method=\"post\" action=\"?action=save\" enctype=\"multipart/form-data\" name='action'>
    <table border=0 cellspacing=0 cellpadding=0 align=center width=\"100%\">
        <tr>
            <td width=55 height=30 align=\"center\"> </TD>
            <td height=\"16\">

                <table width=\"100%\" height=\"93\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                    <tr>
                        <td >项目：</td>
                        <td><input name=\"title\" type=\"text\" id=\"title\"></td>
                    </tr><tr>
                        <td >介绍：</td>
                        <td><input name=\"other\" type=\"text\" id=\"title\"></td>
                    </tr>
                    <tr>
                        <td>图片:</td>
                        <td><label>
                                <input name=\"file\" type=\"file\" value=\"浏览\" >
                                <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"选择图片\">
                            </label></td>
                    </tr>

<td><input type='submit'></td>

                </table>
                </td>
        </tr>
    </table>
</form>
<form action=\"toupiao.php\" method=\"post\" name=\"form1\">
    <table style='margin-left: 110px;' width=\"300\"  border=\"0\" cellpadding=\"0\"  cellspacing=\"0\">

        <tr>
<td>金额</td>
            <td width=\"150\" height=\"30\" align=\"center\" >
                <input type=\"text\" name=\"number\">
            </td>
            <td width=\"300\">
                <select name=\"select\" size=\"1\">
                    <option value=\"CNY\" selected>人民币</option>
                    <option value=\"HKD\" >港币</option>
                    <option value=\"KRW\" >韩元</option>
                    <option value=\"CAD\" >加元</option>
                    <option value=\"EUR\" >欧元</option>
                    <option value=\"JPY\" >日元</option>
                    <option value=\"GBP\" >英镑</option>
                    <option value=\"RUB\" >卢布</option>
                    <option value=\"AED\" >迪拉姆</option>
                    <option value=\"ARS\" >比索</option>
                    <option value=\"AMD\" >德拉姆</option>

                </select>&nbsp;

            </td><td id='load'><input type=\"submit\" value=\"上 传\" name=\"upload\"></td>

        </tr>
    </table>
</form>
</div>";
}else{
	echo "<h1 style=\"color: red\">您没有权限登陆！！</h1>";
}
?>


</body>
</html>
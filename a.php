<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            div
            {
                background-color: pink;
                border: 1px solid graytext;
            }
        </style>
    </head>
    <body>
    </body>
</html>
<?php
$usersname=$_POST['txtuser'];
$express=$_POST['express'];

$localhost = 'localhost';
$username = 'root';
$passname = '';
$con = mysqli_connect($localhost, $username, $passname);
mysqli_query($con, 'set names utf8'); //连接数据库
$usedatabase = 'use dongtai';
$usedatabase1 = mysqli_query($con, $usedatabase); 
//require_once 'lianjiesjk.php';

$insert1 = "insert into dongtai1 (user_Name,express)values('$usersname','$express');"; 
                    mysqli_query($con, $insert1);
sleep(3);

header("Location:index.php");

?>
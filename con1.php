<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $localhost = 'localhost';
        $usernamesql = 'root';
        $passwordsql = '';
        $con = mysqli_connect($localhost, $usernamesql, $passwordsql);

        $create = "create database if not exists donkey  default character set utf8 default collate utf8_general_ci";
        mysqli_query($con, $create);
        $use = "use donkey";
        mysqli_query($con, 'set names utf8');
        mysqli_query($con, $use);


//        $createtable = 'create table if not exists userinformations (
//userID varchar(50),
//password varchar(50)
//)
//engine=innodb;';
//        $create2 = mysqli_query($con, $createtable);
        //_______________---------------------------
        //
        $createtable = 'create table if not exists message (
message_id int unsigned NOT NULL auto_increment,
cityname varchar(50),
user varchar(50),
title varchar(50),
content varchar(50),
lastdate varchar(50),
primary key (message_id)
)
engine=innodb;';
        $create = mysqli_query($con, $createtable);
//datebase 
        $createtable = 'create table if not exists pinformations (
city_id int,
cityname char(20) ,
pc1 varchar(50),
pc2 varchar(50),
pc3 varchar(50),
pc4 varchar(50),
pc5 varchar(50),
pc6 varchar(50),
pc7 varchar(50),
pc8 varchar(50),
pc9 varchar(50),
pc10 varchar(50),
pc11 varchar(50),
pc12 varchar(50),
pc13 varchar(50),
pc14 varchar(50),
pc15 varchar(50),
pc16 varchar(50),
primary key (city_id)
)
engine=innodb;';
        $create = mysqli_query($con, $createtable);

        $insert = "insert into pinformations values "
                . "(1,'beijing','img/beijing/beijing1.jpg','img/beijing/beijing2.jpg','img/beijing/beijing3.jpg','img/beijing/beijing4.jpg','img/beijing/beijing5.jpg','img/beijing/beijing6.jpg','img/beijing/beijing7.jpg','img/beijing/beijing8.jpg','img/beijing/beijing9.jpg','img/beijing/beijing10.jpg','img/beijing/beijing11.jpg','img/beijing/beijing12.jpg','img/beijing/beijing13.jpg','img/beijing/beijing14.jpg','img/beijing/beijing15.jpg','img/beijing/beijing16.jpg'),"
                . "(2,'dali','img/dali/dali1.jpg','img/dali/dali2.jpg','img/dali/dali3.jpg','img/dali/dali4.jpg','img/dali/dali5.jpg','img/dali/dali6.jpg','img/dali/dali7.jpg','img/dali/dali8.jpg','img/dali/dali9.jpg','img/dali/dali10.jpg','img/dali/dali11.jpg','img/dali/dali12.jpg','img/dali/dali13.jpg','img/dali/dali14.jpg','img/dali/dali15.jpg','img/dali/dali16.jpg'),"
                . "(3,'dalian','img/dalian/dalian1.jpg','img/dalian/dalian2.jpg','img/dalian/dalian3.jpg','img/dalian/dalian4.jpg','img/dalian/dalian5.jpg','img/dalian/dalian6.jpg','img/dalian/dalian7.jpg','img/dalian/dalian8.jpg','img/dalian/dalian9.jpg','img/dalian/dalian10.jpg','img/dalian/dalian11.jpg','img/dalian/dalian12.jpg','img/dalian/dalian13.jpg','img/dalian/dalian14.jpg','img/dalian/dalian15.jpg','img/dalian/dalian16.jpg'),"
                . "(4,'guangzhou','img/guangzhou/guangzhou1.jpg','img/guangzhou/guangzhou2.jpg','img/guangzhou/guangzhou3.jpg','img/guangzhou/guangzhou4.jpg','img/guangzhou/guangzhou5.jpg','img/guangzhou/guangzhou6.jpg','img/guangzhou/guangzhou7.jpg','img/guangzhou/guangzhou8.jpg','img/guangzhou/guangzhou9.jpg','img/guangzhou/guangzhou10.jpg','img/guangzhou/guangzhou11.jpg','img/guangzhou/guangzhou12.jpg','img/guangzhou/guangzhou13.jpg','img/guangzhou/guangzhou14.jpg','img/guangzhou/guangzhou15.jpg','img/guangzhou/guangzhou16.jpg'),"
                . "(5,'qingdao','img/qingdao/qingdao1.jpg','img/qingdao/qingdao2.jpg','img/qingdao/qingdao3.jpg','img/qingdao/qingdao4.jpg','img/qingdao/qingdao5.jpg','img/qingdao/qingdao6.jpg','img/qingdao/qingdao7.jpg','img/qingdao/qingdao8.jpg','img/qingdao/qingdao9.jpg','img/qingdao/qingdao10.jpg','img/qingdao/qingdao11.jpg','img/qingdao/qingdao12.jpg','img/qingdao/qingdao13.jpg','img/qingdao/qingdao14.jpg','img/qingdao/qingdao15.jpg','img/qingdao/qingdao16.jpg'),"
                . "(6,'sanya','img/sanya/sanya1.jpg','img/sanya/sanya2.jpg','img/sanya/sanya3.jpg','img/sanya/sanya4.jpg','img/sanya/sanya5.jpg','img/sanya/sanya6.jpg','img/sanya/sanya7.jpg','img/sanya/sanya8.jpg','img/sanya/sanya9.jpg','img/sanya/sanya10.jpg','img/sanya/sanya11.jpg','img/sanya/sanya12.jpg','img/sanya/sanya13.jpg','img/sanya/sanya14.jpg','img/sanya/sanya15.jpg','img/sanya/sanya16.jpg'),"
                . "(7,'shanghai','img/shanghai/shanghai1.jpg','img/shanghai/shanghai2.jpg','img/shanghai/shanghai3.jpg','img/shanghai/shanghai4.jpg','img/shanghai/shanghai5.jpg','img/shanghai/shanghai6.jpg','img/shanghai/shanghai7.jpg','img/shanghai/shanghai8.jpg','img/shanghai/shanghai9.jpg','img/shanghai/shanghai10.jpg','img/shanghai/shanghai11.jpg','img/shanghai/shanghai12.jpg','img/shanghai/shanghai13.jpg','img/shanghai/shanghai14.jpg','img/shanghai/shanghai15.jpg','img/shanghai/shanghai16.jpg'),"
                . "(8,'suzhou','img/suzhou/suzhou1.jpg','img/suzhou/suzhou2.jpg','img/suzhou/suzhou3.jpg','img/suzhou/suzhou4.jpg','img/suzhou/suzhou5.jpg','img/suzhou/suzhou6.jpg','img/suzhou/suzhou7.jpg','img/suzhou/suzhou8.jpg','img/suzhou/suzhou9.jpg','img/suzhou/suzhou10.jpg','img/suzhou/suzhou11.jpg','img/suzhou/suzhou12.jpg','img/suzhou/suzhou13.jpg','img/suzhou/suzhou14.jpg','img/suzhou/suzhou15.jpg','img/suzhou/suzhou16.jpg'),"
                . "(9,'taibei','img/taibei/taibei1.jpg','img/taibei/taibei2.jpg','img/taibei/taibei3.jpg','img/taibei/taibei4.jpg','img/taibei/taibei5.jpg','img/taibei/taibei6.jpg','img/taibei/taibei7.jpg','img/taibei/taibei8.jpg','img/taibei/taibei9.jpg','img/taibei/taibei10.jpg','img/taibei/taibei11.jpg','img/taibei/taibei12.jpg','img/taibei/taibei13.jpg','img/taibei/taibei14.jpg','img/taibei/taibei15.jpg','img/taibei/taibei16.jpg'),"
                . "(10,'xiamen','img/xiamen/xiamen1.jpg','img/xiamen/xiamen1.jpg','img/xiamen/xiamen2.jpg','img/xiamen/xiamen3.jpg','img/xiamen/xiamen4.jpg','img/xiamen/xiamen5.jpg','img/xiamen/xiamen6.jpg','img/xiamen/xiamen7.jpg','img/xiamen/xiamen8.jpg','img/xiamen/xiamen10.jpg','img/xiamen/xiamen11.jpg','img/xiamen/xiamen12.jpg','img/xiamen/xiamen13.jpg','img/xiamen/xiamen14.jpg','img/xiamen/xiamen15.jpg','img/xiamen/xiamen16.jpg'),"
                . "(11,'xian','img/xian/xian1.jpg','img/xian/xian2.jpg','img/xian/xian3.jpg','img/xian/xian4.jpg','img/xian/xian5.jpg','img/xian/xian6.jpg','img/xian/xian7.jpg','img/xian/xian8.jpg','img/xian/xian9.jpg','img/xian/xian10.jpg','img/xian/xian11.jpg','img/xian/xian12.jpg','img/xian/xian13.jpg','img/xian/xian14.jpg','img/xian/xian15.jpg','img/xian/xian16.jpg'),"
                . "(12,'xianggang','img/xianggang/xianggang1.jpg','img/xianggang/xianggang2.jpg','img/xianggang/xianggang3.jpg','img/xianggang/xianggang4.jpg','img/xianggang/xianggang5.jpg','img/xianggang/xianggang6.jpg','img/xianggang/xianggang7.jpg','img/xianggang/xianggang8.jpg','img/xianggang/xianggang9.jpg','img/xianggang/xianggang10.jpg','img/xianggang/xianggang11.jpg','img/xianggang/xianggang12.jpg','img/xianggang/xianggang13.jpg','img/xianggang/xianggang14.jpg','img/xianggang/xianggang15.jpg','img/xianggang/xianggang16.jpg'),"
                . "(13,'yangzhou','img/yangzhou/yangzhou1.jpg','img/yangzhou/yangzhou2.jpg','img/yangzhou/yangzhou3.jpg','img/yangzhou/yangzhou4.jpg','img/yangzhou/yangzhou5.jpg','img/yangzhou/yangzhou6.jpg','img/yangzhou/yangzhou7.jpg','img/yangzhou/yangzhou8.jpg','img/yangzhou/yangzhou9.jpg','img/yangzhou/yangzhou10.jpg','img/yangzhou/yangzhou11.jpg','img/yangzhou/yangzhou12.jpg','img/yangzhou/yangzhou13.jpg','img/yangzhou/yangzhou14.jpg','img/yangzhou/yangzhou15.jpg','img/yangzhou/yangzhou16.jpg')"
        ;
        $insert1 = mysqli_query($con, $insert);
        $createtable = 'create table if not exists userinfo (
                    useraccount int not null,
username varchar(50),
userpassword varchar(50),
userclass char(20),
primary key (useraccount)
)
engine=innodb;';
        $create2 = mysqli_query($con, $createtable);
        $insert = "insert into userinfo values (10000,'thebiggestwatermlen','123','thebiggestwatermelon') ";
        $insert1 = mysqli_query($con, $insert);




        $createtable = 'create table if not exists jubao (
message_id int,
username varchar(50),
contect varchar(50),
time varchar(50)
)
engine=innodb;';
        $create2 = mysqli_query($con, $createtable);
        ?>
    </body>
</html>
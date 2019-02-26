<?php
//执行一个sql语句，返回相应的结果
class DBDA
{
    public $host="localhost";//数据库服务器地址
    public $uid="root";//数据库用户名
    public $password="";//数据库密码
    //执行SQL语句的方法
    //参数里面：$sql代表要执行的sql语句；$type是sql语句的类型，0代表查询，1代表其他(增删改)；$db代表要操作的数据库
    function Query($sql,$type=0,$db="gym")
    {
        //造连接对象
        $dbconnect=new MySQLi($this->host,$this->uid,$this->password,$db);
        //判断连接是否出错
        !mysqli_connect_error() or die("连接失败！");
        //执行sql语句
        $result=$dbconnect->query($sql);
        //判断SQL语句类型
        if($type==0)
        {
            //如果是查询语句返回结果集的二维数组
            return $result->fetch_all();
        }
        else
        {
            //如果是其他语句，返回true或false
            return $result;
        }
    }

}
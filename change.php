<html>
<head>
    <meta charset="UTF-8">
    <title>货币</title>
</head>
<body>
<form action="change.php" method="post" name="form1">
    <table width="300"  border="0" cellpadding="0"  cellspacing="0">
        <tr>输入金额&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;币种选择</tr>
        <tr>

            <td width="150" height="30" align="center" >
                <input type="text" name="number">
            </td>
            <td width="200">
                <select name="select" size="1">
                    <option value="CNY" selected>人民币</option>
                    <option value="HKD" >港币</option>
                    <option value="KRW" >韩元</option>
                    <option value="CAD" >加元</option>
                    <option value="EUR" >欧元</option>
                    <option value="JPY" >日元</option>
                    <option value="GBP" >英镑</option>
                    <option value="RUB" >卢布</option>
                    <option value="AED" >迪拉姆</option>
                    <option value="ARS" >比索</option>
                    <option value="AMD" >德拉姆</option>

                </select>&nbsp;
                <input type="submit" name="submit" value="转换">
            </td>
        </tr>
    </table>
</form>

</body>
</html>
<?php
/*
 * 本例相关介绍及文档
 * 接口官网 https://www.nowapi.com
 * 接口文档 https://www.nowapi.com/api/finance.rate
 */
header("Content-Type:text/html;charset=UTF-8");

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
echo " 项目总金额（美元） : ".$_POST['number']/$result['rate']."<br>";
?>

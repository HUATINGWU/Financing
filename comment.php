<?php
$id = $_GET['id'];
require_once 'mysqlHelper.php';
$db = new mysqlHelper('localhost','root','root','dianzan');
$sql = "select * from news where id = '$id'";
$news = $db->GetOneData($sql);



?>
<!doctype html>
<html>
<head>
    <script src="jquery-1.9.1.min.js"></script>
    <meta charset="UTF-8">
</head>
<body>
<h1><?php echo $news['title'];?></h1>
<pre>
<?php echo $news['content'];?>

</pre>
<input type="hidden" name="id" value="<?php echo $id;?>">
点赞数：<span id="s"><?php echo $news['dianzan'];?></span>
<button id="btn">点赞</button>
</body>
</html>
<html>
<head>
    <meta charset="UTF-8">
    <title>发表评论页面</title>
</head>
<body>
<form action="insert.php" method="POST">
    <div>
        <div id="post">
            <h3>文章评论</h3>
            <p>昵称：</p>
            <p><input type="text" class="input" name="user" /></p>
            <p>评论内容：</p>
            <p><textarea class="input" name="txt" style="width:100%; height:80px"></textarea></p>
            <p><input type="submit" class='btn'value="发表" id="add" /></p>
            <div id="message"></div>
        </div>
        <div id="comments"></div>
    </div>
</form>

</body>
</html>


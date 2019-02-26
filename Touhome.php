<html>
<head>
    <script src="js/poll.js"></script>
</head>
<body>
<p id="poll">

<form>
    <lable style="color: red;font-weight: bold;">支持</lable>
    <input type="radio" name="vote"
           value="0" onclick="getVote(this.value)" style="background-color: red">

   <lable style="color:green;font-weight: bold;">反对</lable>
    <input type="radio" name="vote"
           value="1" onclick="getVote(this.value)" style="background-color: #1dcb8b">
</form>
</p>
</body>
</html>
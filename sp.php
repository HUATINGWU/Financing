               <div class="back">
            <span style="font-size:14px; font-family: sans-serif">
                <table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">  
                    <form action="<?php echo "sp.php";?>"  method="post" name = "myform" onsubmit="return CheckPost();" >  
              
                标题:<input type="text" name="title" /><br/>  <br/>
                内容:<textarea  name="content" cols="60" rows="9" ></textarea><br/>
<!--                <input type="submit" name="img_submit" value="上传图片"/>-->
                <br/><br/>
                <input type="submit" name="submit" value="提交留言" />  
            </form>  
                    <?php
                    include_once 'con1.php';
                    if($_POST){
                        $ctitle = $_POST['title'];
                        $ccontent = $_POST['content'];
                        $sql1 = "insert into message (cityname,user,title,content,lastdate)" .
                                "values ('$ctitle','$ccontent',now())";
                        mysqli_query($con, $sql1);
                    }
//                    $conn = mysqli_connect("localhost", "root", "", "donkey") or die("数据库链接错误");
//                    mysqli_query($conn, 'set names utf8');
                    $rowsPerPage = 7;   //定义每页的行数  
                    $e = "SELECT count(*) AS num FROM message";
                    $result = mysqli_query($con, $e); //查询表中的总记录数  
                    while ($row = mysqli_fetch_array($result)) {
                        $rows = $row['num'];  //得到表中总记录数  
                        $pages = ceil($rows / $rowsPerPage);    //计算出页数  
                    }


                    $curPage = 1;                       //当前要显示第几页，默认显示第1页  
                    if (isset($_POST['curPage'])) {//假如用户提交了指定的页数                          
                        $curPage = $_POST['curPage'];
                    } // 就将欲显示的页数设定为用户指定的值    
                    if(isset($_GET['curPage'])){
                        $curPage=$_GET['curPage'];
                    }
                    $sql = "SELECT * FROM message order by lastdate desc" . " LIMIT " . ($curPage - 1) * $rowsPerPage . ", $rowsPerPage";

                    $query = mysqli_query($con, $sql);
                    while ($row2 = mysqli_fetch_array($query)) {
                        $title = $row2['title'];
                        $content = $row2['content'];
                        $lastdate = $row2['lastdate'];

                        echo "                   <tr bgcolor=\"#eff3ff\">  
                        <td><b><big>  
                                    用户：$title
                                        时间：$lastdate 
                                            
                    </tr>  
                    <tr bgColor=\"#ffffff\">  
                        <td>$content</td>  
                    </tr>";
                    }

//     （区分大小写）          str_replace(find,replace,string,count)   1必需 规定要查找的值  2必需 规定替换 find 中的值的值  3必需 规定被搜索的字符串  4可选 对替换数进行计数的变量
                    function toHtmlcode($content) {
                        return $content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
                    }
                    ?>  

<!--                    <tr bgcolor="#eff3ff">  
                        <td><b><big>  
                                    标题：<?= $row['title'] ?></big><b/>     <b><sub>  
                                        用户：<?= $row['user'] ?>
                                        时间：<?= $row['lastdate'] ?></sub></b></td>  
                    </tr>  
                    <tr bgColor="#ffffff">  
                        <td>内容：<?= toHtmlcode($row['content']) ?></td>  
                    </tr>  -->
                    <?php ?>
                </table>  

            </span>  
        </div>
        <?php
//显示全部分页的链接  
        echo "<div align = 'center'>";
        for ($i = 1; $i <= $pages; $i++) {   //循环显示，每个链接指定curPage属性为其指向的页数就可以了  
            echo "<a href='sp.php?curPage=$i'>$i</a>  ";
        }
//下拉框分页  
        echo "<form name = 'form1' action = 'sp.php?curPage=$curPage' method = 'POST'>";
        echo "  <select name= 'curPage' onchange = 'document.form1.submit();'>";
        for ($i = 1; $i <= $pages; $i++) {
            if ($i == $curPage)
                echo "<option selected>$i</option>";
            else
                echo "<option>$i</option>";
        }
        echo "  </select>";
        echo "  </form>";
//首页、前页、后页、末页的链接  
        if ($curPage > 1) {
            echo "<a href = 'sp.php?curPage=1'>首页</a>  ";
            echo "<a href = 'sp.php?&curPage=" . ($curPage - 1) . "'>前页</a>  ";
        }
        if ($curPage < $pages) {
            echo "<a href='sp.php?&curPage=" . ($curPage + 1) . "'>后页</a>  ";
            echo "<a href = 'sp.php?&curPage=$pages'>末页</a>  ";
        }
        echo "</div>";
//        mysqli_close($conn);
        ?>
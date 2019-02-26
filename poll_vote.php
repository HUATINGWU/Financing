<?php
$vote = $_REQUEST['vote'];
//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);
//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];
if ($vote == 0)
{
    $yes = $yes + 1;
}
if ($vote == 1)
{
    $no = $no + 1;
}
//INSERT votes to txt file
$INSERTvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$INSERTvote);
fclose($fp);
?>

<table style="position: relative;top: -400px;background-color: wheat">
    <tr>
        <td style="color: black">支持数:</td>
        <td style="color: gray">
            <img style="background-color: red" src="poll.gif"
                 width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
                 height='8'>
            <?php echo round($yes)?><lable style="color: black">人</lable>
            <lable style="color: red"><?php echo(100*round($yes/($no+$yes),2)).'%'?></lable>

        </td>
        <br>
        <td style="color: black">反对数:</td>
        <td style="color: gray">
            <img style="background-color: green" src="poll.gif"
                 width='<?php echo(100*round($no/($no+$yes),2)); ?>'
                 height='8'>
            <?php echo round($no)?><lable style="color: black">人</lable>
            <lable style="color: green"><?php echo(100*round($no/($no+$yes),2)).'%'?></lable>

        </td>
    </tr>
    <tr>
<!--        <td>No:</td>-->
<!--        <td>-->
<!--            <img src="poll.gif"style="background-color: #1dcb8b"-->
<!--                 width='--><?php //echo(100*round($no/($no+$yes),2)); ?><!--'-->
<!--                 height='8'>-->
<!--            --><?php //echo(100*round($no/($no+$yes),2)); ?><!--%-->
<!--        </td>-->
    </tr>
</table>
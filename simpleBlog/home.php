<a href=add.php>添加文章</a><br><br>
<form action="home.php" method="get">
	<input type="text" name="keys">
	<input type="submit"  name="subs" value="搜索">
</form>



<?php
include("connect.php");
if(!empty($_GET['keys']))
{
	$w=" 'title'  like '%".$_GET['keys']."%'";
}else
{
	$w=1;
}

$i=55;
echo $sql="select * from test where  $w order by dates desc limit $i";
$query=mysql_query($sql);
while($rs=mysql_fetch_array($query))
{

?>
<h2><a href="view.php?id=<?php echo  $rs['id']?>"><?php echo $rs['title']?></a></h2>
<h6>时间：<?php echo date("y-m-d H:i" , $rs['dates'])?> 
<a href="edit.php?id=<?php echo $rs['id']?>">编辑</a>
<a href="del.php?del=<?php echo $rs['id']?>">删除</a>
</h6>
<p>内容：<?php echo iconv_substr($rs['posts'],0,20,"UTF-8")."....." ?></p>
<hr><br>

<?php
}
?>
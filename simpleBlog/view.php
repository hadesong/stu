<a href=home.php >回到首页</a><br><br>
<?php
include("connect.php");
 
 if(!empty($_GET['id']))
 {
 	$sql="select * from test where  id='".$_GET['id']."'";
  	$query=mysql_query($sql);
 	$rs=mysql_fetch_array($query);
 //	print_r($rs);
 	$sql2="update test set hits=hits+1 where id='".$_GET['id']."'";
 	mysql_query($sql2);
 }


 ?>
<h2>标题:<?php echo html_entity_decode($rs['title'])?></h2>
<!--接受资源文件$rs['title'] 并转换为为html 标签格式 -->
<h6>时间:<?php echo date("y-m-d H:i", $rs['dates'])?> 
	<a >浏览次数：<?php echo $rs['hits']?></a>
<a href="edit.php?id=<?php echo $rs['id']?>">  编辑</a>
<a href="del.php?del=<?php echo $rs['id']?>">  删除</a></h6>
<p>内容：<br><?php echo html_entity_decode($rs['posts'])?></p>




 <hr>
 <h3>留言</h3> 
 姓名*<input type="text" name="u_name"  ><br><br>
 邮箱*<input type="text" name="u_email"><br><br>
 网站 <input type="text" name="u_web"><br><br>
 <textarea rows=10 , cols=50></textarea><br><br>

 <input type="submit" name="u_sub" value="留言">
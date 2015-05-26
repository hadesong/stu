<?php
///使用表单 链接数据库服务器 

if(!empty($_POST['sub']))
{
	if (empty($_POST['host']) || empty($_POST['name']))
	{
		 echo "<script>alert('输入不能为空');</script>";
	}
	else
	{
		if(@mysql_connect("$_POST[host]" , "$_POST[name]" , "$_POST[psw]"))
		{
			echo "<script>alert('链接数据库成功');</script>";
		}
		else
		{
			echo "<script>alert('链接数据库失败,密码错误？');</script>";
		}
	}
}
?>
<form action='025.php' method='post' >
	服务器：<input type='text' name='host'>
	用户名：<input type='text' name='name'>
	密  码：<input type='text' name='psw'>
	<input type='submit' name='sub' value='提交'>
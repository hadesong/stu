<?php
	if(isset($_POST['sub']))		////isset — 检测变量是否设置
	{
		if($_POST['name']=="mr" && $_POST['pass']=="888888")
			{
				echo "<script>alert('您具有管理员权限');</script>";
			}
			else
			{
				echo "<script>alert('您没有管理员权限');</script>";
			}
	}
?>
 
<form action='008.php' method='post'>
用户名：<input type='text' name='name' ><br><br>
密&nbsp;码：<input type='text' name='pass' ><br><br>
 <input type='submit' name='sub' value='确定'>	
</form>

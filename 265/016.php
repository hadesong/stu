<form action='016.php' method='post'>
<input type='text' name='te'>
<input type='submit' name='sub' value='sub'>
</form>
<?php
	function str($str)
	{
		$array = array('图书','明日科技','软件','编程词典 ','编程','词典','性行为','sb');
		//implode（）将一个一位数组转换为字符串
		$repatr = implode($array);
		//preg_match 执行一个正则表达式
		if(preg_match("/$str/" , $repatr))
		{
			echo "<script>alert('您使用了禁用词语，请重新填写');location.href='016.php'</script>";
		}
		else
		{
			echo "内容为：".$str;
		}
	}
	if(!empty($_POST['sub']))
	{
		str($_POST['te']);
	}

?>

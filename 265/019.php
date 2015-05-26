<?php

function str($str)
{

	//preg_replace — 执行一个正则表达式的搜索和替换
	$str = preg_replace("//", "&nbsp;", $str);
	$str = preg_replace("/cha(13)/", "<br>", $str);
	echo "内容：".$str."<br>";
}
if(!empty($_POST['sub']))
{
	if($_POST['text']=="" || (($_POST['te']=="")&&($_POST['check']==1)))
	{
		echo "<script>alert('内容不能为空');location.href='019.php'</script>";
	}
	else
	{
		if (!empty($_POST['check'])||$_POST['select']!='1')
		 {
			echo "标题：".$_POST['text']."<br>";
			str($_POST[te].$_POST['check']);
		}
		else
		{
			echo "标题：".$_POST['text']."<br>";
			str($_POST['te']);
		}
	}
}
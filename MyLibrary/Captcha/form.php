<?php
if(isset($_POST['sub']))
{
	session_start( );
	
	//用户输入的 text 与服务器保存的authcode进行比较
	//用户输入大小写全部转换为小写，因为生成的随机字母是小写，防止用户输入大写时验证不通过 
	if(strtolower($_REQUEST['text'])==$_SESSION['authcode'])           
	{
		echo '<font color="#00cc00"><b>正确</b></font>';
	}
	else
	{
		echo '<font color="#cc0000"><b>错误</b></font>';
	}
	exit();
}
?>
<form action='form.php' method='post'>
<p>验证图片<img id="captcha_img" border="1" src="./captcha.php?r=<?php echo rand(); ?>" width="100" height="30" />
<!--用javascript 刷新验证码-->
<a href="javascript:void(0)" onclick=
"document.getElementById('captcha_img').src='./captcha.php?r='+Math.random()">换一个？</a>
</p>
<p>验证输入<input type='text' name='text' value=''></p>
<input type='submit' name='sub' value='提交'> 
</form>
<?php
////
	define("PI" , 3.1415926);
	function Encrypt($str)
	{
		# code...
		return $str=$str<<PI;
	}
	function Decrypt($str)
	{
		return $str=$str>>PI;
	}

	if(isset($_POST['sub']))
	{
		echo "加密口令&nbsp;&nbsp;".Encrypt($_POST['text'])."<br><br>";
		$_SESSION[pwd]=Encrypt($_POST['text']);
	}
?>
<form action='010.php' method='post'>
加密口令<input type='text' name='text'>
<input type='submit' name='sub' value='确定'>   

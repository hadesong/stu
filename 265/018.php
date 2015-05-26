<form action='018.php' method='post'>
	<input type='text' name='text' >
	<input type='submit' name='sub' value='sub'>
</form>
<?php
////strtolower  strtoupper 大小写转换 
if (!empty($_POST['sub']))
{
	$str = $_POST['text'];
	echo "输入的内容：".$str."<br><br>";
	$a = strtoupper($str);
	echo "转换为大写：".$a."<br>";
	$b = strtolower($str);
	echo "转换为小写：".$b."<br>"; 
}

?>

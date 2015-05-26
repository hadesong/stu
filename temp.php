<a href='http://127.0.0.1'>返回首页</a>
 <?php
/*
	///md5 值计算
 	for ($i=0; $i<3 ; $i++)
 	{
 		# code...
 		echo "wtf"."<br>";

 	}
 	$md5="admin";
 	echo $md5;
 	echo "<br>";
 	echo md5($md5);
 	echo "<br>";
 	echo $md5<<1;
 */
 
 
 

 
/////字符串的格式化
/*
if(isset($_POST['sub']))
{
	$text=$_POST['text'];
	echo "oText is||".$text."||The text end"."<br>";
	//trim（）函数可以去除字符串开始和结束位置的空格，
	//并将结果字符串返回
	//ltrim()去除字符串左边空格
	//rtrim ()去除字符串右边空格
	$trimText = trim($text);
	echo "tText is||".$trimText."||The text end"."<br>";
	$ltrimText = ltrim($text);
	echo "lText is||".$ltrimText."||The text end"."<br>";
	$rtrimText = rtrim($text);
	echo "rText is||".$rtrimText."||The text end"."<br>";
}
else
{
	exit();
}
*/
//转换ascii码
/*
$u1_str="c";
$u2_str=61;
echo ord($u1_str);
echo chr($u2_str);
echo "<br><br><br>";

*/
// echo "转换ascii码: "."<br>";
/*
echo "转换ascii码: "."<br>";
if(!empty($_POST['sub']))
{
	if(!empty($_POST['text']))
	{
		$userStr=$_POST['text'];
		for($i=0 ; $i<strlen($userStr) ; $i++)
			echo ord($userStr[$i])."<br>";
	}
	else
	{
		echo "<script>alert('内容不能为空');location.href='temp.php'</script>";
 		exit();
	}

}
*/
echo "<img src='sss.jpg' width='100xp'>";
phpinfo();

?>
<form action='temp.php' method='get'>
<input type='text' name='text' >
<input type='submit' name='sub' value='提交'>
</form>
<!--                 弹出显示OK窗口的死循环js脚本
 <script language="JavaScript">
                                      
</script>
-->

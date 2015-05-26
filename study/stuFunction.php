<?php

//两个或多个表单 如何处理提交?????
	if(isset($_POST['sub1'])){
		if($_POST['text']!=null){
			$num=$_POST['text'];
			echo $num."绝对值运算abs(num)".abs($num)."<br>";
			echo $num."正弦值sin:".sin($num)."<br>";
			echo $num."余弦值cos:".cos($num)."<br>";
			echo $num."开平方根sqrt:".sqrt($num)."<br>";
			echo $num."自然对数log:".log($num)."<br>";
			echo $num."10基地的对数log10:".log10($num)."<br>";
			echo $num."自然对数e的次方".exp($num)."<br>";
			echo $num."三次方".pow($num , 3)."<br>";
		}else{
			echo "请输入数字";
		}
	}
	if(isset($_POST['sub2'])){
	if($_POST['str']!=null){
		$num=$_POST['str'];
 		echo "strtolower".strtolower($num)."<br>";
 		echo "strtoupper".strtoupper($num)."<br>";
 		echo "trim(str)截去字符串收尾空格".trim($num)."<br>";
 		echo "substr(string, start)取字串".substr($num,"d")."<br>";
 		echo "strlen()取得字符串长度".strlen($num)."<br>";
	}else{
		echo "请输入字符串";
	}
}
?>
<form action='stuFunction.php' method='post'>
<input type='text' name='text' >
<input type='submit' name='sub1' value='SUB'>
</form>
<form action='stuFunction.php' method='post'>
<input type='text' name='str' >
<input type='submit' name='sub2' value='SUB'>
</form>
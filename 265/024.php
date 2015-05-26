<?php 
$arr = file(test.txt);
foreach($arr as $value)
{
	echo iconv("gb2312" , "utf-8" ,$value)."<br>";
}
?>
<?php
$str = file_get_contents('text2.txt');
echo iconv("gb2312" , "utf-8" , $str);
?>
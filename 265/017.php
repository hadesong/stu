<?php
 
	//strrev — 反转字符串
	$a = strrev('wtf.php');
	//explode — 使用一个字符串分割另一个字符串 
	$b = explode(".", $a);
	$c = strrev($b[0]);
	echo "文件扩展名为：".$c;
	echo "<br>".$b[1];
 
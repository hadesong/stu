<?php
/////随机函数rand()

	$arr=array("生日快乐","今天是你的生日"," 同学们为你许愿");
	$array=array("祝你万事如意","祝你生日快乐","祝你福如东海寿比南山");
	//定义随机数
	//rand(min,max) min,max	可选。规定随机数产生的范围。
	$rand=rand(0,2);
	echo $arr[$rand]."----".$array[$rand];
	echo "<br><br>".rand(); ////rand()在windows环境下RAND_MAX 只有 32768
?>
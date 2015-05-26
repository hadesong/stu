<?php
	//定义常量  用define（）定义的常量一旦定义就不能改变或取消
	define("PI",3.1415926);     
	$r=12;
	echo "半径为12个单位的圆面积".PI*($r*$r)."<br/>";
	//constant()函数动态获取常量值
	echo constant('PI');
	//defined()函数判断一个常量是否已经定义
	echo defined('PI');
?>
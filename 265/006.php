<?php
	// date_default_timezone_set("asin/ShangHai");
	date_default_timezone_set('PRC');
	$a=strtotime("now");
	$b=strtotime("26 Oct 1990");
	echo $a."\n";
	echo "输出日期".date("y-m-d H:i:s",$a)."<br><br>";
	echo $b."\n";
	echo "输出日期".date("y-m-d H:i:s",$b)."<br><br>";
	$c=ceil(($a-$b)/(3600*24));
	//float ceil(float value);   ceil()函数返回一个不小于value的整数
	echo "距离1990年10月26日已经过去".$c."天";
?>
<br><br><br>
<?php 
	date_default_timezone_set('PRC');
	$i=strtotime("now");
	$j=strtotime("24 Dec 1990" );
	echo $i."\n";
	echo date("y-m-d " , $i)."<br>";
	echo $j."\n";
	echo date("y-m-d ", $j)."<br>";
	$k=ceil(($i-$j)/(3600*24));
	echo "距离".date("y-m-d",$j)."有".$k."天";
?>
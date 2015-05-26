<?php
 
	echo "查找算法 ：顺序查找";
	$searchArr=array();
	for ($i=0; $i<100 ; $i++) { 
		$searchArr[$i]=rand(0,10);
	}

	function search(&$arr , $j){
		$num=0;
		foreach($arr as $key => $value){
			if ($j==$value) {

				echo "<br>".$j."在第".$key."位。";
				++$num;
 			}
		}
		if ($num=0) {
			echo "数组中找不到数字！";
		}
	}
 	echo "<br>----------<br>";
	print_r($searchArr);
	$k=8;
	search($searchArr , $k);
 
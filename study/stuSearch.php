<?php
#xxxxxxxx
//xxxxxxxxx
	echo "查找算法 ：顺序查找"; 
	$searchArr=array();
	for ($i=0; $i<100 ; $i++) { 
		$searchArr[$i]=rand(0,10);
	}

	function search(&$arr , $j){
		$num=0;
		foreach($arr as $key => $value){
			if ($j==$value) {
echo
				 "<br>".$j."在第".$key."位。";
				++$num;
 			}
		}
		if ($num=0) {
			echo "数组中找不到数字！";
		}
	}
 	echo "<br>------------------------------<br>";
	print_r($searchArr);
	$k=8;
	search($searchArr , $k);


	echo "<br><br><br><br>";
	echo "查找算法：二分查找";
	echo "<br>------------------------------<br>";
/*
二分查找 
数组先排序
找到中间的数
若要找的数大于中间的数 则向数组后查找，否则向前找
如果刚好等于，则找到
*/
//二分查找函数
function binarySearch($arr , $findVal , $leftIndex , $rightIndex){
	//判断不成立条件
	if($leftIndex>$rightIndex){
		echo "找不到！！！！";
		return ;
	}
	//找到中间的下标
 	$middleIndex=round(($rightIndex+$leftIndex)/2);
	echo $middleIndex."\t";
 
	if($findVal>$arr[$middleIndex]){
		binarySearch($arr , $findVal , $middleIndex , $rightIndex);
	}else if($findVal<$arr[$middleIndex]){
		binarySearch($arr , $findVal , $leftIndex, $middleIndex);
	}else{
		echo "<br>找到：".$arr[$middleIndex];
	}
}
$barray=array(-1,0,2,4,5,7,9,12,54);
for($i=0;$i<20;$i++){
	$barray[$i]=rand(0,20);
}
print_r($barray);
	echo "<br>-----------冒泡算法----------<br>";
	$temp=0;
	for($i=0;$i<count($barray)-1;$i++){
		for($j=0;$j<count($barray)-1-$i;$j++){          ////-$i 去除多余的预算步骤

			if($barray[$j]>$barray[$j+1]){
				////////两个位置互换
				$temp=$barray[$j];
				$barray[$j]=$barray[$j+1];
				$barray[$j+1]=$temp;
			}
		}			
	}
	print_r($barray);
	echo "<br>-----------冒泡算法----------<br>";
  
binarySearch($barray , 12 , 0 ,(count($barray)-1)); ////////该方法在数组中确实没有该查询数时 会出现死循环！！！



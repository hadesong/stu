<?php
//数组是一组关键字和值的集合
//数组可以存放任何数据类型
//count() 函数获取数组的长度 返回整型
$hens = array(3, 5, 1, 3, 2, 50, 2, 4, 6, null, 6);
echo "一共有" . count($hens) . "只鸡" . "<br>";
$wight = 0;
for ($i = 0; $i < count($hens); $i++) {
	//// 遍历数组的方法
	echo "第" . ($i + 1) . "只鸡体重" . $hens[$i] . "\t\t";
	$wight += $hens[$i];
}
echo "总体重是：" . $wight . "<br>";
for ($j = 0; $j < count($hens); $j++) {
	echo "ddddd\t";
}
echo "<br>";
$keyArray = array("name" => "Jok", "age" => 23, "city" => "China");
$keyArray1["name"] = "Mike";
$keyArray1["age"] = 23;
$keyArray1["city"] = "China";
$keyArray2 = array(3 => "Logo", "name" => "WWCCOO", 34, "4th");
// for($i=0;$i<count($keyArray1);$i++){
// 	echo $keyArray1[$i]."<br>";
// } 此方法不可用 数组下标为键值 不是以0开始的递增数
foreach ($keyArray as $key => $value) {
	echo $key . "=>" . $value . "\t";
}
echo "<br>";
foreach ($keyArray1 as $key => $value) {
	///foreach()适用范围更广泛，遍历关键字数组
	echo $key . "=>" . $value . "\t";
}
echo "<br>";
foreach ($keyArray2 as $key => $value) {
	echo $key . "=>" . $value . "\t";
}
echo "<br>";
echo $keyArray2[5]; ////若指定下标，则以“3”开始，跳过指定的key递增
///若使用true、false、null 做键值 则 可使用 1、0、""进行访问。
echo "<br>";
print_r($keyArray1); //显示数组信息
echo "<br>";
var_dump($keyArray1); //详细显示数组信息

////PHP语言数组是可以动态增长的,大多语言不允许直接增长
$a = array(3, 4, 5);
$a[14] = 34;
echo "<br>" . $a[14] . "<br>";
////PHP语言数组是可以动态增长的
/*
数组常用函数
 */
echo is_array($keyArray); //////////is_array() 判断是否是数组  返回bool 1或0
print_r(explode(".", "南宁.北京.江南.国家.中国.广西.松江")); ///拆分字符串返回一个数组 explode(delimiter, string)
echo "<br>";
var_dump(explode("&", "问问&传参&增长&看看&哦哦&泡泡&亲亲"));
echo "<br>";
$a = array();
echo count($a); /////定义一个数组 若没有赋值，则长度为0
echo "<br>";
$color = array("red", "blue", "green", "yellow");
for ($i = 0; $i < count($color); $i++) {
	echo $color[$i] . "\t";
}
echo "<br>";
foreach ($color as $key => $value) {
	echo $key . "=>" . $value . "\t";
}
echo "<br>-----------------------删除数组某个元素-------- unset -销毁该元素后索引（关键字）不会改变-----------------<br>";
echo "Befor" . "<br>";
print_r($color);
echo "<br>" . "after" . "<br>";
unset($color[2]);
print_r($color);
echo "<br>---------------------------------------------------------------------------------------------------<br>";

?>
<form action='stuArray.php' method='POST'>
 	<p>计算学生的平均成绩----使用:分隔各个成绩</p>
	<input type='text' name='te'>
	<input type='submit' name='sub' value='提交'>
</form>
<?php
//33.2:23:54:23.5:54.2:37
if (isset($_REQUEST['te'])) {
	$grades = $_REQUEST['te'];
	$gra = explode(":", $grades); ///////$grades为字符串 explode分割完后变成了数组 $gra
	$allgra = 0;
	foreach ($gra as $key => $value) {
		echo $value . "\t";
		$allgra += $value;
	}
	echo "共输入了" . count($gra) . "个成绩，总成绩" . $allgra . "平均分" . ($allgra / count($gra));
}

?>
<?php

echo "<br>------------排序-----------<br>
	内部排序：加载到内存后排序 交换式排序法(冒泡法、）、选择式排序法、插入式排序法<br>
	外部排序：数据量过大无法加载到内存，借助外部存储进行排序(合并排序法、直接合并排序法）<br>";
$sortArray = array(321, 13, 12, 22, 21, 31, 44, 43, 14);
echo "原 数 组 ：";
print_r($sortArray);
echo "<br>" . "sort()排序：";
sort($sortArray);
print_r($sortArray);

echo "<br>-----------冒泡算法----------<br>";
$sortArray = array(321, 13, 12, 22, 21, 31, 44, 43, 14);
$temp = 0;
for ($i = 0; $i < count($sortArray) - 1; $i++) {
	for ($j = 0; $j < count($sortArray) - 1 - $i; $j++) {
		////-$i 去除多余的预算步骤

		if ($sortArray[$j] > $sortArray[$j + 1]) {
			////////两个位置互换
			$temp = $sortArray[$j];
			$sortArray[$j] = $sortArray[$j + 1];
			$sortArray[$j + 1] = $temp;
		}
	}
}
print_r($sortArray);
echo "<br>-----------冒泡算法----------<br>";
echo "<br>-----------选择排序-------代码失败！！！----<br>";
echo "数组中第n次找最小的和第n位交换，n从1到最大值count（）";
$arr = array(321, 13, 12, 22, 21, 31, 44, 43, 14);

function selectSort($arr) {
	$temp = 0;
	for ($i = 0; $i < count($arr) - 1; $i++) {
		//假设$i是最小的数
		$minVal = $arr[$i];
		//记录假设的最小下标
		$minIndex = $i;
		for ($j = $i + 1; $j < count($arr); $j++) {
			if ($minVal > $arr[$j]) {
				$minVal = $arr[$j];
				$minIndex = $j;
			}
		}
		$temp = $arr($i);
		$arr[$i] = $arr[$minIndex];
		$arr[$minIndex] = $temp;
	}

}
print_r($arr);
echo "<br>-----------选择排序-------代码失败！！！---<br>";
echo "<br>-----------插入排序法----------<br>";
echo "http://blog.jobbole.com/11745/
	http://blog.csdn.net/iamfranter/article/details/6825207
	 http://www.cnblogs.com/xkfz007/archive/2012/07/01/2572017.html 排序法参考";
echo "算法效率：冒泡法<选择排序<插入排序法";
?>

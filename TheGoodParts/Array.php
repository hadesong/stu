<?php
	$myArray[0] = 1;
	$myArray1 = array(0=>1 , 0=>2 , 2=>3 , 3=>4);
	echo '数组遍历 foreach($variable as $key => $value) {# code...}'."<br/>" 
		. "它允许任意代码单步访问所提供数组的每一个元素或每组键值对.<br/>";
	foreach ($myArray1 as $key => $value) {
		echo $key . "=>" . $value . ".........." ;
	}
	$myArray2 = array('first'=>"first" , 
					  'fruit'=>array("apple" , "oranges" , "tomato") ,
					  'fname'=>"Peter" , 
					  'lname'=>"MacIntyre");
	echo "显示二维数组详细信息var_dump()<br/>";
	var_dump($myArray2);
	echo "<hr><font color='red'>foreach 遍历的只能是一位数组!!此做法会报一个提示错误 notice</font> <br/>" ;
	foreach ($myArray2 as $key => $value) {
		echo $key . "=>" . $value . "-----" ;
	}
	echo "<br/><font color='green'>访问二维数组值:</font>". $myArray2['fruit'][2] . "<br/><font color='green'>数组追加:</font><br/>";
	$myArray2['add'] = "123456789-0";
	$myArray2[] = "098765432-1";
	var_dump($myArray2);
	echo "<hr>";
	echo "<font color='blue'>array_splice() 函数指定从数组的第几个键(索引位置,而不是键的值)开始往后移除,负数表示从右边开始计算键</font><br>";
	$myArray3 = array_splice($myArray2, 1 , 3);  //数组移除的部分赋值给比变量$myArray3 , 第二个参数表示只删除3个;
	var_dump($myArray2);
	echo "<br/> ";
	var_dump($myArray3);
	echo "<hr>" . "<font color='red'>使用 unset() 删除数组\$myArray3 中的lname键</font>"."<br/>";
	unset($myArray3['lname']);
	var_dump($myArray3);
####  遍历数组
	echo "<hr>" . "<font color='green'>遍历键名:</font>";
	foreach (array_keys($myArray2) as $key ) {
		echo $key . ".......";
	}
?>
<?php
####  数组函数精选
####  数组函数精选
####  数组函数精选

//排序sort() 函数
	echo "<br/><font color='blue'> 生成随机数组:</font><br/>";
	$sortArray[] = "";
	for ($i=0; $i < 9; $i++) { 
		$num = rand(10 , 100);
		$sortArray[$i] = $num;
	}
	var_dump($sortArray);
	echo "<br/><font color='red' >sort对数组进行正向排序 rsort对数组进行逆向排序 返回bool值:</font><br/>";
	sort($sortArray);
	var_dump($sortArray);

//排序 asort()函数

	echo "<hr>生成随机数组:<br/>";
	$sortArray1[] = "";
	for ($i=0; $i < 9; $i++) { 
		$num = rand(10 , 100);
		$sortArray1[$i] = $num;
	}
	var_dump($sortArray1);
	echo "<br/><font color='green'>asort \ arsort类似于sort \ rsort ,区别在于保留原有数组的键-值对应关系:</font><br/>";
	arsort($sortArray1);
	var_dump($sortArray1);

//排序 ksort() 函数 
	echo "<hr><font color='blue'>ksort() \  krsort()函数对数组的键进行排序 适合用在关联数组上,因为索引数组的键通常是有序的:</font><br/>";
	ksort($sortArray1);
	var_dump($sortArray1);

//sort()针对字符串的排序
	echo "<hr><font color='red'>如果是字符串的,则根据字符串首字母的Ascii码进行对比排序??</font><br/>";
	$sortArray2 = array("aa" , "AA" , "b" , "be" , "b1" , "12");
	sort($sortArray2);
	var_dump($sortArray2);
	echo "<hr>";

/*
	usort()函数允许自定义特殊条件对数组进行排序 .
	也就是定义一个比较函数用来重复对相邻两个元素进行比较 .
	一定要看清楚 , 假如说你有一个数组需要排序 , 
	但前面提到的基础排序方法都不能满足,这才需要用到这个函数      多用于二维数组
*/
	function cmp($a , $b){
		if($a == $b){
			return 0;
		}return ($a<$b)? -1 : 1 ;
	}
	$a = array(30,40,60,80,10,70);
	usort($a, "cmp");
	$tip = <<<USORTtip
	<font color='green'> <strong>usort()函数允许自定义特殊条件对数组进行排序 .<br/>
	也就是定义一个比较函数用来重复对相邻两个元素进行比较 .<br/>
	一定要看清楚 , 假如说你有一个数组需要排序 , <br/>
	但前面提到的基础排序方法都不能满足,这才需要用到这个函数      多用于二维数组<br/></font></strong>
USORTtip;
	echo $tip;
	foreach ($a as $key => $value) {
		echo "$key--->$value || \n";
	}
?>
<hr>
<?php
####数学类函数
####数学类函数
####数学类函数

	$mathArray[] = null;
	for ($i=0; $i < 5; $i++) { 
		$numb = rand(10 , 100);
		$mathArray[$i] = $numb;
	}
	var_dump($mathArray);
	echo "----数组\$mathArray 中所有的数值之和为 array_sum():".array_sum($mathArray) . "<br/>";
	echo "使用count()函数求得数组内元素个数 , 则平均数为:"
		. array_sum($mathArray)/count($mathArray) ;
	echo "<br/>数字234.5565保留两位小数:round()------" . round(234.5565 , 2) . "<br/>";

##	确保数组中的所有元素都是唯一的:array_unique(); 
##	改函数会识别并删除数组中任何重复的元素 , 而后收缩数组..操作完后元素的键不会被重新编号

##	检测一个值是否在已知数组中 :in_array()
##	返回真 或假 ..如果想要返回数组中的键或部分元素,则使用array_search() 函数

##	打乱数组中的所有值: shuffle()
##	将数组中的元素重新随机排序 , 并分配新的索引值(即放弃或删除原始的键)

##	返回数组中全部或部分随机键 可以使用 array_rand() 函数

	$grades = array(23,54,76,82,29,29,95,45,39);
	var_dump($grades);
	echo "<br/>" ; 
	$grades = array_unique($grades);
	var_dump($grades);
	echo "<br/>" ;
	if(in_array(39, $grades)){
		echo "数字 39 在数组中,键名: " . array_search(29, $grades) ;
	}else{
		echo "no 39s here" ;
	}
	echo "<br/>";
	shuffle($grades);
	var_dump($grades);
	echo "<br/>" ; 
	$random = array_rand($grades) ; 
	echo "the random key from grades is :" . $random ;

///把数组的键与值 相互互换 可以使用 extract() 函数 .
///但这最好用在关联数组上 , 主要是因为 $0 , $1 不是有效的PHP变量名
	//转换一系列变量到数组里  compat() 

##	合并数组 array_merge()
##	把两个数组简单相连 , 如发现同名键值 , 合并操作中最后的键会覆盖前面的键
##	如合并以简单数字为下标 的索引数组是发生键的冲突,则索引会重新计算
	echo "<br/>";
	$testarray1 = array(1=>23 , 2=>63,85,29);
	$testarray2 = array(1=>43 , 2=>85,29,19);
	$allarray = array_merge($testarray2 , $testarray1);
	var_dump($allarray);
	echo "<br/>";
	$testarray3 = array("Keyboards"=>"KeyboardsTonyBanks" , "Drums"=>"D3333" , "BassGuitar"=>"MikeRutherford");
	$testarray4 = array("Drums"=>"4xxxxxx" , "Keyboards"=>"TonyBanks" ,"Testarr"=>"TestarrMikeRutherford");
	$allarray2 = array_merge($testarray4 , $testarray3);
	foreach ($allarray2 as $key => $value) {
		echo $value . "<br/>" ;
	}

##	array_walk()  
##	此函数通过一个已经定义的函数来实现双重职责: 循环数组的每个元素 并将这些元素逐个传递给已定义的函数
##	
	function add10($value){
		$value+=10;
		echo $value . "----" ;
	}
	$testarray5 = array(23,43,65,87,95,13,55,88,10);
	var_dump($testarray5);
	array_walk($testarray5, 'add10');

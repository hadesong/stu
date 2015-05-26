<?php
##   $fname 是对$firstname 的 引用  (类似指针)
$firstname = "peter";
$fname = &$firstname;
echo "变量的引用<br>" . $fname . "<br/>";
$fname = "Dawn";
echo $firstname . "<br/><hr>";
?>
<?php
##	php_strip_whitespace(filename);
#给这个函数传递一个文件名,它会返回一个去除所有注释和空行的干净代码

$firstname = "peter"; //除了函数内部,此变量全局可见
echo "变量的作用域:<br>" . $firstname . "<br/>";
function show_stuff() {
	$secondName = "beck";
	echo "inside show_stuff:" . $firstname . " " . $secondName;
}
show_stuff();
echo "Outside function" . $secondName; //$secondName仅仅在函数中有定义,此处提示变量未定义
echo "<br/><hr>";
##  定义的常量是可以全局访问的  第三个参数定义大小写不敏感 建议全部大写
define("SYS_OWNER", "peter");
define("SYS_MGR", "Simon", true);
echo "常量的定义:<br>System owner is:" . SYS_OWNER . "<br/>";
define("SYS_OWNER", "Michael"); //错误警告:定义的常量不能再被定义!!!
echo "system owner is:" . SYS_OWNER . "<br>";
echo "System manager is:" . SYS_MGR . "<br>";
echo "System manager is:" . SYS_mgr . "<br><hr>";
?>
<?php
##	PHP中的表达式,是代码语句的统称. 作为一般规则,任何一个赋值语句的表达式,都是作为指令语句处理
function MyName() {
	return "Peter";
}
$name = MyName();
$name ? $last = "MacIntyre" : $last = " ";
//$name 是否为真 ? 如果是,则$last="MacIntyre" 否则 $last = " "
echo $name . "<br/>";
echo $last . "<br/><hr>";

##  If.....Else......
$today = date("l");
if ($today == "Friday") {
	$tax_rate = '$tax_rate';
	echo $tax_rate . "<br/>";
} else {
	echo $today;
}
if (1 == '1') {
	echo "true 1 等于(==)'1'<br/>";
}

if (1 === '1') {
	echo "true 1 等于(==)'1'<br/>";
} else {
	echo "false 1 不等于(===) '1'";
}

///       嵌套会使得代码显得笨重,为了防止出现涩会难懂甚至无法运行的代码,要慎用多层嵌套并控制嵌套层数
$weekday = date("l");
$tax = 4;
if ($weekday == "Monday") {
	$discount = $tax * 0.05;
} elseif ($weekday == "Tuesday") {
	$discount = $tax * 0.06;
} elseif ($weekday == "Wednesday") {
	$discount = $tax * 0.07;
} elseif ($weekday == "Thursday") {
	$discount = $tax * 0.08;
} elseif ($weekday == "Friday") {
	$discount = $tax * 0.09;
} elseif ($weekday == "Saturday" || $weekday == "Sunday") {
	$discount = $tax * 0.1;
}
echo $weekday . "`s discount is :" . $discount . "<br/><hr>";
##  掌握三元运算符 ,可以写出很简洁的代码,暂时忘掉if语句:
$tax += date("l") == "Wednesday" ? 4 : 2;
echo "三元运算符:";
$tax == 6 ? printf("yes") : printf("no");
echo "<br/><hr>";
##  Switch......Case......
$salary = 20;
$taxx = 10;
switch ($today) {
	case 'Monday':
		$taxx += 2;
		$wages = $salary * 0.2;
		$msg_color = "red";
		break;
	case 'Tuesday':
		$taxx += 3;
		$wages = $salary * 0.3;
		$msg_color = "yellow";
		break;
	case 'Wednesday':
		$taxx += 4;
		$wages = $salary * 0.4;
		$msg_color = "black";
		break;
	case 'Thursday':
		$taxx += 5;
		$wages = $salary * 0.5;
		$msg_color = "green";
		break;
	case 'Friday':
		$taxx += 6;
		$wages = $salary * 0.6;
		$msg_color = "orange";
		break;
	case 'Saturday':
	case 'Sunday':
		$taxx += 7;
		$wages = $salary * 0.7;
		$msg_color = "purple";
		break;
}
echo "switch..case..语句:" . $taxx . "--" . $wages . "--" . $salary . "--" . $msg_color . "<br/>";

##	While 语句...
$repeat = 19;
while ($repeat <= 25) {
	echo "Number:" . $repeat . "-----";
	$repeat++;
}

echo "<br/>";
## For  语句...
for ($i = 27; $i < 50; $i += 4) {
	echo "the counter is:::" . $i . "----";
}

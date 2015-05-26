<?php
	session_start( );
	date_default_timezone_set("PRC");
	$date = "this will be placed in the cookie";
	// 在客户端电脑建立一个名为 CookieName的Cookie 内容为$date ,过期时间为web会话结束,一般为关闭浏览器
	setcookie("CookieName" , $date);
	// 在客户端电脑建立一个名为 CookieName的Cookie 内容为$date ,过期时间为当前时间之后的一个月(客户端时间)
	setcookie("AnotherCookieName" , $date , time()+60*60*24*30) ;

##  超全局变量 : 在PHP的所有作用域中,不论是一般脚本\函数\类或者其他外部包含的脚本,他们通通都是可用的.

	$newData = $_COOKIE["AnotherCookieName"] ;  	//$_COOKIE 以cookie名称来访问cookie数组的值.只要cookie还未过期;
 	print_r($newData) ;
 	$today = date("Y-m-d H:i:s ");
 	$_SESSION['today'] = $today ;
 	$_SESSION['login_name'] = "Peter" ;
 ##	Session 一旦建立完成,PHP就可用通过它来处理浏览器生命周期内文件运行环境的有效连接.
 	//名叫$_SESSION的超全局数组其实就是一个数据中转站,借助他数据将会在网站的不同页面之间穿插
 	//SESSION技术比cookie技术提供给你更多的可操作性,因为你可能恰好不擅长处理客户端浏览器编程环境
 	$loginName = $_SESSION['login_name'];
 	echo $loginName . "is now logged in ";
 	echo $_SESSION['today'];

##	$_GET 值通过URL作为媒介
 	//$_GET 在每个页面调用时都会被刷新!!
 	//所以必须把它传递到每一页进行向下调用的堆栈中.这点和SESSION的概念有所不同
 	$login = $_GET['login']	;
 	$logname = $_GET['logname'] ; 
 	if($_GET['login'] != NULL){
 		echo "Welcome " . $logname ; 
 	}else{
 		echo "login failed ... " . $logname ;
 	}
 ?>
 <form action='Webpage.php' method='get'>
 	用户名<input type='text' name='logname'>
 	<input type='submit' name='login' value='login'>
 </form>

<?php
## $_POST
	//对服务器使用超文本传输协议中的post方法提交数据

##  $_REQUEST 超全局数组,是一个包含各类请求数据的数组,即$_COOKIE \ $_GET \ $_POST 
	//数组中键名必须唯一
	//
	//此案例中,由于GET 和POST 具有相同的键名(fname\lname),所以REQUEST数组默认按照顺序(G P C)返回POST数据中的值.
	//把键名改为gfname glname 后 $_REQUEST可包含所有的值 
	//通过修改php.ini variables_order 控制超全局变量数组 GPCS 可删除或排序
	setcookie('mname' , 'Bec4567'); 	//此行代码为其作用,应放在单独表单文件中??
	$fname = $_GET['gfname'];
	$lname = $_GET['glname'];
	echo "the full name from GET:" . $fname . " " . $lname ;
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	echo "<br/> the full name from POST :" . $fname . " " . $lname ;
	echo "<br/> the Request array --->>" ;
	var_dump($_REQUEST);
 ?>

 <form method='post' action='Webpage.php?gfname=peter&glname=smith'>
<input type='hidden' value='Simon' name='fname'>
please enter your last name:<input type='text' size='15' name='lname'>
<input type='submit' value='submit'>
 </form>

<?php

##  function

	//通常,实践一个函数最好的做法是:由调用它开始"进入",在完成预定的工作后返回或不返回值来结束函数调用.
	//相对不好的做法是:依据不同的条件返回不同的东西,之说以说这种做法不好,是因为它增加了不必要的复杂性
	//同时更难维护和测试--------简单说:单纯的函数比复杂的好.

	function MyFunction(){
		echo "显示这一行说明函数MyFunction被调用<br/>";
	}
	MyFunction();

	//两函数的参数之间相互没有关系 
	function MyList($first , $second , $third){
		echo "here is first:" . $first . "<br/>" ;
		echo "here  is second:" . $second . "<br/>" ;
		echo "here is third:" . $third . "<br/>";
	}
	$th = 0 ;
	function AddThese($first , $second , $third=321){
		$answer = $first+$second+$third;
		return $answer;
		$th = $third ;
	}
	MyList("Peter" , "Chris" , "Dean");
	$first = 5 ;
	$second = 24 ; 
	$math = AddThese($first , $second ) ;
	echo "$first , $second , $th add  up to :" . $math ;

	//有些情况下,你需要让变量及其值收到函数内部行为的影响.这时,你可以向函数传递变量的引用 &
	// 就是告诉PHP 在将这个变量的值传递给函数的同时,将此变量的作用域眼神到函数内部.
	function displaylt(&$text){
		$text .=",you know you want to !!";
	}
	$message = "<br/>say hello tu the web world";
	displaylt($message) ; 
	echo $message;

## 
/*	include "xxx.php";	如果没有此文件,代码继续运行,会有报错
	require "xxx.php";	如果没有此文件,代码停止运行并抛出一个致命错误.
	函数包含(include)和 必须(require) 作用是对代码的拷贝
	PHP操作该指令时根据一定的顺序对指定的文件进行查找.首先在php.ini 中的include_path指定的路径位置,
	如果未找到,会在当前运行的文件所在目录查找..如果指定一个完整的文件路径,就不依赖任何环境配置

	include_once      和require_once  两个带有_once后缀的语句,
	保证对所包含的文件只引入一次 从而节省资源并避免可能出现重复定义和执行的问题

	原生的或者内置的函数总会比你用PHP代码写出的函数快得多,
	因为他们针对PHP做过高度优化(绝大多数内置函数都是本地编译的模块).
	但注意,有些很特殊的函数依赖于PHP中添加的特定模块 比如MySQL数据库交互函数,你必须在PHP环境中添加MySQL库才可以正常工作.
*/

?>

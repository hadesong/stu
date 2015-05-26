<?php
/*
	此方法若功能增多,代码会出现冗余,不推荐使用
	此种错误\异常代码处理方法不建议

	function a(){
		//调用方法
		//添加用户
		$res=addUser("ssss");
		//修改用户
		$res2=updateUser("xxxx");

	}
	function addUser($username){
		if($username=="shunping"){
			//添加成功
			return true;
		}else{
			//失败
			echo "Fill";
		}
	}
	function updateUser($username){
		if($username=="HHshunping"){
			//更新成功
			return true;
		}else{
			//失败
			echo "Fill1";
		}
	}

a();
*/
echo "使用异常机制处理::  ";
echo "<br>此方法应该在开发中大量的使用<br>";
echo "当异常被抛出,其后的代码块不会被执行<br><br>";
echo "每一个try或throw 代码块必须至少拥有一个对应的catch代码块<br>";
echo "使用多个catch代码块可以捕获不同种类的异常<br>";
echo "=====简而言之,如果抛出异常,就必须捕获它=======<br>
或者使用顶级异常处理器--set_error_handler() 进行捕获<br><br><br>";
try{
	addUser("shxxxunping");
	update("xiaoxxming");
}
//catch 捕获 Exception 是异常类,PHP内定义好的一个类
catch(MyException1 $e){
	echo $e->getMessage();
}catch(MyException2 $e){
	echo $e->getMessage();
}

class MyException1 extends Exception{}   ///继承Exception 定义多个异常类,使各种代码块抛出不同的异常
class MyException2 extends Exception{}


function addUser($username){
	if($username=="shunping"){
		//添加 OK
	}else{
		//添加error
		throw new MyException1("这行代码被执行,说明异常被抛出(throw-抛)", 1);
	}
}
function update($username){
	if ($username=="xiaoming") {
		//ok
	}else{
		throw new MyException2("Error Processing Request", 1);
		
	}
}
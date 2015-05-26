<?php
date_default_timezone_set("PRC");
	//php 处理错误的方法
	//
	//2015年5月18日15:55:57
	//die 用法一
/*
	if(!file_exists("aaa.txt")){
		die("文件不存在1--");
	}else{
		//打开文件操作
	}
	echo "OK";
	//die 用法二
	file_exists("aaa.txt") or die ("文件不存在2--");

*/
	function my_error($errno, $errmes){
		$err_info="错误号:".$errno."---my_error错误信息是:".$errmes;
		error_log(date("Y-m-d H:i:s",time()).$err_info."\r\n", 3, "MyError_log.txt");
	}
	function my_error1($errno1, $errmes1){
		echo "my_error1错误号:".$errno1."---错误信息是:".$errmes1;
	}
/*	设置错误处理句柄 还需要设置: set_error_handler()
	php中定义了E_NOTICE   E_WARNING E_USER_ERROR  E_USER_WARNING  
				E_USER_NOTICE E_RECOVERABLE_ERROR  E_ALL
				七种不同级别的错误
	错误处理器 set_error_handler(error_handler)函数会覆盖系统默认的错误返回函数
		set_error_handler(处理函数, 错误级别)  如果错误级别定义不对,则不会执行!!E_ALL
*/
	set_error_handler("my_error", E_WARNING);		
		$f=fopen("aaa.txt" , "r");

	set_error_handler("my_error1", E_NOTICE);
		$ff=$dfs;
	echo "<br>-------------<br>";
///////////////////////////////////////////////////////////
		//自定义错误函数::
	function my_error2($errno2, $errmes2){
		echo "错误号是:".$errno2;
		echo "my_error2错误信息是:".$errmes2.date("Y-m-d H:i:s",time());
	}

	//指定E_USER_WARNING级别的错误函数
	//trigger_error 产生一个用户级别的错误信息
	set_error_handler("my_error2", E_USER_WARNING);
	$age=300;
	if($age>120){
		trigger_error("输入年龄过大!!", E_USER_WARNING);
	}
//////////////error log/////////////////////////////////////////////////	


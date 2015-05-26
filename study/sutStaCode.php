<?php
	//302状态码使用:
	//使用header("Location:xxx.php")重定向到xxx.php页面
	//该页面的状态码： 	HTTP/1.1 302 Found
	//302状态码也可以跳转到外网
	//跳转过程在浏览器发生
	//状态码： 	HTTP/1.1 404 Not Found
//	header("Location:stxxxxxxuHTTP.php");
	echo "顶顶顶顶顶顶顶顶顶顶";
	// header("Location:http://www.baidu.com");
	//状态码： 	HTTP/1.1 304 Not Modified 表示从缓存取得资源



	//通过http响应控制浏览器间隔一定时间去跳转
	echo "<br><br>告诉浏览器延迟6秒后 重定向 到temp.php页面!!";
	header("Refresh:6; url=http://localhost/temp.php");

	//通过http相应控制页面缓存
	//默认情况下浏览器会缓存页面
	//通过header 禁用缓存(ajax)
	//设置三个头是因为 浏览器不兼容...o(╯□╰)o
	header("Expires: -1");
	header("Cache-Control:no_cache");
	header("Pragma:no-cache");


?>
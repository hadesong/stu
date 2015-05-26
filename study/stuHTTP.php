 
<?php
	$serverInfo=$_SERVER ;
	foreach ($serverInfo as $key => $value) {
		echo $key."=>".$value."<br>";
	}
	echo "你的IP地址是:".$_SERVER['REMOTE_ADDR'];
	//对IP字符串进行操作

	//代码不能正常工作.......HTTP_REFERER 被提示未定义的索引 
	//基本防盗链思路:用$_SERVER['HTTP_REFERER']获取当前页面的来源页面,
	//进行判断是否是来自自身网站后进行屏蔽
	if(strpos($_SERVER['HTTP_REFERER'], "http://localhost/")==0){
		echo "你可以正常访问";
	}else{
		echo "请勿盗链";
	}

?>

<?php
PHP工程师需要掌握的知识结构
1.精通PHP程序，必须做到熟练掌握语言本身的语法，熟悉常用类库、函数库。
2.养成良好的编程习惯，注释，架构，OO，代码的封装，代码的复用性等。
3.熟练配置IIS、Apache、Nginx。
4.熟练使用数据库存储，包括关系型数据库和非关系型数据库，索引，分表分库，SQL优化，读写分离等
5.Linux的基本操作，LAMP环境维护等。
6.熟练缓存改善网站性能，如内存存储（MemCache，Redis等) , 文件缓存，DB缓存，网站静态化，浏览器本地Cache，消息队列等
7.HTTP协议，轮询，长轮询，长连接，Socket等
8.前端开发，JS及相关库如jQuery，HTML、XML及相关DOM操作，CSS。
9.分布式处理，异步处理，非阻塞模式等
10.代码安全、Web漏洞攻击与防范，如SQL注入，XSS攻击，CSRF攻击，Web应用防火墙
11.统计处理，自动化脚本，监控脚本，负载均衡
12.PHP对图片处理，上传图片的过滤，图片裁剪，压缩，水印等
13.PHP加密算法，对称加密，非对称加密等。 14.正则表达式,文本匹配。 扩展技能： 1.各种算法，各种PHP扩展模块开发 2.熟悉其他语言，Python，Node，Go语言，C语言，Lua等 if($con = mysql_connect('localhost','root','')) {echo "Connect sucessfull"; } else {echo "Connect Fill"; } if(mysql_select_db("database_name") {echo "database select sucessfull";
}
{
	echo "database select fill";
}
if(mysql_query('insert into test(name) values("abc")'))
{
	echo "insert sucessfull";
}
{
	echo "insert fill";
	echo mysql_error; //返回上一个MySQL操作错误信息
}
mysql_close($con);//关闭一个非持久的mysql连接（脚本结束时会自动关闭非持久连接）



?>
<form
<!-----------------------------------------------------------------------!>
HTML文档与CSS的关联常见4种方式：

	1、使用link标记
		<link rel = "stylesheet" type = "text/css href = "name.css"/>
	2、使用style元素
		<style type = "text/css">
		body{background:#ffffff;}
		h1{font-size:20px;}
		</style>
	3、使用@import命令
		<style type ="text/css">
		@import url(name1.css);
		@import "name2.css";
		</style>
	4、使用style属性的内联样式（inline style）
		<p style = "color:#f00;">这是红色的字</p>

<!-----------------------------------------------------------------------!>


 ></form>
 <?php
 //
 	echo "无限极分类";
 ?>
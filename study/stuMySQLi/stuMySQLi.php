<?php
/*
*	MySQL扩展库操作数据库的步骤:
	1\获取链接
	2\选择数据库
	3\设置操作编码(建议有)
	4\发送指令CURD 
	5\接收返回结果,并处理
	6\释放资源并关闭链接
*/
	mysql_query("set names 'utf8'");
	date_default_timezone_set('PRC');
	$conn=mysql_connect("127.0.0.1", "rxxoot" ,"");
//	$sele=msql_select_db("test") or die("mysql_select_db Fill");
	if(!$conn)
		die("fill".mysql_error());
	else
		echo "33333";
/*	$sql="create table user1(
		id int primary key auto_increment,
		name varchar(32) not null,
		password varchar(64) not null,
		email varchar(128) not null,
		age tinyint unsigned not null
		);";
	if(!false==mysql_query($sql))
		echo "seccessfull";
	else
		echo "fill!";
*/
/*  插入数据
	$sql="insert into user1(name , password , email , age) 
					values('王五',md5('123456'),'wwwz@qq.com',23);";
*/

//	mysql_query($sql, $conn); //第二个参数可选,如果没有指定连接符则使用上一个链接,或打开一个链接

//		mysql_free_result($res); //释放资源,关闭链接
		mysql_close($conn);			//关闭链接,可有可无,推荐有.系统也不会马上关闭该链接
/*
使用完$res结果集后,一定要及时释放资源
*/
	mysql_select_db('user1');
	$sql="select * form user1";
	$ser=mysql_query($sql, $conn);
	echo $ser;
	;

	while ($a=mysql_fetch_row($ser)) {
 ccccccc
	}

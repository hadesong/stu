<?php


	//下载文件
	//文件名为中文的 需要转码:PHP文件系统函数老旧,需要对中文转码成gb2312
	$file_name="文件.txt";
	$file_name=iconv("utf-8", "gb2312", $file_name);
/*
	带路径的,建议使用绝对路径.速度更快	
	$file_path=$_SERVER['DOCUMENT_ROOT']."./down".$file_name;
*/
	if(!file_exists($file_name)){
		echo "文件不存在!!";
		return ;
	}

	$fp=fopen($file_name , "r");
	//获取文件大小 filesize(文件路径)
	$file_size=filesize($file_name);
	echo $file_size;

	//返回的文件
	header("Content-type: application/octet-stream");
	//按照字节大小返回
	header("Accept-Ranges:bytes");
	//返回文件大小
	header("Accept-Length:$file_size");
	//下载弹出对话框显示的文件名字
	header("Content-Disposition:attachment; filename=".$file_name);

	//向客户端送数据
	$buffer="1024";
	$file_count=0;
	//判断文件是否结束 切计数器file_count确保文件读完(安全考虑)
	while(!feof($fp) && ($file_size-$file_count>0)){
		//fread — 读取文件 fread( resource $handle  , int $length )从文件指针 handle 读取最多 length 个字节
		$file_date=fread($fp, $buffer);
		$file_count+=$buffer;
		//把部分数据回送给浏览器;
		echo $file_date;
	}
	//一定要关闭文件!!!!
	fclose($fp);

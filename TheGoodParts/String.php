<?php
	##	String
	/*
	echo  和print 之间很小差异:print输出完成时返回1,只支持一个参数,而echo支持多个参数.
	echo 也能够用PHP中的短标记和等号=组合(需要php.ini 中的short_open_teg 设为on 默认off)
	如::<?="sending out some text";?>
	*/
	$fname = "Petters";
	$lname = "MacIntyres";
	$string = "双引号中的变量会输出:<br/>The first name of the  author of this book is $fname and his last name is $lname<br/>";
	echo $string;
	//转义字符 \$  \" ....

	## HEREDOC 结构能创建字符串.
	//就解析变量的意义而言,类似于双引号,适合创建很长的字符串,且在程序中更容易阅读
	$strHEREDOC = <<<RightHERE
	HEREDOC结构创建字符串:<br/>
	Fusce eget nils a metus rhoncus placerat ac ac nisl .$fname<br/>
RightHERE;
	//HEREDOC 提供了一种很好的创建结构化查询语言SQL 语句的方法!!
	//HEREDOC 叫文档句法,语法:<<< 后提供一个标识符,然后在标识符后提供一个字符串,
	//再在字符串后庭此标识符来结尾/注意结尾标识符必须顶头写,不能有空格和缩进!!!
	echo $strHEREDOC;

	##  nowdoc 结构类似于HEREDOC 区别在于其等价于单引号字符串
	$strNOWDOC = <<<'RightNOW'
		NOWDOC结构创建字符串:<br/>
	Fusce eget nils a metus rhoncus placerat ac ac nisl .$fname<br/><hr>
RightNOW;
	echo $strNOWDOC;
	//字符串中的$fname 没有被解析
?>

<?php
	####字符串函数   重要!!!!
	//字符串截取 删除空格
	$str = "  |The quick brown fox jumps over the lazy dog123|  ";
	var_dump(ltrim($str));
	echo "<br/>";
	var_dump(rtrim($str));
	echo "<br/>";
	var_dump(trim($str));
	echo "<br/>";
	//删除首尾字符
	$hello = "abcdefg hijkabcd";
	$trimmed = trim($hello, "abcd");
	var_dump($trimmed);

	#	改变字符串大小写  函数只是在他们的作用域内改变大小写,并没有真实改变变量$str
	echo "<br/>" . $str . "<br/>";
	var_dump(ucwords($str));
	echo "<br/>" . $str . "<br/>";
	var_dump(strtolower($str));
	echo "<br/>" . $str . "<br/>";
	var_dump(strtoupper($str));
	echo "<br/>" . $str . "<br/>";
	//首字母大小写变化
	$string = "smith";
	echo $string . "首字母大写<br/>";
	var_dump(ucfirst($string));
	$string = "SMITH";
	echo "<br/>" . $string . "首字母小写<br/>";
	var_dump(lcfirst($string));

	#	字符串查找
	$str = "  |Theeee quick brown fox jumps over the lazy dog123|  ";
	echo "<br/>Word count(单词数):" . str_word_count($str) . "<br/>";
	echo "String length(包括空格):" . strlen($str) . "<br/>";
	echo "String length trimmed(去掉空格):" . strlen(trim($str)) . "<br/>";
	$needle = "BROWN fox";
	echo "strstr()查找第一次出现的特定文本,区分大小写,找到后返回\"针\"在内的后半部,没找到返回false:
	<br/><font color='red'><b>注意::</b></font>false不等用与数字0 ,如果要进行判断 需要 === ";
	var_dump(strstr($str, $needle));
	echo "<br/>stristr() 与strstr() 类似,但不区分大小写:<br/>";
	var_dump(stristr($str, $needle));
	echo "<br/>" . $str . "<br/>";

	var_dump(strpos($str, "over"));
	//返回over从字符串$str中的第几个字符开始 找不到返回false  

	$str_replace = str_replace("over", "revo", $str);
	//str_replace($search , $replace , $subject)  在$subject中查找$search 并替换成 $replace  返回字串或数组
	print_r($str_replace);
	$str_str = substr($str, 8);
	//substr($string , $start (, $length)) 	返回$string中$start开头$length结尾的字符串 ,
	//$length没有则返回所有 ..通常与strpos()函数结合使用
	echo "<br/>";
	print_r($str_str);

?>
<?php
	$string = "The <strong>quick</strong> brown fox <a href='jumping.php'>jumps</a> over the lazy dog";
	echo "<br/>原字符串输出:" . $string . "<br/>" ; 
	echo "strip_tags()函数去掉html标签:" . strip_tags($string) . "<br/>" ; 
	echo "strip_tags()函数保留指定标签:" . strip_tags($string , '<strong>') . "<br/>" ;

	$web_path = "I'm Irish and \my name is O'Mally" ; 
	echo addslashes($web_path) . "<br/>" ;
	//addslashes($str) 函数返回转义后的字符。 即添加反斜杠
	echo stripslashes($web_path) . "<br/>" ;
	//stripslashes($str) 函数返回一个去除转义反斜线后的字符串 . 即去掉反斜杠
	//如果使用addslashes函数后在使用stripslashe函数 ,则 所有的反斜杠都会被移除 .
	$strhtml = htmlentities($string) ; 
	//将html标签转换为原生格式,如 < 变为 &lt ; 
	//处于安全考虑  	应该在用户输入时转换标签后在存入数据库
	echo ($strhtml) ;
	echo html_entity_decode($strhtml) . "<br/>" ;
	//html_entity_decode() 把原生html格式 转换成标签 , 

	echo str_shuffle("abcedfghijklmnopqrstuvwxyz") . "<br/>" ;
	//随机打乱一个字符串 
	echo md5($string);
	//获取md5值

?>


<?php
//循环输出ascii
	echo "<hr>";
	for ($i=33; $i < 127; $i++) { 
		echo $i ."-->" . "<font color='red' ><strong>" .chr($i) ."</strong></font>&emsp;&emsp;&emsp;";
		if ($i%10==0) {
			echo "<br/>";
		}
	}
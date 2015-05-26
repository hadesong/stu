<?php
///可变变量 $$  ；；；工作原理是该变量的名称 由另外一个变量的值确定
	$str_name="str_name_1";
	$str_name_1="I Love PHP!!";
	echo $$str_name;

?>
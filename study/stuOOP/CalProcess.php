<?php
	require_once "OperService.class.php";
	if(isset($_REQUEST['num1'])){
		$num1=$_REQUEST['num1'];
	}else{
		echo "请输入num1";
	}
	if(isset($_REQUEST['num2'])){
		$num2=$_REQUEST['num2'];
	}else{
		echo "请输入num2";
	}
	if(isset($_REQUEST['oper'])){
		$oper=$_REQUEST['oper'];
	}else{
		echo "请输入oper";
	}

	//创建对象
	$operService = new OperService();
	echo $operService->getResult($num1, $num2, $oper);
?>
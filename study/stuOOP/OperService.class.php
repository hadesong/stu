<?php
	//定义一个专门提供计算的类
	class OperService{
		public function getResult($num1, $num2, $oper){
			switch ($oper) {
				case '+':
					return $num1+$num2;
					break;
				case '-':
					return $num1-$num2;
					break;
				case '*':
					return $num1*$num2;
					break;
				case '/':
					return $num1/$num2;
					break;
				default:
					echo "操作符错误";
			}
		}
	}
<?php
	//做小于10 的循环
	for($a=0 ; $a<10 ; $a++)
	{
		echo $a%2==0? $a."是偶数"."\n":$a."是奇数"."\n";       //三元运算符 x？x ：x
	}
?>
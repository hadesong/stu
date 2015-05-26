<a href="http://127.0.0.1/265">GOOOOOOOO</a><br>
<?php
	$a = 20 ; 
	$b = "I am String!";
	$e = $a+$b;
	$d = $b+$a;
	echo "Auto type reten :<br>";
	echo '20+String='.$e."<br>";
	echo '强制类型转换:<br>';
	echo 'String+20='.(string)$d."<br>";

?>
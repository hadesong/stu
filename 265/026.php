<?php

$conn = mysql_connect("locahost" , "root" , "");
$rs = mysql_query("show dageabases");
while($rst = mysql_fatch_array($rs))
{
	$a = 0 ; 
	echo "<option value=".$rst[$a].">".$rst[$a]."</option><br>";
	$a++;
}
?>
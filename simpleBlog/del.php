<a href=home.php >回到首页</a><br><br>
<?php
include("connect.php");
 
if(!empty($_GET['del']))
{
	$d=$_GET['del'];
	$sql="delete from test where id='$d'";
	if(false!==mysql_query($sql))
	{
		echo "Delete sucessfull!!";
	}
	else
	{
		echo "Delete fill!!";
	}
}
?>
 
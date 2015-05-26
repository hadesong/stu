<?php
 
if(!empty($_POST['yes']))
{
	echo "yess";
}
elseif (!empty($_POST['no']))
{
	echo "noo";
}
?>
<form action="test.php" , method="post">
<input type="submit" , name="yes" , value="yess">
<input type="submit" , name="no" , value="noo">

</form>
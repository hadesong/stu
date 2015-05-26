<a href=home.php >Go Home</a><br><br>
<?php

include("connect.php");
if(!empty($_POST['sub']))
{

	$v_Ttitle = htmlentities($_POST['title']);
	//获取表单$_POST 并转换为 html实体(类似&lt样式)
	$v_Ttext = htmlentities($_POST['con']);
	$v_time=time();
	$sql="insert into test (id , title , dates ,posts) 
			values(null, '$v_Ttitle' , $v_time , '$v_Ttext')";
	if(false!==mysql_query($sql))
	{
		echo "secussfull!";
	}
	else
	{
		echo "fill!!";
	}
}

?>

<form  action="add.php" , method="post">
Title<input type="text" name="title"><br><br>
Text<textarea  rows="10" cols="50" name="con"></textarea><br><br>
<input type="submit" name="sub" value="suub">

</form>
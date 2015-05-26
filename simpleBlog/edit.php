<a href=home.php >Go Home</a><br><br>
<?php
 include("connect.php");



if(!empty($_GET['id']))
{
	$sql="select * from  test where id='".$_GET['id']."'";
	$query=mysql_query($sql);
	$rs=mysql_fetch_array($query);
}

 

if(!empty($_POST['sub']))
{
	$n_title=$_POST['title'];
	$n_text=$_POST['con'];
	$n_time=time();
	$hid=$_POST['hid'];
	$sql="update test 
			set title='$n_title',
				dates='$n_time',
				posts='$n_text'
			where 
				   id='$hid' ";
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

<form  action="edit.php" , method="post">
	<input type="hidden" name="hid" value="<?php echo $rs['id']?>">
Title<input type="text" name="title" 
value="<?php echo $rs['title']?>"><br><br>

Text<textarea  rows="10" cols="50" name="con">
<?php echo $rs['posts']?></textarea><br><br>

<input type="submit" name="sub" value="更新">


</form>
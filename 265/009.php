<?php
	//获取1000-2020年中的闰年
	if(isset($_POST['subb']))
	{
		$i=0;
		$x=$_POST['text'];
		echo $_POST['text']."-2020年中的闰年"."<br><br>";
		for($a=$x ; $a<=2020 ; $a++)
		{
			if($a%4 == 0 )
			{
				echo $a . "&nbsp;&nbsp;";

				$i++;
				if($i%10==0)
				{
					echo "<br>";
				}

			}
				
		}
		echo "<br><br>"."共".$i."个闰年";
	}
?>
<form action='009.php' method='post'>
	<input type='text' name='text' >
	<input type='submit' name='subb' value="计算闰年">
</form>
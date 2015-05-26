<?php
/*
*
*

	//create short variable names
	if(isset($_POST['sendFeedback'])){
		if(!empty($_POST['name']) && !empty($_POST['email'])&& !empty($_POST['feedback'])){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$feedback=$_POST['feedback'];

			//set up some sataic information
			$toaddress = "feedback@example.com";
			$subject = "FeedBack from web site";
			$mailcontent = "Customer name:".$name."\n".
							"Customer email:".$email."\n".
							"Customer comments:\n".$feedback."\n";
			$fromaddress = "From:webserver@example.com";

			//invoke mail() function to send mail
			mail($toaddress, $subject, $mailcontent, $fromaddress);
			echo "<p>Your feedback has been sent.</p>";
		}else{
			echo "请输入完整内容";
		}

	}else{
		echo "未提交!!";
	}
*/

//	mail($toAddress, $subject, $message); ////发送邮件的地址,主题,邮件内容.
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$feedback = trim($_POST['feedback']);

	echo "trim()函数默认情况下去除字符串前后的换行和回车符(\\n和\\r),
	水平和垂直制表符(\\t和\\x0B),字符串结束符(\\0)和空格<br>";
	echo "ltrim() 与 rtrim() 分别是去掉字符串前 与字符串后的空格<br>";
	echo $name."<br>";
	echo $email."<br>";
	echo $feedback."<br>";
	echo "nl2br(string)函数将字符串作为输入参数,用XHTML中的<br/>替换字符串中的换行符<br>";
	//如果是段落输入 则可以正常显示,否则会像trim一样 只输出一整行
	echo nl2br($_POST['feedback']);


?>

<html>
<head><title>Bob`s Auto Parts - Feedback Submitted</title></head>
<body>
<h1>Feedback submitted</h1>
<form action='stuString.php' method='post'>
	Your name:<br><input type='text' name='name'>
	<br>Your email:<br><input type='text' name='email'>
	<br>Your Feedback:<br><textarea rows="10" cols="50"name='feedback'></textarea>
	<br><input type='submit' name='sub' value='sendFeedback'>
</form>
</body>
</html>


<html>
<head><title>我的计算器</title></head>
<script type="text/javascript">
	function check(){
		var num1val=document.getElementById("num1").value;
		var num2val=document.getElementById("num2").value;
		if(isNaN(num2val) || isNaN(num1val)){
			window.alert("请输入数字!");
		}
	}
</script>


</html>
<h1>我的计算器</h1>
<form action='CalProcess.php' method='post' onsubmit="return check()">
num1:<input type='text' id='num1' name='num1'><br>
num2:<input type='text' id='num2' name='num2'><br>
oper:
<select name="oper">
<option value="+">+</option> ///数据以http方式传输
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>





<input type='submit' name='sub' value='提交'>
</form>
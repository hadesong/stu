<?php
//将功能打包成一个函数  参数分别是 图片宽度、图片高度、验证码字体大小、干扰点数、干扰线数
// 今后可直接调用该函数 并传参
function captCha($imageWidth , $imageHeight  , $ffontSize  , $pointNum  , $lineNum )
{

	//////使用GD库制作验证码
	session_start( );                                        //告诉服务器程序用到session方法  该方法必须放在文件顶部
	$image = imagecreatetruecolor($imageWidth , $imageHeight);   				 //默认输出黑色背景
	$bgcolor = imagecolorallocate($image , 255, 255, 255);   //生成一个彩色像素
	imagefill($image , 0, 0, $bgcolor);						 //填充彩色像素到资源$image

	//随机验证数字循环
/*	for($i=0 ; $i<4 ; $i++) 								
	{
		$fontsize= 8;
		$fontcolor=imagecolorallocate($image , rand(0,120) , rand(0,120) , rand(0,120));       //设置数字颜色为浅色随机色
		$fontcontent = rand(0 , 9);
		$x = ($i*100/4)+ rand(5 , 10);
		$y = rand(5 , 10) ;
		imagestring($image , $fontsize , $x , $y , $fontcontent , $fontcolor);
	}
*/
	$captch_code='';

	//随机数字加字母的循环 
	for($i=0 ; $i<4 ; $i++)
	{
		$fontSize=$ffontSize ; 
		$fontColor = imagecolorallocate($image , rand(11,120) ,  rand(11,120) , rand(11,120));
		$data='abcdefghijkmnpqrstuvwxy3456789';											 //去掉容易是用户混淆的数字、字母
		$fontContent = substr($data , rand(0 , strlen($data)),1);						 //返回字符串的子串 substr($data , int第几位 ， 几个串)		
		$x = ($i*100/4)+ rand(5 , 10);
		$y = rand(20 , 25) ;
		imagettftext($image, $fontSize, rand(-15 , 15), $x, $y , $fontColor, 'georgiaz.ttf', $fontContent);
		$captch_code.=$fontContent;
	}
	//获取随机验证码
	$_SESSION['authcode'] = $captch_code;       

	//随机干扰点循环
	for($i=0 ; $i<$pointNum ; $i++)					
	{
		$pointcolor  = imagecolorallocate($image , rand(50 , 200),rand(50 , 200),rand(50 , 200));  ////获取随机颜色 的 点
		imagesetpixel($image , rand(1,99) , rand(1,29),$pointcolor);							   //点随机分配在背景框中
	}

 	//随机干扰线 循环
	for($i=0 ; $i<$lineNum ; $i++)                   
	{	
		$linecolor = imagecolorallocate($image , rand(80 , 220), rand(80 , 220), rand(80 , 220));
		imageline($image, rand(1,99), rand(1,29) , rand(1,99) , rand(1,29) , $linecolor);
	}

	header('content-type:image/png');
	imagepng($image);

	//养成好习惯 销毁资源 
	imagedestroy($image);

}


 captCha(100 , 30 , 20 , 200 , 4);
<?php
date_default_timezone_set("PRC");
echo "当前时间：".date('Y年m月d日H点i分s秒')."<br>";
$time=time();

///strtotime — 将任何英文文本的日期时间描述解析为 Unix 时间戳 
$time_r = strtotime("1 January 2016");

//ceil   ceil — 进一法 取整  
echo "距离2016年元旦还有".ceil((($time_r-$time)/(3600*24)))."天";
<?php
/////////快速排序法 消耗系统内存 速度相当快 适合应用于大数据中的排序
set_time_limit(0);                          //设置超时,服务器默认为30秒,0为不限时
ini_set ('memory_limit', '2024M');          //设置内存,服务器默认为十几M
date_default_timezone_set("PRC");

/*
function quick_sort($arr) {
    //先判断是否需要继续进行
    $length = count($arr);
    if($length <= 1) {
        return $arr;
    }
    //如果没有返回，说明数组内的元素个数 多余1个，需要排序
    //选择一个标尺
    //选择第一个元素
    $base_num = $arr[0];
    //遍历 除了标尺外的所有元素，按照大小关系放入两个数组内
    //初始化两个数组
    $left_array = array();//小于标尺的
    $right_array = array();//大于标尺的
    for($i=1; $i<$length; $i++) {
        if($base_num > $arr[$i]) {
            //放入左边数组
            $left_array[] = $arr[$i];
        } else {
            //放入右边
            $right_array[] = $arr[$i];
        }
    }
    //再分别对 左边 和 右边的数组进行相同的排序处理方式
    //递归调用这个函数,并记录结果
    $left_array = quick_sort($left_array);
    $right_array = quick_sort($right_array);
    //合并左边 标尺 右边
    return array_merge($left_array, array($base_num), $right_array);
}
*/
function quicksort(&$str){ 
if(count($str)<=1){
    return $str;//如果个数不大于一，直接返回 
} 
$key=$str[0];//取一个值，稍后用来比较； 
$left_arr=array(); 
$right_arr=array(); 
for($i=1;$i<count($str);$i++){//比$key大的放在右边，小的放在左边； 
    if($str[$i]<=$key) 
        $left_arr[]=$str[$i]; 
    else 
        $right_arr[]=$str[$i]; 
} 
$left_arr=quicksort($left_arr);//进行递归； 
$right_arr=quicksort($right_arr); 
return array_merge($left_arr,array($key),$right_arr);//将左中右的值合并成一个数组； !!!!!返回一个数组!!!!! 
}//以下是测试 


///获取一个长度为max的随机数组
$arr=array();
$max=1000;
for ($i=0; $i <$max  ; $i++) { 
    $arr[$i]=rand(1,$max);
}
foreach ($arr  as $key => $value) {
    echo $value."\t ";
    if(($key+1)%20==0) {
        echo "<br>"; 
    }
}


echo "排序开始时间：".date("Y-m-d H:i:s")."<br>";
$qArray=quicksort($arr);
echo "排序结束时间：".date("Y-m-d H:i:s")."<br>";
foreach ($qArray  as $key => $value) {
    echo $value."\t ";
    if(($key+1)%20==0) {
        echo "<br>"; 
    }
}
 
?>


<?php
$arr = array(3, 2, 1);
$n = count($arr);
//每循环一次，就跑一趟后面的排序
for($j=0; $j<$n-1; $j++) {
//对后面没排好的，循环查找出最大（最小）的，进行一趟排序
    for($i=$j; $i<$n-1; $i++) {
        if($arr[$j] > $arr[$i+1]) {
            $t = $arr[$j];
            $arr[$j] = $arr[$i+1];
            $arr[$i+1] = $t;
        }
    }
}
print_r($arr)

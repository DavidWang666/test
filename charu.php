<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>

<?php
$in=4;
$arr=array(1,2,3,5,6);
$c=count($arr);
if($arr[$c-1] < $in) {
    $arr[$c+1] = $in;
	 print_r($arr);
    }
	else
for($i=0;$i<$c-1;$i++)
{
if($in<=$arr[$i])
{$t1=$arr[$i];
$arr[$i]=$in;
 for($j=$i+1; $j<$c+1; $j++) {
            $t2 = $arr[$j];
            $arr[$j] = $t1;
            $t1 = $t2;
			}



}
 }print_r($arr);
?>
</body>
</html>

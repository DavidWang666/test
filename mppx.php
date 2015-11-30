<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>练习</title>
</head>

<body>
<?php
$arr=array(3,2,1,5,6,4);
$n=count($arr);
for($j=0;$j<$n-1;$j++){
for($i=$j;$i<$n-1;$i++){
if ($arr[$j]>$arr[$i+1])
{
            $t = $arr[$j];
            $arr[$j] = $arr[$i+1];
            $arr[$i+1] = $t;
  print_r($arr);
 echo "<br>";

}
}
}
print_r($arr);
?>


</body>
</html>

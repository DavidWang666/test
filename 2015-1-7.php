<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php 
echo "�ҵĵ�һ��PHP�ű�</br>eeeeeeee</br>";

?>
<?php
echo "nnnnnnnnnnnnnnnnnn</br>"

?>


<?php
$x=5;
$y=333333;
$z=$x+$y;
echo $z;
?>



<?php


$x=5; // global scope
  
function myTest() {
   $y=10; // local scope
   echo "<p>�ں����ڲ����Ա�����</p>";
   echo "���� x �ǣ�$x";
   echo "<br>";
   echo "���� y �ǣ�$y";
} 

myTest();

echo "<p>�ں���֮����Ա�����</p>";
echo "���� x �ǣ�$x";
echo "<br>";
echo "���� y �ǣ�$y";

?>
<div>
<?php
echo date("y-m-d");
?>
</div>
<?php 
$x = 5985;
var_dump($x);
echo "<br>"; 
$x = -345; // ����
var_dump($x);
echo "<br>"; 
$x = 0x8C; // ʮ��������
var_dump($x);
echo "<br>";
$x = 047; // �˽�����
var_dump($x);
?>
<?php
$cars=array("123","3","444");
var_dump($cars);
?>
<?php
$x="hello word";
$x=null;
var_dump($x);
?>

<?php
echo strlen("hello world!");
?>

<?php
echo "<table border=1 bgcolor='red' align='center'>";
echo "</tr>";
echo "<td>hshhshsh</td>";
echo "<td>hshhshsh</td>";
echo "<td>hshhshsh</td>";
echo "</tr>";
echo "</tr>";
echo "<td>hshhshsh</td>";
echo "<td>hshhshsh</td>";
echo "<td>hshhshsh</td>";
echo "</tr>";
echo "</tr>";
echo "<td>hshhshsh</td>";
echo "<td>hshhshsh</td>";
echo "<td>hshhshsh</td>";
echo "</tr>";
echo "</tr>";
echo "<td>hshhshsh</td>";
echo "<td>hshhshsh</td>";
echo "<td>hshhshsh</td>";
echo "</tr>";
echo "</table>";
?>








































</body>
</html>

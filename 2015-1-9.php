<html>
<head>
</head>
<body>

<?php
function add($x,$y){
$z=$x+$y;
return $z;
}

echo "2+5=".add(2,5)."<br>";
?>
<?php
$numbers=array(3,5,1,22,11);
sort($numbers);

$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++)
   {
   echo $numbers[$x];
   echo "<br>";
   }
?>
<?php
$a=8.03;
$b=7.96;
echo bcsub($a,$b,2);
echo "<br>";
?>


<?php
$f=array(1,2,3,4,5);
$c=count($f);
for($i=0;$i<$c;$i++)
{
echo $f[$i]."<br>"; 
}


?>
</body>


</html>
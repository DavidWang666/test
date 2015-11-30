<?php

$myfile="Inc/file.txt";
$fp=fopen($myfile,"r");
$num=fgets($fp);

$zero=8-strlen($num);
for($i=1;$i<=$zero;$i++)
{
	$num="0".$num;
}	

echo "$num";
echo "<br>";
$p='';
for($i=0;$i<strlen($num);$i++)
{

	$t=substr($num,$i,1);
    $p.="<img width='30' src='images/num/".$t.".gif'>";
}
echo "$p";

fclose($fp);


$fp=fopen($myfile,"w");
fputs($fp,++$num);
fclose($fp);
?>

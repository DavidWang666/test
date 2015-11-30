<?php
$matches=array();
$str="13856110987";
if(preg_match('/^1(?:3|4|5|7|8)\d{9}$/',$str,$matches))
{

	print_r($matches);
}
else
{

	die("flase");
}

?>

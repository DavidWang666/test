<?php
require_once "bjsession.php";


if (isset($_GET['id'])) {
	$id = $_GET['id'];
$link=mysql_connect('localhost','root','') or die ('jjj');
 $db=mysql_select_db('testdb',$link);

	$sql = "SELECT * FROM `txxx` WHERE `id` = $id";


	$result = mysql_query($sql);

	if($result){
        $array=array();
        while ($arr=mysql_fetch_array($result,MYSQL_ASSOC))
         {
            $array[]=$arr;       
        }
    }
      else
            {
                die(mysql_error());
           }
} 
else {
	die('参数ID丢失');
}
display1($array);
$x=$_GET['id'];
if($x)
{
	$res=mysql_query("select * from txxx where id=$x"); 
    $arr=mysql_fetch_array($res,MYSQL_ASSOC);
}


$b=$arr['id'];
$a=$arr['姓名'];
$c=$arr['性别'];
$d=$arr['生日'];
$e=$arr['电话'];
$f=$arr['QQ'];
$g=$arr['家庭地址'];
$h=$arr['留言'];

require "bjretx.php";
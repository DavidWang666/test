<?php
require "function.php";
$page=isset($_GET['page']) ? $_GET['page'] : 1;
$rows=1;
$offset=($page-1) * $rows;
$link=mysql_connect('localhost','root','') or die ('jjj');
$db=mysql_select_db('testdb',$link);
$sql="select count(*) as count from xx";
$result=mysql_query($sql);
$arr=mysql_fetch_array($result,MYSQL_ASSOC);
print_r($arr);
$total=$arr['count'];

$pages=ceil($total/$rows);


$sql="select * from xx  limit $offset,$rows";
$result=mysql_query($sql);
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

display1($array);
require "qq.html ";

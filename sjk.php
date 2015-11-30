<?php
header("content-type:text/html;charset=utf-8");
require "function.php";

$link=mysql_connect('localhost','root','') or die ('jjj');
    $db=mysql_select_db('testdb',$link);
    $result=mysql_query('select * from student ');
    if($result){
           $array=array();
        while ($arr=mysql_fetch_array($result, MYSQL_ASSOC))
         {
        	$array[]=$arr;
        	
        }
    }
      else
        	{
        		die(mysql_error());
           }

    display1($array);


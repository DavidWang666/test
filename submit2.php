<?php
	require "function.php";
    $name = $_POST["name"];

    $email = $_POST["email"]; 
     $qq = $_POST["qq"];
     $gender = $_POST["gender"];
  
    

	$link=mysql_connect('localhost','root','') or die ('jjj');
    $db=mysql_select_db('testdb',$link);
    $res=mysql_query("insert into xx values('$name','$email','$qq','$gender')");

    $result=mysql_query("select * from xx");
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
?>

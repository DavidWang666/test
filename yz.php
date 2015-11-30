<?php
session_start();
require "function.php";
$username=$_POST["name"];
$userpwd=$_POST["pwd"];
$useryzm=$_POST["yzm"];


if(isset($_POST["isrem"]))
{
	$isrem=$_POST["isrem"];
	
	if($isrem=="Remember")
	{
		setcookie("name",$username,time()+3600*24*30);
		setcookie("pwd",$userpwd,time()+3600*24*30);
    }
    
}
else
    {
         setcookie("name",$username,time()-1);
		     setcookie("pwd",$userpwd,time()-1);
    }
    if(!($useryzm==$_SESSION['VCODE']))
    {
      
      alert(' 验证码错误，请重新输入','dl.php');
      exit;
    }


    $link=mysql_connect('localhost','root','') or die ('jjj');
    $db=mysql_select_db('testdb',$link);
    $sql = "SELECT * FROM `user` WHERE `username` = '$username'";
    $result=mysql_query($sql);
    if($result)
    {
      $userInfo = mysql_fetch_array($result, MYSQL_ASSOC);
      
      if ($userInfo) 
      {
	    if ($userpwd == $userInfo['password'])
	    {   
	    	$_SESSION['username']=$username;
	    	$_SESSION['islogin']="success";
	    	header('Location:bjsubmit.php'); 
	        exit;
	    } 
	    
	  }

    }


	 alert('用户名或密码错误，请重新登录','dl.php');	
	   


?>
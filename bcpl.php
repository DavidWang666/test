<?php
session_start();
if(trim($_POST['content'])!=''){
   $comment=$_POST['content'];
   $id=$_POST['usersid'];
   //$id = $_SESSION['userid'];
  
   
	$link=mysql_connect('localhost','root','') or die ('jjj');
 	$db=mysql_select_db('testdb',$link);
	$res=mysql_query("insert into comment  values('$id','$comment')");
	if($res)
	{
		echo "<br>".$id."<br>".$comment;
	//	header("Location:http://localhost/php/bjpl.php/?id=$id");
	}
	else
	{
		die("数据插入错误");
	}
	
}
else {

	die("flase");
}


?>
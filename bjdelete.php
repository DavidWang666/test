<?php

  require_once "bjsession.php";


if (isset($_GET['id'])) {
	$id = $_GET['id'];
$link=mysql_connect('localhost','root','') or die ('jjj');
 $db=mysql_select_db('testdb',$link);
   $result=mysql_query("delete  from `txxx` where `id`=$id ");
   if($result){

   	header('Location:bjsubmit.php');
   }

}
else {

	echo "flase ";
}

?>

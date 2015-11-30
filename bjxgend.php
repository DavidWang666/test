<?php
	         
    $link=mysql_connect('localhost','root','') or die ('jjj');
    $db=mysql_select_db('testdb',$link);
    mysql_query( "UPDATE `txxx` 
			SET `姓名` = '$a', `id` = '$b', `生日` = '$d',`电话` = '$e',
			`QQ`=`$f`,`家庭地址`=`$g`,`留言`=`$h`
			WHERE `id` = $id";)";
    require "function.php";



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

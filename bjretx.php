<?php
  require_once "bjsession.php";
?>
<html>
<head>
	<meta charset=utf8>
	<title>班级通讯录</title>
<style type="text/css">
.main{border:1px solid red;width: 600px;height: 600px;margin:0px auto;text-align: center;}
.xm{padding-top: 40px;}
</style>	
<script src="Inc/qy.js" type="text/javascript"></script>
<script type="text/javascript">
	function check()
	{
		var f=document.f1;
		uname=f.name.value;
		uphone=f.phone.value;
		ugender=f.gender.value;
		if(!uname)
		{
			alert("您的姓名尚未填写哦");
			return false;
		}
		if(!uphone)
		{
			alert("请留下您的电话");
			return false;
		}
		if(!ugender)
		{
			alert("您是男是女？");
			return false;
		}
	}
</script>
<script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.all.min.js"></script>

</head>
<body>

<div class="main">
<form  name="f1" method ="post" action ="" onsubmit="return check();">
<div class="xm">姓名:    <input type="text" name="name" value=<?php echo "$a"?>></div>
<?php
	if($c=='man')
	{
		echo "性别:<input type = 'radio' name='gender' value = '男' checked>男";
		echo "<input type = 'radio' name='gender' value = '女'>女";
	}
	else
	{
	    echo "性别:<input type = 'radio' name='gender' value = '男' >男";
		echo "<input type = 'radio' name='gender' value = '女' checked>女";
	}

?>


<br><br>
生日: <input type="text" name="birthday" value=<?php echo "$d"?> >
<br><br>
电话: <input type="text" name="phone" value=<?php echo "$e"?> >
<br><br>
QQ: <input type="text" name="qq" value=<?php echo "$f"?>>
<br><br>
家庭地址: <input type="text" name="address" value=<?php echo "$g"?> >
<br><br>
留言:<script type="text/plain" id="container" name="words" ><?php echo "$h"?></script>
<br><br><br><br><br>
<input type = "submit" value="确认修改">


</form>	
<script type="text/javascript">
    var ue = UE.getEditor('container',{

   initialFrameWidth: 500,
   initialFrameHeight: 50
      });
  </script>
</div>
<?php
if($_POST!=null)
{
	$a=$_POST['name'];
	$c=$_POST['gender'];
	$d=$_POST['birthday'];
	$e=$_POST['phone'];
	$f=$_POST['qq'];
	$g=$_POST['address'];
	$h=$_POST['words'];
    $link=mysql_connect('localhost','root','') or die ('jjj');
    $db=mysql_select_db('testdb',$link);
     mysql_query( "UPDATE `txxx` 
			SET `姓名` = '$a',`性别`='$c', `生日` = '$d',`电话` = '$e',
			`QQ`='$f',`家庭地址`='$g',`留言`='$h' WHERE `id`=$x"); 

   echo '更新完成！';
   
 
    header('Location:bjsubmit.php');
}

?>
</body>
	

</html>

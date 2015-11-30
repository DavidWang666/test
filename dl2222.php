
<html>
<head>
	<meta charset=utf8>
	<style type="text/css">
	.form{border:2px solid green;width:600px;height: 400px;margin:0px auto;margin-top:100px;background:url(images/bj/bjbj.jpg);}
    .xm{margin-left:200px;margin-top: 150px; }
    .mm{margin-left:190px;margin-top:30px;  }
    .jz{margin-left:80px;padding-top:30px;  }
    .yzm{margin-left:185px;margin-top:10px;}
    
   </style>
	<script src="Inc/qy.js" type="text/javascript"></script>
	<script type="text/javascript">
	function check()
		{
			var f=document.f2;
			uname=f.name.value;
			upwd=f.pwd.value;
			
			if(!uname)
			{
				alert("您的用户名尚未填写哦");
				return false;
			}
			if(!upwd)
			{
				alert("请输入密码");
				return false;
			}
			
		}
	</script>	
</head>

<body background="images/bj/bj.jpg">
	<?php
		if(isset($_COOKIE['name']))
		{
			$uname=$_COOKIE['name'];
			$upwd=$_COOKIE['pwd'];			
		}
		else
		{
			$uname="";
			$upwd="";
		}

	?>

    <div class="form">
    <div>班级通讯录管理系统</div>	
    <div>管理员登录界面</div>
	<form name="f2" method="post" action="yz.php" onsubmit="return check()">
	<div class="xm">姓名:<input type="text" name="name" value='<?php echo $uname; ?>' /></div>
	
	<div class="mm">密码：<input type="password" name="pwd" value='<?php echo $upwd; ?>' /></div>	
    <div class="yzm"> 验证码：<input type="text" name="yzm" size="5">&nbsp  &nbsp
    	<img src="yzm.php" onclick="javascript:this.src='yzm.php?time='+Math.random();" alt="看不清楚换一张" title="看不清楚换一张" style="cursor:pointer">
	<div class="jz"><input name="isrem" type="checkbox" value="Remember" />记住密码
	<input type = "submit" value="提交"></div>
	</form>	
   </div>
</body>	
</html>


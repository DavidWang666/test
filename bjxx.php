<?php
  require_once "bjsession.php";
?>
<html>
<head>
	<meta charset=utf8>
	<title>班级通讯录</title>
	<link href="/php/Inc/bootstrap.min.css" rel="stylesheet"> 
<style type="text/css">
.main{border:1px solid white;width: 600px;height: 600px;margin:0px auto;text-align: center;}
.xm{padding-top: 40px;}
.fwb{margin-left: 30px;}
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
<div class="panel panel-danger">
     
	<div class="panel-heading">
		<h1 >请填写您的信息 </h1>
	</div>
	<div class="panel-body">
<form  name="f1" method ="post" action ="bjsubmit.php" enctype="multipart/form-data" class="form-horizontal col-md-6 col-md-offset-3"onsubmit="return check();">
<div class="form-group">
    
	<label for="username" class="col-sm-2">姓名</label>
	<div class="col-sm-9">
	   <input type="text" name="name" class="form-control" placeholder="请输入姓名">
	</div>
	</div>
<div class="form-group">
<label for="id" class="col-sm-2">学号</label>
	<div class="col-sm-9">  
	  <input type="text" name="id" class="form-control" placeholder="请输入学号">
</div>
	</div>
<div class="form-group">
<label for="id" class="col-sm-2">性别</label>
	<div class="col-sm-9">
		<div class="radio-inline">
						<label>
							<input type="radio" name="gender" value="男" />男
						</label>
					</div>
		
<div class="radio-inline">
						<label>
							<input type="radio" name="gender" value="女" />女
						</label>
					</div>
</div>
	</div>
<div class="form-group">
<label for="id" class="col-sm-2">生日</label>
	<div class="col-sm-9">  
	  <input type="text" name="birthday" class="form-control" >
</div>
	</div>
<div class="form-group">
<label for="id" class="col-sm-2">电话</label>
	<div class="col-sm-9">  
	  <input type="text" name="phone" class="form-control" placeholder="请留下可以联系您的电话">
</div>
	</div>
<div class="form-group">
<label for="id" class="col-sm-2">QQ</label>
	<div class="col-sm-9">  
	  <input type="text" name="qq" class="form-control" >
</div>
	</div>
<div class="form-group">
<label for="id" class="col-sm-2">家庭地址</label>
	<div class="col-sm-9">  
	  <input type="text" name="address" class="form-control" >
</div>
	</div>
<label for="id" class="col-sm-2">留言</label>
<span class="fwb"><script type="text/plain" id="container" name="words"> </script></span>

<div class="form-group">
<label for="id" class="col-sm-2">头像上传</label>
	<div class="col-sm-9"> 
<input type="file" name="wenjian" class="form-control">
</div>
	</div>
<input type = "submit" value="提交" class="btn btn-primary btn-log" >
<input type="reset" value=" 重新填写" class="btn btn-danger btn-sm">

</form>	
 <script type="text/javascript">
    var ue = UE.getEditor('container',{

   initialFrameWidth: 580,
   initialFrameHeight: 60
      });
  </script>




</div>
</div>
</body>
	

</html>
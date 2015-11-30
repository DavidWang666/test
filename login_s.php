<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title> 班级通讯录管理系统</title>
<link href="style/styles.css" rel="stylesheet" type="text/css" />
<script src="Inc/qy.js" type="text/javascript"></script>
<script type="text/javascript">
	function check()
	{
		var f=document.f1;
		uname=f.username.value;
		upwd=f.userpwd.value;
		if(!uname)
		{
			alert("用户名不能为空!");
			return false;
		}
		if(!upwd)
		{
			alert("密码不能为空!");
			return false;
		}
	}
</script>
</head>
<body>
<table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="207" class="header-l">&nbsp;</td>
    <td width="573" valign="top" class="header"><H1><br />
        用户登录</H1></td>
    <td width="190" class="header-r">&nbsp;</td>
  </tr>
</table>
<br />
<table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="5" class="content-box-tbar-l">&nbsp;</td>
    <td width="960" height="28" class="content-box-tbar">&nbsp;</td>
    <td width="5" class="content-box-tbar-r">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" class="mainWrapper"><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
        <tr>
          <td width="25%" height="400" align="center" valign="top" bgcolor="#F9F9F9"><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td align="left" bgcolor="#BBBBBB"><span class="sidetitle">公 告：</span></td>
              </tr>
              <tr>
                <td height="30" align="left">● 今天不努力学习，明天努力找工作。<br />
                  ● 成功一定有方法，失败一定有原因。<br />
                  ● 成功的人找方法，失败的人找借口。</td>
              </tr>
              <tr>
                <td align="left" bgcolor="#BBBBBB" class="sidetitle">坚 信：</td>
              </tr>
              <tr>
                <td align="left">● 人生没有失败，只有暂时停止成功。<br />
                  ● 不是不可能，只是还没有找到方法。 <br />
                  ● 没有得到想要的，我将得到更好的。</td>
              </tr>
              <tr>
                <td align="left" bgcolor="#BBBBBB" class="sidetitle">理 想：</td>
              </tr>
              <tr>
                <td align="left">● 人的活动如果没有理想的鼓舞，就会变得空虚而渺小。<br />
                  ● 走得最慢的人，只要他不丧失理想，就比漫无目的混日子的人走得要快。<br />
                  ● 生活的理想，就是为了理想的生活。</td>
              </tr>
              <tr>
                <td align="left" bgcolor="#BBBBBB" class="sidetitle">倡 议：</td>
              </tr>
              <tr>
                <td height="30" align="left">● 不浮躁，多研究，多帮别人解决问题也是学习进步最好的方法，无论是简单还是复杂；<br />
                  ● 不懒惰，有问题多动手，不能只为解决问题而解决问题，要明白究竟；<br />
                  ● 不放弃，解决不了问题可以休整一下，但不能坐以待毙。</td>
              </tr>
              <tr>
                <td align="left">&nbsp;</td>
              </tr>
              <tr>
                <td align="left">&nbsp;</td>
              </tr>
            </table></td>
          <td width="76%" align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td align="left" class="textbox-calendar-day" style="font-size:12px;padding:10px;font-weight:bold;"> 
                TIP：<span class="title">
                请在下面输入您的账号与密码
                </span>
                </td>
              </tr>
              <tr>
                <td height="400" valign="top" align="center">
                	<form name="f1" method="post" action="logincheck_s.php" onsubmit="return check();">
                		<table width="550" id="myt">
                			<tr>
                				<th colspan="2" align="center">班级通讯录管理系统后台登录</th>
                			</tr>
                			<tr>
                				<td>用户名: </td><td align="left"><input type="text" name="username" class="text"></td>
                			</tr>
                			<tr>
                				<td>密  码: </td><td align="left"><input type="password" name="userpwd" class="text"></td>
                			</tr>
                			<tr>
                				<td colspan="2" align="center"><input type="submit" value="登录>>"></td>
                			</tr>
                		</table>
                	</form>
                </td>
              </tr>
              <tr>
                <td><HR></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<br />
<table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="5" class="footer-l">&nbsp;</td>
    <td width="960" class="footer"><SPAN STYLE="FONT-SIZE:12PX;">QinYong&nbsp;&nbsp;版权所有&nbsp;&nbsp;&copy;2004-2020&nbsp;&nbsp;己所不欲&nbsp;&nbsp;勿施于人</SPAN></td>
    <td width="5" class="footer-r">&nbsp;</td>
  </tr>
</table>
</body>
</html>

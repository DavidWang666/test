<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�༶ͨѶ¼����ϵͳ</title>
<link href="style/styles.css" rel="stylesheet" type="text/css" />
<script src="Inc/qy.js" type="text/javascript"></script>
<script type="text/javascript">
	
</script>
</head>
<body>
<?php
	$username=$_POST["username"];
	$userpwd=$_POST["userpwd"];
?>
	
<table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="207" class="header-l">&nbsp;</td>
    <td width="573" valign="top" class="header"><H1><br />
        �༶ͨѶ¼</H1></td>
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
                <td align="left" bgcolor="#BBBBBB"><span class="sidetitle">�� �棺</span></td>
              </tr>
              <tr>
                <td height="30" align="left">�� ���첻Ŭ��ѧϰ������Ŭ���ҹ�����<br />
                  �� �ɹ�һ���з�����ʧ��һ����ԭ��<br />
                  �� �ɹ������ҷ�����ʧ�ܵ����ҽ�ڡ�</td>
              </tr>
              <tr>
                <td align="left" bgcolor="#BBBBBB" class="sidetitle">�� �ţ�</td>
              </tr>
              <tr>
                <td align="left">�� ����û��ʧ�ܣ�ֻ����ʱֹͣ�ɹ���<br />
                  �� ���ǲ����ܣ�ֻ�ǻ�û���ҵ������� <br />
                  �� û�еõ���Ҫ�ģ��ҽ��õ����õġ�</td>
              </tr>
              <tr>
                <td align="left" bgcolor="#BBBBBB" class="sidetitle">�� �룺</td>
              </tr>
              <tr>
                <td align="left">�� �˵Ļ���û������Ĺ��裬�ͻ��ÿ������С��<br />
                  �� �ߵ��������ˣ�ֻҪ����ɥʧ���룬�ͱ�����Ŀ�Ļ����ӵ����ߵ�Ҫ�졣<br />
                  �� ��������룬����Ϊ����������</td>
              </tr>
              <tr>
                <td align="left" bgcolor="#BBBBBB" class="sidetitle">�� �飺</td>
              </tr>
              <tr>
                <td height="30" align="left">�� �����꣬���о��������˽������Ҳ��ѧϰ������õķ����������Ǽ򵥻��Ǹ��ӣ�<br />
                  �� �����裬������ද�֣�����ֻΪ��������������⣬Ҫ���׾�����<br />
                  �� ��������������������������һ�£����������Դ��С�</td>
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
                ����������<span class="title">
                qyPHP-PHP
                </span>
                </td>
              </tr>
              <tr>
                <td height="400" valign="top" align="center">
                	
                	<?php
                		$uname="admin";
                		$upwd="123456";
                		
                		
                		//$uname=strtolower($uname);
                		//$username=strtolower(trim($username));
                		
                		
                		$result=strcasecmp($username,$uname);
                		
                		if($result==0&&$userpwd==$upwd)
                		
                	//	if($username==$uname&&$userpwd==$upwd)
                		{
                	?>
                	
                		<table width="550" id="myt">
                			<tr>
                				<th colspan="2" align="center">�û���¼��Ϣ����: </th>
                			</tr>
                			<tr>
                				<td width="30%">�û���: </td><td align="left"><?php echo strtolower($username);?></td>
                			</tr>
                			<tr>
                				<td>��  ��: </td><td align="left"><?php echo $userpwd;?></td>
                			</tr>
	                		<tr>
	                				<td colspan="2" align="center"><a href="login_s.php">����</a></td>
	                		</tr>
                		</table>
                		
              		<?php
              			}
              			else
              			{
              		?>
                		
                		<table width="550" id="myt">
                			<tr>
                				<th colspan="2" align="center">�Բ���,�����û������������,��[<a href="login_s.php">����</a>]���µ�¼</th>
                			</tr>
                		</table>
                		
              		<?php
              			}
              		?>
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
    <td width="960" class="footer"><SPAN STYLE="FONT-SIZE:12PX;">����&nbsp;&nbsp;��Ȩ����&nbsp;&nbsp;&copy;2004-2020&nbsp;&nbsp;��������&nbsp;&nbsp;��ʩ����</SPAN></td>
    <td width="5" class="footer-r">&nbsp;</td>
  </tr>
</table>
</body>
</html>

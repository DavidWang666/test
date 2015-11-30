<% @Language="VBScript" CodePage=936%>
<!--#include File="conn.asp"-->
<%
	if Session("UID")="" then
		response.write "请先登录"
		response.end
	end if
	if request("B")="" or request("e")="" or request("s")="" or request("p")="" then
		response.write "数据不能为空！"
		response.end
	end if
	conn.Execute "Insert Into Hangxian(BeginPlace,EndPlace,SYZuoWei,Price) Values('"&request("b")&"','"&request("e")&"',"&request("s")&","&request("P")&")"
%>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>添加成功！</title>
</head>

<body>
添加成功，<a href="AdminIndex.asp">请返回
</a>
</body>

</html>

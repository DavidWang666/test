<% @Language="VBScript" CodePage=936%>
<!--#include File="conn.asp"-->
<%
	if Session("UID")="" then
		response.write "���ȵ�¼"
		response.end
	end if
	if request("B")="" or request("e")="" or request("s")="" or request("p")="" then
		response.write "���ݲ���Ϊ�գ�"
		response.end
	end if
	conn.Execute "Insert Into Hangxian(BeginPlace,EndPlace,SYZuoWei,Price) Values('"&request("b")&"','"&request("e")&"',"&request("s")&","&request("P")&")"
%>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��ӳɹ���</title>
</head>

<body>
��ӳɹ���<a href="AdminIndex.asp">�뷵��
</a>
</body>

</html>

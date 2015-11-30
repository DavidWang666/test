<html>
<head></head>
<body>
  <div style="background-image:url(http://localhost/php/images/111.gif);">
    
<?php
  require "function.php";
  session_start();
  if(!(isset($_SESSION['islogin'])&&$_SESSION['islogin']=="success"))
  {
      alert("你敢跳墙我好怕怕","back");
      exit;     
  }
    echo "欢迎您".$_SESSION['username'];
    echo "<a href='http://localhost/php/bjxx.php'>添加</a>";
    echo "<a href='http://localhost/php/bjexit.php'>退出</a>";
	         
    $link=mysql_connect('localhost','root','') or die ('jjj');
    $db=mysql_select_db('testdb',$link);
    if($_POST != NUll)
    {
         $id=$_POST["id"];
         $name = $_POST["name"];
         $gender = $_POST["gender"];
         $birthday=$_POST["birthday"];
         $phone = $_POST["phone"];
         $qq = $_POST["qq"];
         $address = $_POST["address"];
         $words = $_POST["words"]; 

        $imageName = "";
        $imagePath = "";

        if($_FILES['wenjian']['error'] != 4)
        {        
            $file = $_FILES['wenjian'];
            
        
            if ($file['error'] == 0) {
            $size = $file['size'];
            $type = $file['type'];}

            if ($size > 20 * 1024 ) {
                die("尺寸过大");
            }   
            if ($type != 'image/jpeg' && $type != 'image/png'&& $type != 'image/gif') {
                die("请上传图片");
            }         
            $tmpInfo = pathinfo($file['tmp_name']);
            $imgInfo = pathinfo($file['name']);

            $fileName = $tmpInfo['filename'] . "." . $imgInfo['extension'];
            $imagePath = "/uploads/" . $fileName;
            $imageName = $file['name']; 
            move_uploaded_file($file['tmp_name'], "E:\wamp\wamp\www\\$imagePath");       
        }
            $res=mysql_query("insert into txxx values('$id','$name','$gender','$birthday',
            '$phone','$qq','$address',' $words','$imagePath', '$imageName')"); //数据插入
         }
         
 
    
  
/*分页*/

$page=isset($_GET['page']) ? $_GET['page'] : 1;

$rows=5;
$offset=($page-1) * $rows;
$link=mysql_connect('localhost','root','') or die ('jjj');
$db=mysql_select_db('testdb',$link);
$sql="select count(*) as count from txxx";
$result=mysql_query($sql);
$arr=mysql_fetch_array($result,MYSQL_ASSOC);
//print_r($arr);
$total=$arr['count'];

$pages=ceil($total/$rows);
if($page>$pages){
  alert("您的输入页数不存在，请正确输入","back");
  exit;
}

$sql="select * from txxx  limit $offset,$rows";
$result=mysql_query($sql);
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

display1($array); 


 
  /*  $result=mysql_query("select * from txxx ");// 调用数据库内容
    if($result){
        $array=array();
        while ($arr=mysql_fetch_array($result,MYSQL_ASSOC))
         {
        	$array[]=$arr;kkk
        } echo "添加成功";
    }

      else
        	{
        		die(mysql_error());
           }
	display1($array);*/
    require "bj.html "; 
?>
<div>
</body>

</html>
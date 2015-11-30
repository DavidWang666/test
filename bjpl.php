<?php
require_once "bjsession.php";


if (isset($_GET['id'])) {
	$id = $_GET['id'];
  //$_SESSION['userid']=$id;
$link=mysql_connect('localhost','root','') or die ('jjj');
$db=mysql_select_db('testdb',$link);

	$sql = "SELECT 留言 FROM `txxx` WHERE `id` = $id";


	$result = mysql_query($sql);

	if($result){
        while ($arr=mysql_fetch_array($result,MYSQL_ASSOC))
         {
            foreach ($arr as $key=>$value){
                echo " $value ";}  
        }
    }
      else
            {
                die("flase");
           }
} 
else {
	die('参数ID丢失');
}


$link=mysql_connect('localhost','root','') or die ('jjj');
$db=mysql_select_db('testdb',$link);
$sql2 = "SELECT * FROM `comment` where `userid`=$id; ";

$result2 = mysql_query($sql2);
echo "<div id='comment_list'>";
if($result2){
        while ($arr=mysql_fetch_array($result2,MYSQL_ASSOC))
         {
          foreach ($arr as $key=>$value){
                echo " $value ";
                echo "<br>";
            }      
        }
    }
      else
            {
                die(mysql_error());
           }
echo "</div>";     


 ?>        




<html>
  <head>
    <meta charset=utf8>
    <script src="Inc/jqueryw.js" type="text/javascript"></script>
  </head>
<body>

  <input type="hidden"  id="usersid" name="usersid" value="<?php echo $id ?>" />

   
  评论<textarea id="content" name="bjpl"></textarea>
  <br>

	<button id="btnsubmit">发表评论</button>
  <script type="text/javascript">
      $(function(){
        $("#btnsubmit").bind("click", function() {
          var content = $("#content").val();
          var usersid = $("#usersid").val();
           $.ajax({
              type: "POST",
              url: "http://localhost/php/bcpl.php",
              data: {
                content:content,
                usersid:usersid
              },
              dataType: "html",
              success: function(html){
              //  alert(html);
              $('#comment_list').append(html);
              $("#content").val('');
              }
           });
        });
      });
    </script>
  </body>	
</html> 

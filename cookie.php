AJAX    <script type="text/javascript">{
$(function(){
  $("#btnsubmit").bind("click",function(){
    var comment=$("#comment").val();
     $.ajax({
         type:"POST",
         url:"http://localhost/php/bcpl.php/?<?php echo 'id='.$id",
         data:{
              comment:comment
               },
               datatype:"php",
               success:function(php){
                $()
               }
         
     })
  }




})


}<?php 
$value= 'something from somewhere'; 
setcookie("TestCookie", $value); 
setcookie("TestCookie", $value, time()+2); 
print $_COOKIE['TestCookie']; 
 
<?php  session_start(); if(isset($_SESSION['error_name'])) { ?>
<?php
echo $_SESSION['error_name'];
unset ($_SESSION['error_name']);

}?>


   /*else {
           session_start();
           $_SESSION['error_name']="资料不完整";
           header('Location:bjxx.php');



         }*/



         </script>
  <script type="text/javascript">
      $(function(){
        $("#btnsubmit").bind("click", function() {
          var content = $("#content").val();
          var blog_id = $("#blog_id").val();
           $.ajax({
              type: "POST",
              url: "http://localhost/save_comment.php",
              data: {
                content: content,
                blog_id: blog_id
              },
              dataType: "html",
              success: function(html){
              $('#comment_list').append(html);
              $("#content").val('');
              }
           });
        });
      });
    </script>s
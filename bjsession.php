<?php
  require "function.php";
  session_start();
  if(!(isset($_SESSION['islogin'])&&$_SESSION['islogin']=="success"))
  {
	  alert("小样你翻的过去吗","back");
	  exit;  	
  }

?>
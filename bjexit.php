<?php
 session_start();
 unset($_SESSION['islogin']);
 unset($_SESSION['username']);
 
 header('Location:dl.php');
 exit;

?>
<?php
function __autoload ($classname){
	
  

   require_once "$classname"."."."class.php";
    }






$obj=new Phone('16','ios','14',true);
echo $obj->printx();

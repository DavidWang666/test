<?php
 
  class child{

              public $name;
              public static $nums=0;
              public function __construct($name){
    
                  $this->name=$name;
                          }
              public function join(){
          
              self::$nums+=1;
              echo $this->name."join this ganme";
               }

             }


$child1=new child("11");
$child1->join();
$child2=new child("22");
$child2->join();
$child3=new child("33");
$child3->join();
echo "<br>have.".child::$nums;
?>


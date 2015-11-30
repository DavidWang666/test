<?php
class Phone
{
 public $memorySize;
 public $os;
 private $screenSize;
 private $gpsSupport;
 public function __construct($memorySize,$os,$screenSize,$gpsSupport)
 {
   $this->memorySize=$memorySize;
   $this->os=$os;
   $this->screenSize=$screenSize;
   $this->gpsSupport=$gpsSupport;

 }
 public function printx()
 {
 	echo $this->memorySize." ";
 	echo $this->os." ";
 	echo $this->screenSize." ";
 	echo $this->gpsSupport;
 }

}
$ip6 = new Phone('16','ios','14',true); 
$nokia = new Phone('12','symbon','13',true); 
echo $ip6->printx();
echo "<br>";
echo $nokia->printx();
echo "<br>";
?>
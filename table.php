<table border="1">
<?php 

header("Content-type:text/html;charset=utf8");

/*$zmlist=array(

     array("first"=>"a","second"=>"b","third"=>"c"),

     array("first"=>"d","second"=>"e","third"=>"f"),

     array("first"=>"g","second"=>"h","third"=>"i"),

     );    

   foreach($zmlist as $k=>$x)

       {
           echo "<td>".$x['first']."</td>";

          echo "<td>".$x['second']."</td>";

          echo "<td>".$x['third']."</td>";

          echo "</tr>";

       }*/
$zmtab = array(array("a", "b", "c"), array("d", "e", "f"), array("g", "h", "i"));
if (in_array(array("a","b","c"), $zmtab)) {
    echo "<td>"."b"."</td>";
    echo "<td>"."c"."</td>";
}else{ 
    echo "想法错误！";
}





?>

</table>

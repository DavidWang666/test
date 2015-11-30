<table border="2" width="200px" height="300px" align="center" >
<?php 




 $zmlist=array(array("first"=>"a","second"=>"b","third"=>"c"),

     array("first"=>"d","second"=>"e","third"=>"f"),

     array("first"=>"g","second"=>"h","third"=>"i"),

     );    

   foreach($zmlist as $k=>$x)

       {
           echo "<td>".$x['first']."</td>";

          echo "<td>".$x['second']."</td>";

          echo "<td>".$x['third']."</td>";

          echo "</tr>";

 
  }




?>
</table>


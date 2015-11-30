<?php
header("content-type:text/html;charset=utf-8");


$link=mysql_connect('localhost','root','') or die ('jjj');
    $db=mysql_select_db('testdb',$link);
    $result=mysql_query('select * from student ');
    if($result){
           
        while ($arr=mysql_fetch_array($result, MYSQL_NUM))
         {   
            echo "<table border=1>" ;
            echo "<tr>";
            for($i=0;$i<count($arr);$i++)
                {
                   
                    echo"<td> $arr[$i] </td>";
                    
              }
              echo "</tr>";
              echo "</table>";
          }

  }
   

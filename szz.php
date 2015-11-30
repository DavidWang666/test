<?php
    header("content-type:text/html;charset=utf-8");
    $s=array(array(1,0),array(4,5,6),array(7,8,9,10),array(1,2,3,8));
   
/* */
    function display1($xx)               //两层for循环
    {
        for($i=0;$i<count($xx);$i++)
        {
            for($j=0;$j<count($xx[$i]);$j++)
            {
                echo $xx[$i][$j]." ";
            }
            echo "<br>";
        }   
    } 
    display1($s);

    echo "<br><hr><br>";
 
    function display2($xx)              //两层foreach
    {
        foreach($xx as $c)
        {
            foreach($c as $k)
            {
                echo $k." ";
            }
            echo "<br>";
        }   
    } 
    display2($s);


    echo "<br><hr><br>";
 
    function display3($xx)              //递归
    {
        foreach($xx as $c)
        {
            if(strcmp(gettype($c),"array")==0)
                display3($c);
            else 
                echo $c." ";
        }
        echo "<br>"; 
    } 
    display3($s);
 

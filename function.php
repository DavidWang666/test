 <link href="/php/Inc/bootstrap.min.css" rel="stylesheet">
 <script type="text/javascript" src="/php/Inc/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="/php/Inc/bootstrap.min.js"></script>
 <?php
header("content-type:text/html;charset=utf-8");

   
    function display1($arr)               
    {   echo "<div>";
        echo "<table border=1 align='center'  class='table table-hover'>";
        echo "<tr>";
        foreach ($arr[0] as $key=>$value)
        {
            echo "<th> $key </th>";
        }

        echo "</tr>";
        
        foreach ($arr as $item) {
            echo "<tr>";
            foreach ($item as $key=>$value){
                echo "<td> $value </td>";
            }
            $id = $item['id'];
            $imagePath = $item['image_path'];
        echo "<td><a href='http://localhost/php/bjxg.php?id=$id'>修改</a></td>";
        echo "<td><a href='http://localhost/php/bjdelete.php?id=$id'>删除</a></td>";
         echo "<td><a href='http://localhost/php/bjpl.php?id=$id'>评论</a></td>";
        echo "<td> <img src=\"$imagePath\" class='img-circle'/></td>";
        
        echo "</tr>";
        }  
        echo "</table>" ;
        echo "</div>";
    } 
     


    function alert($msg='sorry error',$url="back")
    {
         if ($url)
         {
           if($url=="back")
            echo "<script>alert('".$msg."');history.back();</script>";
             else
            echo "<script>alert('".$msg."');document.location.href='".$url."';</script>";
        }
         else
         echo "<script >alert('".msg."');</script>" ;  



    }




    function arr($arr){



    }



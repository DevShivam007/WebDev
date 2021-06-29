<?php
if(isset($_POST['patternId']) && !empty($_POST['patternId']))
{
    if(isset($_POST['symbolId']) && !empty($_POST['symbolId']))
    {
        $i=$_POST['patternId'];
        $s=$_POST['symbolId']; 
           
        for($k=1;$k<=$i;$k++) 
        {
            for($j=1;$j<$k;$j++)
            {
                echo "$s";
            }
            echo "<br>";
            if($j==$i)
            {
                $con=$j;
                for($m=0;$m<=$con;$m++)
               {
                for($n=$con-$m;$n>=1;$n--)
                   {
                    echo "$s";
                    }
                echo "<br>";
                } 
            }
        }
    }
    else
    {
        $i=$_POST['patternId'];
        $j=1;
        for($k=1;$k<=$i;$k++) 
        {     
            for($j=1;$j<=$k;$j++)
            {
                echo "$j";
            }
            echo "<br>";
        }
    }
}
 else
    {
    echo "Go Back and Fill form";
    }
    ?>
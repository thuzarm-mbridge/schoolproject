<?php   
    for ($i=1; $i<=5; $i++)            
    {    
        for ($k=5; $k>$i; $k--)
            {
                echo " ";
            }   
                for($j=1;$j<=$i;$j++)     
                {
                    if (($i==2 && $j==2) || ($i==3 && $j==2) || ($i==4 && ($j==2 || $j==4))

                     || ($i==5 && ($j==2 || $j==4))) {
                        echo "★";     
                    } else {
                            echo "☆";
                        }
                }
                echo "\n";
    }
    

?>


<?php	
for ($i = 1; $i <= 5; $i++) 	       
{ 	 
	for ($k = 5; $k > $i; $k--)	 
		{
			echo " ";
		}	
		for ($j = 1;$j <= $i;$j++)	  
			{
				if ($i%2 == 0) {
					echo "★";	  
				} else {
						echo "☆";
					}
			}

		echo "\n";

}
   	


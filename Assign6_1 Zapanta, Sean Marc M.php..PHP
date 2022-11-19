	<?php
	$checkage = 100;

	if ($checkage < "10" ) {
	  echo "You are too young!";
	} 

	elseif ($checkage > "10" && $checkage <= "18") {
	  echo "Have a good day!";
	} 

	elseif ($checkage > "18" && $checkage <= "30") {
	  echo "Young Lad!";
	} 

	elseif ($checkage > "30" && $checkage <= "60") {
	  echo "Adulthood!";
	} 

	else  {
	  echo "You're old";
	}
	?>
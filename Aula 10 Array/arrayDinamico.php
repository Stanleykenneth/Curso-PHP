<?php
	
	$arr = [];

	for ($i= 0; $i <= 100; $i++){
		$arr[] = $i;		
	}

	for ($i = 0; $i <= 100; $i++){
		echo "2 * {$i} = " . (2 * $arr[$i]) . "<br/>";
	}
?>


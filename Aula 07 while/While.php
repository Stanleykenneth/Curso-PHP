<?php

	/*$cont = 0;

	while ($cont < 10) {
		echo "Cont: {$cont} <br>";
		$cont++;		
	}

	echo "<br>";

	$cont = 10;

	while ($cont > 0) {
		echo "Cont: {$cont} <br>";
		$cont--;
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>While</title>
</head>
<body>
		<ul>
			<?php
				$cont = 0;
				while ($cont < 10) {					
					?>					
					<li><?=$cont; ?></li>
					<?php
					$cont++;
				}	
			?>
		</ul>
</body>
</html>
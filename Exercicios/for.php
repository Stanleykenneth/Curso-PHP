<?php

	/*for ($i = 0; $i <= 10; $i++){

		echo "2 * " . $i . " = " . (2 * $i);
		echo "<br>";
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>for</title>
</head>
<body>
	<ul>
		<?php
			for ($i = 0; $i <= 10; $i++){
		?>
			<li>2 * <?= $i; ?> = <?= (2 * $i)?><li>
		<?php
		}		
		?>		
	<ul>

</body>
</html>

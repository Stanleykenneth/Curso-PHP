
<?php
	
	/*$i = 0;

	do{
		echo "índice  {$i}";
		$i++;
		echo "<br>";
	} while ($i >= 12); */
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dowhile Exercício 02</title>
</head>
<body>
	 <ul>
	 	<?php
	 	$i = 0;
	 	do{
	 		?>
	 		<li> Índice = <?= $i; ?></li>
	 		<?php 
	 		$i++;
	 		if (($i == 2) || ($i == 6) || ($i == 10)) {
	 		?>
	 		<li style="color: dodgerblue;"><?= "Índice = {$i}"; ?></li>	
	 		<?php
	 		}
	 		?>
	 		<?php
	 	} while ($i <= 12);
	 	?>
   </ul>
</body>
</html>
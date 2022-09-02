<?php
	
	/*$indice = 12;

	while ($indice <= 15) {
		
		if(($indice == 12) && ($indice <= 15 )) {
			echo "Número Válido!";
		} else {
			echo "Número Inválido!";
		}
		echo $indice .  "<br>";
		$indice++;
	}*/
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>While02</title>
	</head>
		<body>
			<ul>
				<?php
					$indice = 12;
					while ($indice <= 15) {
						if(($indice == 12) && ($indice <= 15 )) {
							echo "Número Válido!";
						} else {
							echo "Número Inválido!";						
						?>
						<p><?= $indice; ?> </p>
						<?php
					}

					$indice++;
					}
						?>

			</ul>	
		   
		</body>
</html>
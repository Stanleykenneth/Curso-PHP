<?php 

	//Resolvendo exercício só com If e Else.
	/*$salario = 1400.00;
	/*$reajuste1 = 300.00;
	$reajuste2 = 250.00;
	$reajuste3 = 200.00;*/	

	/*if ($salario <= 1200.00) {
		echo "O salário do funcionário deve ser reajustado em R$" . $reajuste1 . ".";
	} elseif (($salario >= 1200.00) && ($salario <= 1600.00)) {
		echo "O salário do funcionário deve ser reajustado em R$" . $reajuste2 . ".";
	} else ($salario) {
		echo "O salário do funcionário deve ser reajustado em R$" . $reajuste3 . ".";
	}*/

	// Resolvendo exercício com Switch Case.

	$salario = 3 ;
	$reajuste = "";

    

	switch ($salario) { 

		case 1:

			$reajuste =  300.00;				
			break;
		
		case 2:

			$reajuste = 250.00;
			break;

		case 3:

			$reajuste = 200.00;
			break;

		default:
			$reajuste = " Salário não encontrado!";
			break;
	}
?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Switch</title>
	</head>
	<body>
		<p>O salário do funcionário deve ser reajustado em R$ <?=$reajuste;?>.</p>
	</body>
	</html>

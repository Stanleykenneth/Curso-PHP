<?php 

	$nome = "José";
	$idade = 17;
	$acesso = true;	

	 
	if (($idade >= 18) || ($acesso == true)) {
		echo "Olá " . $nome . ", você pode participar do projeto.";
	} else {
		echo $nome . ", você não pode participar do projeto. <br>"; 
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Condição exercício 01</title>
</head>
<body>
	 <?php 
	 	if($acesso == true) {
	    ?>
	 	<h1 style="color: green">Valido!</h1>	
	    <?php	
	 	} else {
	 	?>		
	   <h1 style="color: red">Inválido!</h1>
	   	<?php

	 	}
	 	?>		
</body>
</html>
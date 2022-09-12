<?php
  
  // $arrayNome =  array("Pedro", "Fernanda", "Lucas", "Marcos", "Joana"); Exitem duas forma de excrever o array. Com Array ou apenas entre [] 
     $arrayNome = ["Pedro", "Valentina", "Maria", "Cassandra", "Joana"];

    /* echo $arrayNome[0] . "<br/>";
     echo $arrayNome[1] . "<br/>"; 
     echo $arrayNome[2] . "<br/>";
     echo $arrayNome[3] . "<br/>";
     echo $arrayNome[4] . "<br/>"; 

   /*  for ($i = 0; $i < 5; $i++ ){
     	echo $arrayNome[$i] . "<br/>";
     }*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
	<body>
		<select id="slProfessores" name="slProfessores">
		<?php 
		for ($i = 0; $i < count($arrayNome); $i++){
			?>
			<option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
			<?php 
		}
		?>
		</select>	
		<button onclick="alert(document.getElementById('slProfessores').value);">Selecionar</button>
	</body>
</html>
<?php 
    
    $dia = 7 ;
    $msg = "";

    switch ($dia) {

    	case 1:
    		$msg =  " Domingo.";
    		break;
    	
    	case 2:
    		$msg =  " Segunda-Feira.";
    		break;

    	case 3:
    		$msg =   " Terça-Feira.";
    		break;	
    	
    	case 4:
    		$msg =   " Quarta-Feira.";
    		break;

    	case 5:
    		$msg =   " Quinta-Feira.";
    		break;	

    	case 6:
    		$msg =  " Sexta-Feira.";
    		break;
    	
    	case 7:
    		$msg =  " Sábado.";
    		break;		
    			
    	default:
    		echo "Esta opção não condiz com os números de dias!";
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
	<p>Olá, hoje é <?= $msg;?></p>	
</body>
</html>
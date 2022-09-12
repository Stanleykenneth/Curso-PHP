<?php
  
  // $arrayNome =  array("Pedro", "Fernanda", "Lucas", "Marcos", "Joana"); Exitem duas forma de excrever o array. Com Array ou apenas entre [] 
     $arrayNome = ["Pedro", "Valentina", "Maria", "Cassandra", "Joana"];

    /* echo $arrayNome[0] . "<br/>";
     echo $arrayNome[1] . "<br/>"; 
     echo $arrayNome[2] . "<br/>";
     echo $arrayNome[3] . "<br/>";
     echo $arrayNome[4] . "<br/>";  */  

     for ($i = 0; $i < 5; $i++ ){
     	echo $arrayNome[$i] . "<br/>";
     }

?>
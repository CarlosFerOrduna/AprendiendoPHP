<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="estilos.css">
</head>

<body>
<?php

    
    /*for($i = 0; $i < 10; $i++){
            
        echo "9 x $i = " . 9*$i . "<br>";
    
        
      /*  if($i == 5){
            
            echo "<p>Bucle interrumpido</p>";
        
            break;
        }*/ 
      
    for($i = 10; $i > -10; $i--){
        
        if($i == 0){
            echo "No se puede dividir por 0.<br>";
            continue;
        }
        
        echo "9 / $i = " . 9/$i . "<br>";
    }
    echo "Salimos del bucle";

?>
</body>
</html>
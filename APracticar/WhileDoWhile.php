<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="estilos.css">
</head>

<body>
<?php

    $variable = 1;
    
 //   while ($variable < 6){
   do{     
        echo "$variable Ejecutando un bucle <br>";
        
        $variable++;
    }while ($variable<6);
    echo "Salimos del bucle";

?>
</body>
</html>
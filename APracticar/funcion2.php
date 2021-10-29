<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
        function incrementa(&$valor){
            
            $valor++;
            
            return $valor;
        }
        
        $numero = 5;
        
        echo incrementa($numero) . "<br>";
        
        echo $numero . "<br>";
        
        $sumar = $numero + $numero;
        
        echo incrementa($sumar);*/
        
     function cambio_mayus(&$param){
         
         $param = strtolower($param);
         
         $param = ucwords($param);
         
         return $param;
     }
     
     $cadena = "hola mundo";
     
     echo cambio_mayus($cadena) . "<br>";
        
     echo $cadena;
     ?>
    </body>
</html>

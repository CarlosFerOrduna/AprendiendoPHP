<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $semana[] = "lunes";
        $semana[] = "martes";
        $semana[] = "miercoles";
        $semana[] = "jueves";
        $semana[] = "viernes";
        $semana[] = "sabado";
        $semana[] = "domingo";

        $numero = array("lunes" => 1, "martes" => 2, "miercoles" => 3, "jueves" => 4, "viernes" => 5, "sabado" => 6, "domingo" => 7);

        foreach ($numero as $clave=>$valor){
            //echo "A $clave le corresponde $valor <br>";
        }
        
        for($i = 0; $i < count($semana);$i++){ // reemplaza el .length de java
            //echo $semana[$i] . "<br>";
           
            
            echo sort($semana) . "<br>";
        }
        ?>
    </body>
</html>

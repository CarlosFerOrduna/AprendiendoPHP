 <?php 
        
        include ("Calcular.php");
        if(isset($_POST['calcular'])){
            $primerNumero = $_POST['primerNumero'];
            $segundoNumero = $_POST['segundoNumero'];
            $opciones = $_POST['opciones'];
            
            switch ($opciones) {
                case 0: echo "$primerNumero + $segundoNumero = " . Calcular::sumar($primerNumero, $segundoNumero);
                    break;
                case 1: echo "$primerNumero - $segundoNumero = " . Calcular::restar($primerNumero, $segundoNumero);
                    break;
                case 2: echo "$primerNumero * $segundoNumero = " . Calcular::multiplicar($primerNumero, $segundoNumero);
                    break;
                case 3: echo "$primerNumero / $segundoNumero = " . Calcular::dividir($primerNumero, $segundoNumero);
                    break;
                }
            
        }
 ?>
        
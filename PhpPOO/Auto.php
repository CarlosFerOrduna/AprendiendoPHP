<?php

include ("Vehiculo.php");

class Auto extends Vehiculo {

    function arrancar() {
        parent::arrancar();
    }

    function establecerColor($nuevoColor) {
        parent::establecerColor($nuevoColor);
    }

}

?>
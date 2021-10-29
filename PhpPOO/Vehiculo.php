<?php

class Vehiculo {

    protected $color; //atributos
    protected $motor;
    protected $ruedas;

    function __construct($color, $motor, $ruedas) { //constructor
        $this->color = $color;
        $this->motor = $motor;
        $this->ruedas = $ruedas;
    }

    function arrancar() { //metodo
        echo "Estoy arrancando";
    }

    function doblar() {
        echo "Estoy frenando";
    }

    function frenar() {
        echo "Estoy frenando";
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color): void {
        $this->color = $color;
    }

}

?>
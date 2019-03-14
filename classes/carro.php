<?php

include 'motor.php';

class Carro extends Motor {

    public $motor, $modelo, $cor, $marca, $ano, $cambio;

    public function imprimeCarro(){
        echo "Informações do carro: <br>";
        echo $this->modelo."<br>";
        echo $this->cor."<br>";
        echo $this->marca."<br>";
        echo $this->ano."<br>";
        echo $this->cambio."<br><br>";
    }

    public function imprimeMotor(){
        echo "Informações do Motor: <br>";
        echo $this->cilindro."<br>";
        echo $this->potencia."<br>";
        echo $this->giroAtual."<br>";
        echo $this->combustivel."<br>";
    }


}

?>
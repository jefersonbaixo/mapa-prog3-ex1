<?php

include './classes/carro.php';

$carro1 = new Carro;
$carro1->motor = new Motor;

$carro1->modelo = filter_input(INPUT_POST, "modelo");
$carro1->cor = filter_input(INPUT_POST, "cor");
$carro1->marca = filter_input(INPUT_POST, "marca");
$carro1->ano = filter_input(INPUT_POST, "ano");
$carro1->cambio = filter_input(INPUT_POST, "cambio");
$carro1->cilindro = filter_input(INPUT_POST, "cilindro");
$carro1->potencia = filter_input(INPUT_POST, "potencia");
$carro1->giroAtual = filter_input(INPUT_POST, "giroAtual");
$carro1->combustivel = filter_input(INPUT_POST, "combustivel");

$carro1->imprimeCarro();
$carro1->imprimeMotor();

?>
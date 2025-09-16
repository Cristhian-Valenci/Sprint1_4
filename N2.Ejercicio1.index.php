<?php 
require_once 'N2.Ejercicio1.PokerDice.php';

$array5Dados = [];

for ($i = 0; $i < 5; $i++) {
    $dado = new PokerDice();
    $dado->tirar();
    $dado->shapeName();
    $array5Dados[] = $dado;
}

foreach($array5Dados as $indice => $dado) {
    echo "Al Dado " . ($indice + 1) . " le salio la cara: " . $dado->shapeName() . "\n";
}


echo "el total de tiradas es :" . PokerDice::getTotalThrows();
?>
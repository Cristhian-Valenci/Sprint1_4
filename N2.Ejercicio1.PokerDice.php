<?php 

class PokerDice {
    
    private $carasDado = ['As', 'K', 'Q', 'J', '8', '7'];
    private $ultimaCaraAlAzar;
    private static $totalTiradas = 0;

    function tirar() { //cambio nombre que pide el enunciado, porque throw es una palabra reservada y me da error.
        $tiradaAleatoria = rand(0, 5);
        $this->ultimaCaraAlAzar =  $this->carasDado[$tiradaAleatoria];

        self::$totalTiradas++;
        // aca pongo self:: y no this-> porque es un atributo estatico !!

    }

    function shapeName() : String {
        return $this->ultimaCaraAlAzar;
    }

     static function getTotalThrows() : int {
        return self::$totalTiradas;
        
    }

}
?>
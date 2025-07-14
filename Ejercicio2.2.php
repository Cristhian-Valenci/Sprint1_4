<?php

class Triangulo extends Shape {


    public function __construct($alto, $ancho) {
        parent::__construct ($alto, $ancho);
      
    }

    public function area() {
        return ($this->alto * $this->ancho) / 2;
    }
}

?>
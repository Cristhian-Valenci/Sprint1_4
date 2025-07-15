<?php

class Triangulo extends Shape {


    public function area() {
        return "El area del triangulo es: " . ($this->alto * $this->ancho) / 2;
    }
}

?>
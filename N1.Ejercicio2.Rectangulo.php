<?php

class Rectangulo extends Shape {

 

    public function area() {
        return "El area del rectangulo es: " . $this->alto * $this->ancho;
    }
}

?>
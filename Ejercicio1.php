<?php

class Employee {

    private $nombre;
    private $sueldo;

    public function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function pagarImpuestos() {
        if ($this->sueldo > 6000) {
            return "El empleado $this->nombre debe pagar impuestos";
        } else {
            return "El empleado $this->nombre NO debe pagar impuestos";
        }
    }
}



?>
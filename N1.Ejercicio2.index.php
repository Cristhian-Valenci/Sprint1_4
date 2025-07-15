<?php 
require_once 'N1.Ejercicio2.Shape.php';
require_once 'N1.Ejercicio2.Rectangulo.php';
require_once 'N1.Ejercicio2.Triangulo.php';

$rectangulo = new Rectangulo(2, 4);
echo $rectangulo->area();

$triangulo = new Triangulo(3, 6);
echo $triangulo->area();






?>
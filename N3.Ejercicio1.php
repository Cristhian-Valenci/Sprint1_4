<?php 

Class Pelicula {
    
    private $nombre;
    private $duracion;
    private $director;

    public function __construct(String $nombre, int $duracion, String $director) {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->director = $director;
    }

    public function getNombre() : String {
        return $this->nombre;
    }
    public function getDuracion() : int {
        return $this->duracion;
    }
    public function getDirector() : String {
        return $this->director;
    }
}

Class Cine {

    private $nombre;
    private $poblacion;
    private array $listadoDePeliculas = [];

    public function __construct(String $nombre, String $poblacion, array $listadoDePeliculas) {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->listadoDePeliculas = $listadoDePeliculas;
    }

    public function getNombre() : String {
        return $this->nombre;
    }
    public function getPoblacion() : String {
        return $this->poblacion;
    }
    public function getListadoDePeliculas() : Array {
        return $this->listadoDePeliculas;
    }


}


$peliculas = [
    new Pelicula("Mi pobre Angelito", 210, "Garcia"),
    new Pelicula("Mi papa es un idolo", 90, "Rodriguez"),
    new Pelicula("Locademia de policias", 110, "Gimenez"),
    new Pelicula("El tony", 80, "Pacheco")
];

$cines = [
    new Cine("Arago", "Barcelona", [$peliculas[0], $peliculas[1]]),
    new Cine("Corrientes", "Buenos Aires", [$peliculas[2], $peliculas[3]])
];

function mostrarPeliculas(array $cines) : void{
   
    foreach($cines as $cine) {
        echo "El cine: " . $cine->getNombre(). " tiene las siguientes películas en cartelera: <br>";
        $peliculas = $cine->getListadoDePeliculas();

        if(empty($peliculas)) {
            echo  "No hay peliculas en cartelera<br>";
        }

        foreach($peliculas as $pelicula) {
            echo $pelicula->getNombre() . "<br>";
        }
        echo "<br>";
    }
}

function mostrarPeliculaMasLarga(array $cines) : void {
   
    foreach($cines as $cine) {
        echo "La pelicula mas larga del cine: " . $cine->getNombre() . " es: <br>";

        $peliculas = $cine->getListadodePeliculas();
        $longitudMaxima = 0;
        $stringMasLargo = "";

        foreach($peliculas as $pelicula) {
         $nombrePelicula = $pelicula->getNombre();
            if(strlen($nombrePelicula) > $longitudMaxima) {
            $longitudMaxima = strlen($nombrePelicula);
            $stringMasLargo = $nombrePelicula;
          }
        }
         echo $stringMasLargo;
    }
}

function buscarDirector(array $cines, string $nombreDirector) : array {
    
    $peliculasDelDirector = [];

    foreach($cines as $cine) {
        $peliculas = $cine->getListadoDePeliculas();
    
        foreach($peliculas as $pelicula) {
            if ($nombreDirector === $pelicula->getDirector()) {
                if(!in_array($pelicula->getNombre(), $peliculasDelDirector)) { // Esto es para que no se repitan las peliculas si tiene 2 el mismo director
                    $peliculasDelDirector[] = $pelicula->getNombre(); 
                }
            }
        }
    }
   return $peliculasDelDirector;
}

mostrarPeliculas($cines);
mostrarPeliculaMasLarga($cines);
//var_dump(buscarDirector($cines, "Pacheco"));  //Entiendo que al hacer var_dump() y me imprime, es porque la funcion de por si no imprime nada, y solo la estaba llamando, no la estaba imprimiendo.
print_r(buscarDirector($cines, "Pacheco"));
?>
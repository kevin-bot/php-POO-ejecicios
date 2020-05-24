<?php 

class Animal{
    public $nombre ;
    public $edad;
    private $correo;
    public static $raza = "ROCK";
    const TIPO = "Animal";
    public function caminar(){
        return "El Animal está caminando";
    }
}


// ISTANCIA DE CLASE
$miAnimal = new Animal();

//INSERTCION DE DATOS A VARIBALES 
$miAnimal->nombre = "Lucas";
$miAnimal->edad = 20;

// MOSTRAR VALORES DE VARIABLES 
echo $miAnimal->nombre ."<br>";
echo $miAnimal->edad."<br>";

// LLAMAR A METODO
$caminando = $miAnimal->caminar();
echo $caminando;

// LLAMRA A ATRIBUTOS ESTATICOS 
echo "<br><br>";
echo Animal::$raza;
// LLAMANDO CONTANTES
echo "<br><br>";
echo Animal::TIPO;



class Persona{

    public function __construct($nombre,$apellido,$edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function __destruct(){
        echo "<br> Esto es un destructor";
    }
}
echo "<br><br>";
$miPersona = new Persona("David","Narvaez",20);
echo "EL nombre es: " . $miPersona->nombre;

?>
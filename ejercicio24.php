<?php

//HERENCIA EN PHP

class persona{

    public $nombre;   //propiedades
    public $edad;
    private $altura; //encapsulamiento privado: no se podrá imprimir
    protected $tSangre;   //encapsulamiento protegido

    public function asignarNombre($nuevoNombre){  //acciones o metodos

        $this->nombre=$nuevoNombre;
    }

    public function asignarEdad($nuevaEdad){
        $this -> edad = $nuevaEdad;
    }

    //metodo para poder imprimir la altura
    public function mostrarAltura(){
        $this -> altura = 1.73;
        return $this->altura;
    }
}

class trabajador extends persona {
    public $puesto;   //propiedad nueva
    public function presentarTrabajador(){
        echo "Hola soy ".$this->nombre. " y soy un ".$this->puesto;
    }
}

$objTrabajador = new trabajador();              //creación de un objeto
$objTrabajador -> asignarNombre("Franco Perez");
$objTrabajador -> puesto = "Profesor"; 
$objTrabajador -> presentarTrabajador(); 
?>
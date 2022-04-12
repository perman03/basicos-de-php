<?php

//CLASES EN PHP

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

$objAlumno = new persona();              //creación de un objeto
$objAlumno2 = new persona();             //objeto numero
$objAlumno -> asignarNombre("Franco");     //pasamos el parametro (nombre)
$objAlumno -> asignarEdad(21);
$objAlumno2 -> asignarNombre("Julie"); 
echo $objAlumno -> nombre;                         //imprimimos propiedad
echo "<br/>";
echo $objAlumno -> mostrarAltura();
echo "<br/>";
echo $objAlumno -> edad;
echo "<br/>"; 
echo $objAlumno2 -> nombre; 
?>
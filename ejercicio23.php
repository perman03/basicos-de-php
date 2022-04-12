<?php

//CLASES EN PHP

class persona{
    public $nombre;   //propiedades
    public $edad;

    public function asignarNombre($nuevoNombre){  //acciones o metodos

        $this->nombre=$nuevoNombre;
    }

    public function asignarEdad($nuevaEdad){
        $this -> edad = $nuevaEdad;
    }
}

$objAlumno = new persona();              //creación de un objeto
$objAlumno2 = new persona();             //objeto numero 2...
$objAlumno -> asignarNombre("Franco");     //pasamos el parametro (nombre)
$objAlumno -> asignarEdad(21);
$objAlumno2 -> asignarNombre("Julie"); 
echo $objAlumno -> nombre;                         //imprimimos propiedad
echo "<br/>";
echo $objAlumno -> edad;
echo "<br/>"; 
echo $objAlumno2 -> nombre; 
?>
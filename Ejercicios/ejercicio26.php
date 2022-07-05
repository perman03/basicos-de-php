<?php

//METODOS ESTÁTICOS

class UnaClase{

    public static function unMetodo(){
        echo "Hola soy un método estático";
    }

}

$obj=new UnaClase(); 
$obj-> unMetodo();

/* 
Los metodo estaticos a diferencia de los otros se invocan
sin crear un objeto, o sea desde la misma clase a la que 
pertenece. Se ve de la siguiente forma

*/

unaClase::unMetodo();

/*
Primero se llama a la clase, luego se utilizan dos puntos ::
y finalmente se invoca al método estático creado. Todo sin la
necesidad de instanciar un objeto basado en esa clase

*/
?>
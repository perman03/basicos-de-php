<?php

// INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'Sitio web con Nest');

include_once '../config/bd.php';    //llamamos a la configuracion 
$conexionBD = BD::crearInstancia();   //creamos una instancia


//consultando BD...
$consulta = $conexionBD -> prepare("SELECT * FROM cursos");            //query para consultar toda la informacion
$consulta -> execute(); 
$listaCursos = $consulta -> fetchall();                               //retorna todos los datos y los almacena en una lista 


?>
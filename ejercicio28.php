<?php

//LEER DATOS DE PHPMYADMIN

$servidor="localhost";         //127.0.0.1
//acceso de usuario
$usuario="root"; 
$password = ""; 

//si no sucede ningun error se ejecuta...  
try{

    //PDO nos permite conectarnos a la base de datos
    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$password); 
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
   
    //REALIZAMOS CONEXION CON LA BD
    $sql="SELECT * FROM `fotos`";
    $sentencia = $conexion->prepare($sql); 
    $sentencia->execute(); 

    //METODO FETCH
    $resultado = $sentencia -> fetchAll(); 

    //metodo 1 para imprimir informacon de la bd
    print_r($resultado);

    //metodo 2 para imprimir informacon de la bd
    foreach($resultado as $foto){
        //imprimimos los nombres que hay en la tabla
        print_r($foto['nombre']); 
        echo $foto['nombre']."<br/>"; 
    }
    
    echo "Conexion exitosa";

//Si existe algun error, mostrarlo
}catch(PDOException $error){
    echo "Conexion fallida".$error; 
}


?>
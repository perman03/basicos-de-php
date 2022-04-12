<?php

//CONECTAR PHP A MYSQL

$servidor="localhost";         //127.0.0.1
//acceso de usuario
$usuario="root"; 
$password = ""; 

//si no sucede ningun error se ejecuta...  
try{

    //PDO nos permite conectarnos a la base de datos
    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$password); 
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    echo "Conexion exitosa";

//Si existe algun error, mostrarlo
}catch(PDOException $error){
    echo "Conexion fallida".$error; 
}


?>
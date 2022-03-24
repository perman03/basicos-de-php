<?php

if($_POST){

    $txtNombre = $_POST['txtNombre'];
    $txtApellido = $_POST['txtApellido'];
     //concantenacion entre string y contenido de variables
    echo "Hola, " . $txtNombre ." " . $txtApellido;                 

}

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenacion</title>
</head>
<body>

<form action="ejercicio5.php" method="post">
    Nombre(s):
    <input type="text" name="txtNombre">
    <br>
    Apellido(s):
    <input type="text" name="txtApellido" id="">
    <br>
    <input type="submit" value="Enviar">
</form>
    
</body>
</html>
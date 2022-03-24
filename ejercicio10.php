<?php

    if($_POST){

        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];


        //operador or
        if ( ($valorA != $valorB) || ($valorA > $valorB) ) {
            echo "El valor de A es diferente al de B y es mayor";
        }

    }


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores racionales</title>
</head>
<body>

    <form action="ejercicio10.php" method="post">
        <!-- Inpunts para introducir los valores necesarios -->
        <legend>Valor A </legend>
        <input type="text" name="valorA" id="">
        <br>
        <legend>Valor B </legend>
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">

    </form>
    
</body>
</html>
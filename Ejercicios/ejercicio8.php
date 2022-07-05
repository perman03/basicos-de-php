<?php

    if($_POST){
        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];

        
        //suma
        $suma = $valorA+$valorB;
        echo $suma;

        //resta
        $resta = $valorA - $valorB;
        echo "<br/>".$resta;

        //multiplicacion
        $multi = $valorA * $valorB;
        echo "<br/>" . $multi;

        //division 
        $div = $valorA / $valorB;
        echo "<br/>".$div;




    }


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>

    <form action="ejercicio8.php" method="post">
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
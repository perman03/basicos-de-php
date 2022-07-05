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
        echo "<br/>".$div . "<br/>";

        //Anidacion de If

        //si el valor A es igual al valor de B
        if($valorA==$valorB){
            //...imprime en pantalla:
            echo "El valor de A es igual que el valor de B <br/>";

            //(segunda condición if) si el valor de A es 4...
            if($valorA == 4){
                //...imprime en pantalla:
                echo "<br/>" . "El valor es 4";
            }

            //(tercera condición if) si el valor de A es 5...
            if($valorA == 5){
                //...imprime en pantalla:
                echo "El valor es 5" . "<br/>";
            }
        }




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

    <form action="ejercicio11.php" method="post">
        <!-- Inpunts para introducir los valores necesarios -->
        <br>
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
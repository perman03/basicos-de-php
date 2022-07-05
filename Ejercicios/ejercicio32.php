<!-- LOS FORMATOS JSON ES INFORMACION QUE VIENE EN 
ALGUNAS API'S. EJERCICIO PARA CONOCER LA FUNCION DE JSON DECODE
SON UNA FORMA DE INTERCAMBIAR INFORMACION
-->


<?php

//FUNCION PARA JSON DECODE

//formato json
$jsonContenido='[
    {"nombre":"Franco", "apellido":"Gonzalez"},
    {"nombre":"Jose", "apellido":"Pérez"} 
    ]';
    
    $resultado = json_decode($jsonContenido); 
   //print_r($resultado);

    foreach($resultado as $persona){
        echo($persona -> nombre) . " ". ($persona -> apellido)."<br/>";
    }


?>
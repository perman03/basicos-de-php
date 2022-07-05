

<?php

//VARIABLES DE SESION 
   


//variables de sesion para almacenar información
session_start();
$_SESSION["usuario"]="frankfurt"; 
$_SESSION["status"]="logeado"; 

echo "Sesion iniciada".":<br/>";

echo $_SESSION["usuario"]." status: ".$_SESSION["status"]; 






?>
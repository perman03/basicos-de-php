<?php

class bd{

    public static $instancia = null;
    public static function crearInstancia(){          //metodo crear nueva instancia 

        if(  !isset (self::$instancia)   ){           //preguntamos si la instancia tiene contenido
            
            //si la instancia no tiene contenido
            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION; 
            self::$instancia = new PDO('mysql:host=localhost;dbname=app', 'root', '', $opciones); 
            echo 'conectando...'; 
        
        }  
        return self::$instancia;      
    }

}

?>
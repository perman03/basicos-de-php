<?php

//VALORES DE INPUT RADIO

$txtNombre = "";
$rdgLenguaje = ""; 

if( $_POST ){
    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:""; 
    $rdgLenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:""; 

    print_r($rdgLenguaje); 
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>

    <?php  if($_POST){ ?>
    <strong> Hola </strong>, <?php echo $txtNombre; ?>
    <br>
    <strong>Tu lenguaje es:</strong> <?php echo $rdgLenguaje; ?>
    <?php } ?>

    <form action="ejercicio31.php" method="post">

        Nombre:<br/>
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <br/>
        Lenguaje: <br/>
        <br/> php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"";?> name="lenguaje" value="php" id="">
        <br/> Java: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"";?> name="lenguaje" value="java" id="">
        <br/> Golang: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"";?> name="lenguaje" value="golang" id="">
        <br/>
        <input type="submit" value="Enviar Información">

                    


    </form>

</body>
</html>
<?php
// Recibir información del formulario HTML (metodo post)
// el metodo _post va a recibir mediante post el valor que tenga el elemenot con el nombre txtNombre, y ese valor va a asignarse a la   variable nombre
if($_POST){//si se hizo un envio
    $nombre=$_POST['txtNombre'];
    echo "Hola ".$nombre;
}

?>

<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bienvenido
    <!-- action ejercicio2.php quiere decir que el formulario va a enviar los datos a este mismo documento. La información la va a enviar por un metodo que se llama post -->
    <form action="e2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
<?php
//Clase conector 
include("conector.php");

//Variables para los imput 
$nombre = $_POST['nombre'];
$domicilio = $_POST['domicilio'];

//Consulta "INSERT" para la base de datos
$consulta = "INSERT INTO tienda(nombre,domicilio) VALUES ('$nombre','$domicilio')";

//Ejecutamos la consulta
$ejecutar = mysqli_query($conectar,$consulta);

//Verificacion de la ejecucion
if($ejecutar){
    echo "Se registraron los datos correctamente <br> <a href ='index.html'>Volver</a> ";
}else{
    echo "No se registraron tus datos. Intentalo de nuevo ";
}
?>
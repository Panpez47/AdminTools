<?php
//Clase conector 
include("conector.php");

//Variables para los imput 
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

//Consulta "INSERT" para la base de datos
$consulta = "INSERT INTO `proveedor`(`nombre`, `apellidos`) 
            VALUES ('$nombre','$apellido')";

//Ejecutamos la consulta
$ejecutar = mysqli_query($conectar,$consulta);

//Verificacion de la ejecucion
if($ejecutar){
    echo "Se registraron los datos correctamente <br> <a href ='proveedor.html'>Volver</a> ";
}else{
    echo "No se registraron tus datos. Intentalo de nuevo ";
}
?>
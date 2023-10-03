<?php
//Clase conector 
include("conector.php");

//Variables para los imput 
$nombre = $_POST['nombre'];
$costo = $_POST['costo'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['total'];
//Consulta "INSERT" para la base de datos
$consulta = "INSERT INTO `producto`(`Nombre`, `Costo`, `Descripción`, `cantidad`) 
            VALUES ('$nombre','$costo','$descripcion','$cantidad')";

//Ejecutamos la consulta
$ejecutar = mysqli_query($conectar,$consulta);

//Verificacion de la ejecucion
if($ejecutar){
    echo "Se registraron los datos correctamente <br> <a href ='producto.html'>Volver</a> ";
}else{
    echo "No se registraron tus datos. Intentalo de nuevo ";
}
?>
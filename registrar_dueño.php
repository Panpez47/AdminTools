<?php
//Clase conector 
include("conector.php");

//Variables para los imput 
$id_tienda = $_POST['id_tienda'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

//Consulta "INSERT" para la base de datos
$consulta = "INSERT INTO `dueño`(`nombre`, `apellido`, `correo`, `contraseña`, `id_tienda`) 
            VALUES ('$nombre','$apellido','$correo','$contraseña','$id_tienda')";

//Ejecutamos la consulta
$ejecutar = mysqli_query($conectar,$consulta);

//Verificacion de la ejecucion
if($ejecutar){
    echo "Se registraron los datos correctamente <br> <a href ='iniciosesion.php'>Volver</a> ";
}else{
    echo "No se registraron tus datos. Intentalo de nuevo ";
}
?>
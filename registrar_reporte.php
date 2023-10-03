<?php
//Clase conector 
include("conector.php");

//Variables para los imput 
$reporte = $_POST['reporte'];


//Consulta "INSERT" para la base de datos
$consulta = "INSERT INTO `reportes`( `descripcion_reporte`)
             VALUES ('$reporte')";

//Ejecutamos la consulta
$ejecutar = mysqli_query($conectar,$consulta);

//Verificacion de la ejecucion
if($ejecutar){
    echo "Se registraron los datos correctamente <br> <a href ='trabajador.html'>Volver</a> ";
}else{
    echo "No se registraron tus datos. Intentalo de nuevo ";
}
?>
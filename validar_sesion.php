<?php
    //Variables
    $usuario = $_POST['username'];
    $contraseña = $_POST['pass'];
    session_start();
    $_SESSION['usuario'] = $usuario;

    //Conector
    include("conector.php");

    //Consulta
    $consulta = "SELECT*FROM dueño where nombre = '$usuario' and contraseña = '$contraseña'";

    //Ejecucion
    $resultado = mysqli_query($conectar,$consulta);

    //Comprobacion
    $filas = mysqli_num_rows($resultado);


    if($filas){
        header("location:index.html");
    }else{
        ?>
        <?php
        include("iniciosesion.html");
        ?>
        <h1>Datos Incorrectos</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conectar);





<?php
//Clase conector 
$conectar = mysqli_connect('localhost','root','1234','admintools');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendas</title>
    <link rel="stylesheet" href="css/menudis.css">
    <link rel="stylesheet" href="css/tablasdis.css">
    
</head>
<body>
<header>
    <!-- start nav -->
    <nav id="menu">
    <!-- start menu -->
    <ul>
     <li><a href="index.html">Inicio</a></li>
     <li><a href="#">Agregar</a>
    <!-- start menu desplegable -->
     <ul>
     <li><a href="tienda.html">Agregar una Tienda</a></li>
     <li><a href="trabajador.html">Agregar un Empleado</a></li>
     <li><a href="producto.html">Agregar un Producto</a></li>
     <li><a href="proveedor.html">Agregar Proveedor</a></li>
     <li><a href="Administrador.html">Administrador  </a></li>
     </ul>
    <!-- end menu desplegable -->
     </li>

     <li><a href="">Ver</a>
      <!-- start menu desplegable -->
     <ul>
       <li><a href="tiendas_ver.php">Tiendas</a></li>
       <li><a href="producto_ver.php">Productos</a></li>
       <li><a href="trabajador_ver.php">Trabajadores</a></li>
       <li><a href="proveedor_ver.php">Proveedores</a></li>
     </ul>
    </li>
      <!-- end menu desplegable -->
     <li><a href="reportes.html">Soporte</a></li>
     <li><a href="Acercade.html">Acerca de</a></li>
     <li><a href="iniciosesion.html">Cerrar sesion</a></li>
    </ul>
    <!-- end menu -->
    </nav>
    <!-- end nav -->
  <hr>
  </header>
  <br>
    <h1>Tiendas en BD</h1>
    <hr>
    <table>
        <tr>
            <th>ID_Tienda</th>
            <th>Nombre</th>
            <th>Domicilio</th>
        </tr>
            <?php
            $sql = "SELECT * From tienda";
            $resultado = mysqli_query($conectar,$sql);

            while($mostrar = mysqli_fetch_array($resultado)){
            ?>
        <tr>
            <td><?php echo $mostrar['id_tienda']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td><?php echo $mostrar['domicilio']?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
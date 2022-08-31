<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM pizza WHERE Titulo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USM.CL</title>
    <link rel="StyleSheet" href="../Style/CSS.css" type="text/css">
</head>
<header>
    <div class="baul_header">
        <img src="https://raw.githubusercontent.com/Brakmel/jubilant-waffle/main/ProyectoUSM/img/Logo_UTFSM-768x677.png">
    </div>
    <div class="baul_header">
        <h1>Universidad Técnica Federico Santa Maria</h1>
    </div>
</header>
    <body>
        <form action="update1.php" method="POST">
            <input type="hidden" name="Titulo" value="<?php echo $row['Titulo']  ?>">
            <input type="text"  name="descripcion" placeholder="Solicitante" value="<?php echo $row['descripcion']  ?>">
            <input type="text"  name="imagen" placeholder="Fecha + Hora" value="<?php echo $row['imagen']  ?>">
            <input type="text"  name="precio" placeholder="Evento" value="<?php echo $row['precio']  ?>">
            <input type="submit" value="Actualizar">
        </form>
    </body>
</html>
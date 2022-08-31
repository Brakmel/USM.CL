<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM sushi";
    $query=mysqli_query($con,$sql);

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
<body>
<header>
    <div class="baul_header">
        <img src="https://raw.githubusercontent.com/Brakmel/jubilant-waffle/main/ProyectoUSM/img/Logo_UTFSM-768x677.png">
    </div>
    <div class="baul_header">
        <h1>Universidad Técnica Federico Santa Maria, su ubicación es "Semana"</h1>
    </div>
</header>
        <div class="panel_button">
            <a href="Mensual.php">
                <input class="input" type="button" value="Mes">
            </a>
            <a href="../index.php">
                <input class="input" type="button" value="Volver atras">
            </a>  
            <a href="buscarS.php">
                <input class="input" type="button" value="Buscador Semanal">
            </a>  
        </div>
    <form action="insertar.php" method="POST" enctype="multipart/formdata" required>
        <input type="text"  name="Titulo" placeholder="Sala" required>
        <input type="text"  name="descripcion" placeholder="Solicitante" required>
        <input type="datetime"  name="imagen"  placeholder="Fecha + Hora" required>
        <input type="text"  name="precio" placeholder="Evento" required>
        <input type="submit" value="Generar tabla">
    </form>
    <table>
            <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <th><?php  echo $row['Titulo']?></th>
                        <th><?php  echo $row['descripcion']?></th>
                        <th><?php  echo $row['imagen']?></th>
                        <th><?php  echo $row['precio']?></th>
                        <th><a href="actualizar.php?id=<?php echo $row['Titulo'] ?>" >Modificar</a></th>
                        <th><a href="delete.php?id=<?php echo $row['Titulo'] ?>" >Eliminar</a></th>                                          
                    </tr>
                <?php 
                    }
                ?>
            </tbody>
    </table>
</body>
</html>
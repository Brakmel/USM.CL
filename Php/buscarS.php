<?php 
    include("conexion.php");
    $con=conectar();
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
            <h1>Universidad Técnica Federico Santa Maria</h1>
        </div>
        <div class="baul_header">
            <p>En caso de que no escriba nada y le de a buscar apareceran todos los resultados, relacionados a "Semana"</p>
        </div>
    </header>
    <div class="panel_button">
        <a href="Mensual.php">
            <input class="input" type="button" value="Ver salas disponibles">
        </a>
        <a href="../index.php">
            <input class="input" type="button" value="Volver atras">
        </a>  
    </div>
    <form class="form_buscador" action="" method="get">
        <input class="buscador" type="text" name="busqueda" placeholder="31-04-2022">
        <input class="buscador_click" type="submit" name="enviar" value="¡Buscar la fecha indicada!">
    </form>
    <?php
    if(isset($_GET['enviar'])) {
        $busqueda = $_GET['busqueda'];

        $consulta = $con->query("SELECT * FROM sushi WHERE imagen LIKE '%$busqueda%'");

        while ($row = $consulta->fetch_array()) {
            echo $row['imagen'].'<br>';
        }
    }
    
    ?>
</body>
</html>
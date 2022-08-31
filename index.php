<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USM.CL</title>
    <link rel="StyleSheet" href="Style/index.css" type="text/css">
</head>
<body>
<!--Aqui esta nuestro header principal, el cual contiene el titulo y los botones para navegar entre nuestras paginas-->
<header>
    <div class="baul_header">
        <img src="https://raw.githubusercontent.com/Brakmel/jubilant-waffle/main/ProyectoUSM/img/Logo_UTFSM-768x677.png">
    </div>
    <div class="baul_header">
        <h1>Universidad Técnica Federico Santa Maria</h1>
    </div>
</header>
    <div class="panel_button">
        <a href="Php/Semanal.php">
            <input class="input" type="button" value="Administrar salas">
        </a> 
        <a href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1661949997&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fui%3des-ES%26rs%3dCL%26nlp%3d1%26RpsCsrfState%3d63634c7c-fb39-bc76-adf9-cb38f7b5f489&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015">
            <input class="input" type="button" value="Revisar correo">
        </a> 
        <a href="Php/buscarS.php">
            <input class="input" type="button" value="Buscar sala semanal">
        </a>
        <a href="Php/buscarM.php">
            <input class="input" type="button" value="Buscar sala mensual">
        </a>  
    </div>
    <!--Categorias de las 3 cartas.-->
    <main>
        <div class="baules_categorias">
            <!--Contenedor de la carta Mensual-->
            <div class="baul_categoria">
                <div class="tittle">
                    <h4 class="h4">
                        Mensual
                    </h4>
                </div>
                <div class="baul_img">
                    <a href="Htmls/CartaPizza.php">
                        <img  class="calendario" src="https://cdn.pixabay.com/photo/2016/10/23/17/06/calendar-1763587_960_720.png">
                    </a>
                </div>
                <div class="reseña">
                    <p class="p_baul">Revisar Mes</p>
                </div>
            </div>
            <!--Contenedor de la carta Semanal-->
            <div class="baul_categoria">
                <div class="tittle">
                    <h4 class="h4">
                        Semanal
                    </h4>
                </div>
                <div class="baul_img">
                    <a href="Htmls/CartaSushi.php">
                        <img  class="calendario" src="https://cdn.pixabay.com/photo/2016/10/23/17/06/calendar-1763587_960_720.png">
                    </a>
                </div>
                <div class="reseña_sushi">
                    <p class="p_baul">Revisar Semana</p>
                </div>
            </div>
            <!--Contenedor de la carta Mensual y Semanal-->
            <div class="baul_categoria">
                <div class="tittle">
                    <h4 class="h4">
                        Mensual y Semanal
                    </h4>
                </div>
                <div class="baul_img">
                    <a href="">
                        <img  class="calendario" src="https://cdn.pixabay.com/photo/2016/10/23/17/06/calendar-1763587_960_720.png">
                    </a>
                </div>
                <div class="reseña">
                    <p class="p_baul">Revisar Mnesual y semanal</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/user_perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="static/js/user_perfil.js"></script>
    <title>Only healty</title>
    <?php
        include('static/php/Cliente.php');
        include('static/php/conexion.php');
        session_start();
    ?>
</head>
<body>
    <div class="container">
        <div class="left">
            <div>
            <img src="static/imgs/123.jpg" alt="imagen">
            </div>
            <div>
                <p><?php
                if (isset($_SESSION['cliente']))
                    echo $_SESSION['cliente']->getNombreCompleto();
                else
                    echo "no hay"; ?>
                </p>
                <p>X kcal</p>
            </div>
            <div class="tareas">
                <ul>
                    <li><i class="fas fa-cog"></i><a href="javascript:cargarContenido('templates/user_perfil6.php')"> Mi cuenta </a></li>
                    <li><i class="fas fa-utensils"></i><a href="javascript:cargarContenido('templates/user_perfil4.php')"> Consumido</a></li>
                </ul>
            </div>
        </div>

        <div class="center" id="center">
            
            <div class="full_name">
                <div>                    
                    <h1> <i> BIENVENIDO....</i></h1>
                </div>
            </div>
           
        </div>
    </div>
</body>
</html>
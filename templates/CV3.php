<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/user_profesional.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="../static/js/CV.js"></script>
    <link rel="stylesheet" href="../static/css/general_index.css">
    <title>Only healty</title>
    <?php
        include('../static/php/CV.php');
        session_start();
    ?>
</head>
<body>
<nav>
    <div class="nav">
        <div class="nav-left">
            <a href="../index.html"><img src="../static/imgs/logo.png" alt="sana manzaca"></a>                               
        </div>
        <div class="nav-right">
            <p><a href="">Profesionales</a></p>
            <p><a href="blogs.php">Blogs</a></p>
            <p><a  href="CV3.php">Tu cuenta</a></p>
            <p><a href="">Calculadora</a></p>
        </div>
    </div>
</nav>

    <div class="container">
        <div class="left">
            <div>
                <img src="../static/imgs/nutriologo.jpg" alt="imagen">
            </div>
            <div>
                <p><?php
                if (isset($_SESSION['_cv']))
                    echo $_SESSION['_cv']->getNombreCompleto();
                else
                    echo "no hay"; ?>
                </p>
                <p>X kcal</p>
            </div>
            <div class="tareas">
                <ul>
                    <li><i class="fas fa-user-edit"></i><a href="javascript:cargarContenido('editar_perfil_cv.php')">Editar perfil</a></li>
                    <li><i class="fas fa-cog"></i><a href="javascript:cargarContenido('editar_cv.php')"> Editar CV </a></li>
                    <li><a href="javascript:cargarContenido('escribir_tip.php')"><i class="fas fa-feather-alt"></i>escribir tip</a></li>
                    <li><a href="javascript:cargarContenido('ver_tips.php')"><i class="far fa-eye"></i> ver tips</a></li>
                    <li><a href="javascript:cargarContenido('pagos.php')"><i class="fas fa-money-bill-wave"></i>pagos</a></li>
                    <li><i class="fas fa-hands-helping"></i><a href="javascript:cargarContenido('profesional_visitas.php')"> Visitas</a></li>
                    <li><a href="professional_perfil.php">clientes</a></li>
                </ul>
            </div>
        </div>

        <div class="center" id="center">
        <div class="firsti">
                <h2>Editar perfil</h2>
                <button><a href="">Ver perfil publico</a></button>
            </div>
            <label for="">Nombre de usuario</label><br>
            <input type="text" id="username" style="width: 180px;" value="<?php echo $_SESSION['_cv']->getNombreCompleto() ?>">
            <div class="full_name">
                <div>
                    <label for="">Nombre</label><br>
                    <input type="text" id="nombre" value="<?php echo $_SESSION['_cv']->getNombre() ?>"> 
                </div>
                <div>
                    <label for="">Apellido</label><br>
                    <input type="text" id="apellido" value="<?php echo $_SESSION['_cv']->getApellido() ?>"> 
                </div>
                
                <div>
                    <label for="">universidad</label><br>
                    <input type="text" id="universidad" value="<?php echo $_SESSION['_cv']->getUniversidad() ?>"> 
                </div>
                <div>
                    <label for="">Tiulo</label><br>
                    <input type="text" id="titulo" value="<?php echo $_SESSION['_cv']->getTitulo() ?>"> 
                   
                </div>
                
                <div>
                    <label for="">CI</label><br>
                    <input type="text" id="ci" value="<?php echo $_SESSION['_cv']->getCi() ?>"> 
                    
                </div>              
                <div>
                    <label for="">Edad</label><br>
                    <input type="number" id="edad" value="<?php echo $_SESSION['_cv']->getEdad() ?>"> 
                </div>              
                
                <div>
                    <label for="">Correo electronico</label><br>
                    <input type="text" id="correo" value="<?php echo $_SESSION['_cv']->getCorreo() ?>"> 
                </div>              
                
                <div>
                    <label for="">Contraseña</label><br>
                    <input type="number" id="contrasena" value="<?php echo $_SESSION['_cv']->getcontrasena() ?>"> 
                </div>              
                
            </div>
            <h4>Redes sociales</h4>
            <div class="social_network">
                <ul>
                    <li><i class="fab fa-facebook"></i><input type="text"></li>
                    <li><i class="fab fa-twitter"></i><input type="text"></li>
                    <li><i class="fab fa-instagram-square"></i><input type="text"></li>
                </ul>
            </div>
            <div>
                <button type="button" style="margin: auto;" onclick="javascript:actualizar_datos_personales()">Guardar Cambios</button>
                <button><a href="../static/php/cerrar_sesion_p.php">Cerrar sesion</a></button>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include('../static/php/CV.php');
        session_start();
?>

<div class="firsti">
    <h2>Editar perfil</h2>
    <button><a href="">Ver perfil publico</a></button>
</div>
<label for="">Nombre de usuario</label><br>
<input type="text" id="username" style="width: 180px;" value="<?php
                if (isset($_SESSION['_cv']))
                    echo $_SESSION['_cv']->getNombreCompleto();
                else
                    echo "no hay"; ?>">
<div class="full_name">
    <div>
        <label for="">Nombre</label><br>
        <input type="text" id="nombre" value="<?php echo $_SESSION['_cv']->getNombre() ?>"> 
    
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
</div>
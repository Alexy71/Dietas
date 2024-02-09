<?php
include('../static/php/Cliente.php');
session_start();
?>

<div class="firsti">
    <h2>Mi cuenta</h2>
</div>
<div class="cuenta_creada">
    <p>Esta cuenta fue creada: <b><?php echo $_SESSION['cliente']->getFecha(); ?></b></p>
    <i class="fas fa-check-circle"></i>
</div>

<h4>Conectate por una red social</h4>
<div class="social_network1">
    <div><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i> Conectar facebook</a></div>
    <div><a href="https://twitter.com/home"><i class="fab fa-twitter"></i> Conectar twitter</a></div>
    <div><a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram-square"></i> Conectar instagram </a></div>
</div>

<div class="chance_status">
    <div>
        <i class="far fa-user"></i>
        <p><input type="text" id="correo" value="<?php echo $_SESSION['cliente']->getCorreo(); ?>"></p>
        <button type="button" onclick="javascript:actualizar_correo()">Cambiar correo</button>
    </div>
    <div>
        <i class="fas fa-key"></i>
        <p><input type="text" id="contrasena" value="<?php echo $_SESSION['cliente']->getContrasena(); ?>"></p>
        <button type="button" onclick="javascript:actualizar_password()">Cambiar contraseña</button>
    </div>
    <div>
        <i class="fas fa-power-off"></i>
        <p>Cuenta <b>Activa</b></p>
        <button type="button" onclick="javascript:eliminar_cuenta()">Eliminar Cuenta</button>
    </div>
</div>
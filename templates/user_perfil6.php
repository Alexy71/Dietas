<?php
include('../static/php/Cliente.php');
        session_start();
?>

<div class="firsti">
    <h2>Editar perfil</h2>
    <button><a href="">Ver perfil publico</a></button>
</div>
<label for="">Nombre de usuario</label><br>
<input type="text" id="username" style="width: 180px;" value="<?php
                if (isset($_SESSION['cliente']))
                    echo $_SESSION['cliente']->getNombreCompleto();
                else
                    echo "no hay"; ?>">
<div class="full_name">
    <div>
        <label for="">Nombre</label><br>
        <input type="text" id="nombre" value="<?php echo $_SESSION['cliente']->getNombre();?>"> 
    </div>
    <div>
        <label for="">Apellido</label><br>
        <input type="text" id="apellido" value="<?php echo $_SESSION['cliente']->getApellido();?>"> 
    </div>
    <div>
        <label for="">Celular</label><br>
        <input type="text" id="celular" value="<?php echo $_SESSION['cliente']->getCelular();?>"> 
    </div>
    <div>
        <label for="">Peso</label><br>
        <input type="text" id="peso" value="<?php echo $_SESSION['cliente']->getPeso();?>"> 
    </div>
    <div>
        <label for="">altura</label><br>
        <input type="text" id="altura" value="<?php echo $_SESSION['cliente']->getAltura();?>"> 
    </div>
</div>
<h4>Redes sociales</h4>
<div class="social_network">
    <ul>
        <li><i class="fab fa-facebook"></i><input type="text" placeholder="facebook.com/"></li>
        <li><i class="fab fa-twitter"></i><input type="text" placeholder="twitter.com/"></li>
        <li><i class="fab fa-instagram-square"></i><input type="text" placeholder="instagram.com/"></li>
    </ul>
</div>
<div>
    <button><a href="../static/php/cerrar_sesion.php">Cerrar sesion</a></button>
</div>
<?php
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    setcookie("correo",$correo,time()+3600);
    setcookie("contrasena",$contrasena,time()+3600);
    echo $correo;
?>
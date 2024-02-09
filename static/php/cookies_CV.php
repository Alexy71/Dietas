<?php
    $perfil_profesional=$_POST['perfil_profesional'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    setcookie("perfil_profesional",$perfil_profesional,time()+3600);
    setcookie("correo",$correo,time()+3600);
    setcookie("contrasena",$contrasena,time()+3600);
    
    echo $perfil_profesional;
    echo $correo;
    echo $contrasena;
?>
<?php 
$conexion =new mysqli("localhost", "root", "","bd_com350dietas");
if($conexion->connect_error)
    die ("conexion fallada".$conexion->connect_error);
?>
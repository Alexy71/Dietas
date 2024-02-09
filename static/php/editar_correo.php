<?php
include('conexion.php');
include('Cliente.php');

session_start();
$correo = $_POST['correo'];


$id = $_SESSION['cliente']->getId();

$sql = "update cliente set correo='$correo' where id=$id";
$query = mysqli_query($conexion,$sql);
$_SESSION['cliente']->setCorreo($correo);

echo $sql;
mysqli_close($conexion);
?>
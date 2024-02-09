<?php
include('conexion.php');
include('Cliente.php');

session_start();
$contrasena = $_POST['contrasena'];


$id = $_SESSION['cliente']->getId();

$sql = "update cliente set contrasena='$contrasena' where id=$id";
$query = mysqli_query($conexion,$sql);
$_SESSION['cliente']->setContrasena($contrasena);

echo $sql;
mysqli_close($conexion);
?>
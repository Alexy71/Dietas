<?php
include('conexion.php');
include('Cliente.php');

session_start();
$nombre_completo = $_POST['nombre_completo'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$aux = $_SESSION['cliente']->getNombre();

$sql_id = "select id, apellidos from cliente where nombres='$aux'";
$query_id = mysqli_query($conexion,$sql_id);
$fila = mysqli_fetch_array($query_id);
$id = $fila['id'];

$sql = "update cliente set nombre_completo='$nombre_completo', nombres='$nombres', apellidos='$apellidos' where id=$id";
$_SESSION['cliente']->setNombre($nombres);
$_SESSION['cliente']->setNombreCompleto1($nombre_completo);
$_SESSION['cliente']->setApellido($apellidos);
echo $sql;
$query = mysqli_query($conexion,$sql);

mysqli_close($conexion);
?>
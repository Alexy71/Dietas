<?php
include('conexion.php');
include('CLiente.php');

session_start();
$id = $_SESSION['cliente']->getId();

$sql = "DELETE FROM cliente WHERE id='$id';";
$query = mysqli_query($conexion,$sql);
session_destroy();

mysqli_close($conexion);

?>
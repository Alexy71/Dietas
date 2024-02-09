<?php
include('conexion.php');
include('Pagos.php');

session_start();
$anual = $_POST['anual'];
$id = $_SESSION['plan_pago']->getId();

$sql = "update plan_pago set anual='$anual' where id=$id";
$query = mysqli_query($conexion,$sql);
$_SESSION['plan_pago']->setanual($anual);

echo $sql;
mysqli_close($conexion);
?>
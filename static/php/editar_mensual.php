<?php
include('conexion.php');
include('Pagos.php');

session_start();
$mensual = $_POST['mensual'];
$id = $_SESSION['plan_pago']->getId();

$sql = "update plan_pago set mensual='$mensual' where id=$id";
$query = mysqli_query($conexion,$sql);
$_SESSION['plan_pago']->setmensual($mensual);

echo $sql;
mysqli_close($conexion);
?>
<?php
include('conexion.php');
include('Pagos.php');

session_start();
$quincenal = $_POST['quincenal'];


$id = $_SESSION['plan_pago']->getId();

$sql = "update plan_pago set quincenal='$quincenal' where id=$id";
$query = mysqli_query($conexion,$sql);
$_SESSION['plan_pago']->setquincenal($quincenal);

echo $sql;
//mysqli_close($conexion);
?>
<?php
include('conexion.php');
include('CV.php');

session_start();

$id_profesional = $_SESSION['_cv']->getId();
$tipo_tip = $_POST['tipo_tip'];
$tip = $_POST['tip'];
$titulo = $_POST['titulo'];

$sql = "insert into tips(id_profesional, tipo_tip, tip,titulo)
values('$id_profesional', '$tipo_tip', '$tip', '$titulo')";

$query = mysqli_query($conexion,$sql);
echo $sql;
//mysqli_close($conexion);

?>
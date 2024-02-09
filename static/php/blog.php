<?php
include('conexion.php');
include('Cliente.php');
session_start();

$id_cliente = $_SESSION['cliente']->getId();

$id_tip = $_POST['id_tip'];
$mensaje = $_POST['corto'];

$sql = "select tipo_tip, tip from tips where id='$id_tip'";
$query = mysqli_query($conexion,$sql);
$fila = mysqli_fetch_array($query);

if($mensaje=='T')
    echo substr($fila['tip'],0,200).'...';
else if($mensaje=='F'){
    echo $fila['tip'];
    $sql1 = "INSERT into visitas_tips(id_cliente, id_tip)
    values($id_cliente, $id_tip);";
    $query1 = mysqli_query($conexion,$sql1);
}

//mysqli_close($conexion);
?>
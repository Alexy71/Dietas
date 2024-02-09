<?php 
include('conexion.php');

$id_cliente = $_POST['id_cliente'];

$sql = "INSERT into visitas_pagina(id_cliente) values('$id_cliente')";
$query = mysqli_query($conexion,$sql);

?>
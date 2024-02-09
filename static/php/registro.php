<?php
session_start();
include('conexion.php');
include('Cliente.php');

$correo=$_COOKIE['correo'];
$contrasena=$_COOKIE['contrasena'];

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$sexo = $_POST['sexo'];

//$nombre, $apellido, $celular, $correo, $contrasena, $sexo, $peso, $altura
$_SESSION['cliente']=new Cliente($nombres, $apellidos, $celular, $correo, $contrasena, $sexo, $peso, $altura);

$sql = "insert into cliente(nombres, apellidos, correo, contrasena,celular, peso, altura, sexo)
 values('$nombres', '$apellidos', '$correo', '$contrasena','$celular', '$peso', '$altura', '$sexo')";
$query = mysqli_query($conexion,$sql);

$sql_fecha = "select id, fecha_creacion from cliente where nombres='$nombres'";
$query_fecha = mysqli_query($conexion,$sql_fecha);
$fila = mysqli_fetch_array($query_fecha);

$_SESSION['cliente']->setFecha($fila['fecha_creacion']);
$_SESSION['cliente']->setId($fila['id']);

echo $_SESSION['cliente']->getFecha();;
//mysqli_close($conexion);

?>
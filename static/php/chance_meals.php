<?php
include('conexion.php');
$idcomida = $_GET['idcomida'];

$sql="SELECT id, nombre from alimentos where id_tipoAlimentos = $idcomida";
$query = mysqli_query($conexion,$sql);

while ($fila =  mysqli_fetch_object($query)){
    $rawdata[] = $fila;
}	 
echo json_encode($rawdata);
?>
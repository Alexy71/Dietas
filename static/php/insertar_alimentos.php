<?php
include('conexion.php');
include('Cliente.php');
session_start();

$id_alimentos = $_POST['id_alimentos'];
$cantidad = $_POST['cantidad'];
$id_cliente = $_SESSION['cliente']->getId();


$sql = "INSERT into registro_alimento(cantidad, id_alimentos, id_cliente)
 values('$cantidad', '$id_alimentos', '$id_cliente')";

$query = mysqli_query($conexion,$sql);


$sql1="SELECT id, calorias, grasas, proteinas, carbohidratos, colesterol, nombre
from alimentos where id=$id_alimentos;";

$query1 = mysqli_query($conexion,$sql1);



$sql2="SELECT id,  nombre from alimentos where id=$id_alimentos;";
$query2 = mysqli_query($conexion,$sql2);
$fila12 = mysqli_fetch_array($query2)
?>

<table border="1">
    <tr>
        <th colspan="5">en <?php echo $cantidad ?>gr de <?php echo $fila12['nombre']?> </th>
    </tr>
    <tr>
		<th>calorias</a></th>
		<th>grasas</th>
		<th>proteinas</a></th>
		<th>carhohidratos</a></th>
		<th>colesterol</a></th>
	</tr>
	<?php while ($fila = mysqli_fetch_array($query1)){?>
	<tr>
		<td><?php echo $fila['calorias']*$cantidad ?></td>
		<td><?php echo $fila['grasas']*$cantidad ?></td>
		<td><?php echo $fila['proteinas']*$cantidad ?></td>
		<td><?php echo $fila['carbohidratos']*$cantidad ?></td>
		<td><?php echo $fila['colesterol']*$cantidad ?> </td> 
	</tr>
     <?php
 }
 //mysqli_close($conexion);
 ?>
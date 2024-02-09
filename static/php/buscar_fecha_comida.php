<?php
include('conexion.php');
include('Cliente.php');
session_start();

$fecha = $_POST['fecha'];
$id = $_SESSION['cliente']->getId();

$id_prueba = 5;

$sql="SELECT alimentos.id, alimentos.nombre, calorias, grasas, proteinas, carbohidratos, colesterol,
registro_alimento.fecha_creacion, cantidad
from registro_alimento 
left join alimentos on alimentos.id=registro_alimento.id_alimentos
left join cliente on cliente.id=registro_alimento.id_cliente
where registro_alimento.fecha_creacion = '$fecha' and id_cliente = $id";
$query = mysqli_query($conexion,$sql);

?>
<table border="1">
	<tr>
		<th>comida</th>
		<th>cantidad</th>
		<th>kcal</th>
		<th>grasas</th>
		<th>proteinas</th>
		<th>CHO</th>
		<th>colesterol</th>
	</tr>
	<?php while ($fila = mysqli_fetch_array($query)){?>
	<tr>
		<td><?php echo $fila['nombre'] ?></td>
		<td><?php echo $fila['cantidad'] ?></td>
		<td><?php echo $fila['calorias']*$fila['cantidad'] ?></td>
		<td><?php echo $fila['grasas'] *$fila['cantidad']?></td>
		<td><?php echo $fila['proteinas'] *$fila['cantidad']?></td>
		<td><?php echo $fila['carbohidratos'] *$fila['cantidad']?> </td>
		<td><?php echo $fila['colesterol'] *$fila['cantidad']?> </td> 
	</tr>
     <?php
 }
 ?>

</table>
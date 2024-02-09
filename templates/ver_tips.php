<?php
    include('../static/php/CV.php');
    session_start();
    
    $aux_id = $_SESSION['_cv']->getId();

    include('../static/php/conexion.php');
	$sql="select id ,tipo_tip, tip from tips where id_profesional=$aux_id";    
	$query=mysqli_query ($conexion, $sql);
?>
    <div style="width: 100%; margin: auto; display: flex; justify-content: space-around;">
    <?php while ($fila = mysqli_fetch_array($query)){?>
        <div style="width: 50%; border: 1px solid black; border-radius: 15px; align-content: space-around; margin: 15px;">
            <p style="border-bottom:1px dashed black; text-align: center;">tipo de tip: <?php echo $fila['tipo_tip']=='P'?'privado':'publico' ?></p>
            <p style="text-align: center;"><?php echo $fila['tip'];?></p>
        </div>
    <?php } ?>
    </div>
    
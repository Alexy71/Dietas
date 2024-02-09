<?php
include('../static/php/CV.php');
include('../static/php/conexion.php');
session_start();

$id = $_SESSION['_cv']->getId();
$sql ="SELECT mensual,anual from plan_pago where id_profesional=$id";
$query = mysqli_query($conexion,$sql);
$fila = mysqli_fetch_array($query);
if($fila){?>
<div class="firsti">
    <h2>Tus precios echos</h2>
</div>
<div class="full_name">
    <div>
        <label for="">Mensual</label><br>
        <input type="text" id="mensual" value="<?php echo $fila['mensual']?>"> 
    </div>
    <div>
        <label for="">Anual</label><br>
        <input type="text" id="anual" value="<?php echo $fila['anual']?>"> 
    </div>
</div>
<?php
}else{?>
<div class="firsti">
    <h2>Tus precios</h2>
</div>
<div class="full_name">
    <div>
        <label for="">Mensual</label><br>
        <input type="text" id="mensual"> 
    </div>
    <div>
        <label for="">Anual</label><br>
        <input type="text" id="anual"> 
    </div>
</div>
<div>
    <button type="button" style="margin: auto;" onclick="javascript:registrar_precios()">Guardar Cambios</button>
</div>
<?php
}
?>
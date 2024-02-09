<?php
include('../static/php/Pagos.php');
        session_start();
?>

<div class="full_name">
    <div>
        <label for="">precio</label><br>
        <input type="text" id="precio" value="<?php echo $_SESSION['plan_pago']->getprecio();?>"> 
    </div>
    <div>
        <label for="">duracion</label><br>
        <input type="text" id="duracion" value="<?php echo $_SESSION['plan_pago']->getduracion();?>"> 
    </div>
    <div>
        <label for="">descripcion</label><br>
        <input type="text" id="descripcion" value="<?php echo $_SESSION['plan_pago']->getdescripcion();?>"> 
    </div>
</div>
    <button type="button" style="margin: auto;" onclick="javascript:actualizar_datos_oferta()">Guardar Cambios</button>
</div>

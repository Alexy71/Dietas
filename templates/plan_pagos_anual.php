<?php
include('../static/php/Pagos.php');
session_start();
?>

<div class="chance_status">
    <div>
        <i class="far fa-user"></i>
        <p><input type="text" id="anual" value="<?php echo $_SESSION['plan_pago']->getanual(); ?>"></p>
        <button type="button" onclick="javascript:actualizar_pago_anual()">Actualizar el plan de pagos anual</button>
    </div>
</div>

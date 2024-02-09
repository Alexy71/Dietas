<?php
    $quincenal=$_POST['quincenal'];
    $mensual=$_POST['mensual'];
    $anual=$_POST['anual'];
 
    setcookie("quincenal",$quincenal,time()+3600);
    setcookie("mensual",$mensual,time()+3600);
    setcookie("anual",$anual,time()+3600);

    echo $quincenal;
    echo $mensual;
    echo $anual;
?>
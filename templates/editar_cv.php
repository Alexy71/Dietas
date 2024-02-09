<?php
include('../static/php/CV.php');
        session_start();
?>

<div class="firsti">
    <h2>Editar Curriculum</h2>
    
</div>
<label for="">Nombre de usuario</label><br>
<input type="text" id="username" style="width: 180px;" value="<?php
                if (isset($_SESSION['_cv']))
                    echo $_SESSION['_cv']->getNombreCompleto();
                else
                    echo "no hay"; ?>">
<div class="full_name">
    <div>
        <label for="">perfil Profesional</label><br>
        <input type="text" id="perfil_profesional" value="<?php echo $_SESSION['_cv']->getPerfil_Profesional();?>"> 
    </div>
    <div>
        <label for="">Tiulo</label><br>
        <input type="text" id="titulo" value="<?php echo $_SESSION['_cv']->getTitulo() ?>"> 
    </div>
    <div>
        <label for="">universidad</label><br>
        <input type="text" id="universidad" value="<?php echo $_SESSION['_cv']->getUniversidad() ?>"> 
    </div>
</div>
<div>
    <button type="button" style="margin: auto;" onclick="javascript:actualizar_cv()">Guardar Cambios</button>
</div>
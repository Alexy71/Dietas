<div class="type_tip">
    <h2 style="margin-bottom: 0;">Escriba tip</h2><br>
    <div class="type_content">
        <div class="tip_left">
            <div><label>Titulo: </label><input type="text" id="titulo"></div>
            <textarea name="tip" rows="5" cols="40" id="tip" placeholder="Escribe aquí tu tip"></textarea>
        </div>
        <div class="tip_right">
            <div>
                <label>Publico</label><input type="radio" value="P" name="type_tip">
            </div>
            <div>
                <label>Privado</label><input type="radio" value="A" name="type_tip">
            </div><br>
            <div style="display: flex; justify-content: space-between;" class="buttons">
                <button type="button" onclick="javascript:registro_tip()">Registrar</button>
                <button type="button"><a href="CV3.php">Volver</a></button>
            </div>
        </div>
    </div>
</div>
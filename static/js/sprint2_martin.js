//registro de tip, recojo y enviado.
function registro_tip() {
    var tip = document.getElementById('tip').value;
    var aux_tipo_tip = document.getElementsByName('type_tip')
    var tipo_tip
    
    for (let index = 0; index < aux_tipo_tip.length; index++) {
        if(aux_tipo_tip[index].checked)
            tipo_tip = aux_tipo_tip[index].value 
    }
    
    var ajax = new XMLHttpRequest()
    ajax.open("post", "../static/php/insertar_tips.php", true);
    var cadena = "tipo_tip="+tipo_tip+"&tip="+tip;
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}
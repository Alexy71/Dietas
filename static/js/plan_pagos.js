function cargarContenido_Inicio(abrir) {
    fetch(abrir, {
        method: 'get'
    }).then(function(response) {
        return response.text();
    }).then(function(text) {
        var quincenal = document.getElementById('quincenal').value
        var mensual = document.getElementById('mensual').value
        var anual = document.getElementById('anual').value
        convert_cookie(quincenal, mensual, anual);
        document.getElementById('contenido').innerHTML = text;
        console.log(text);
    }).catch(function(err) {
        alert('error');
    });
}

function convert_cookie(quincenal, mensual, anual) {
    formData = new FormData();
    formData.append("quincenal", quincenal);
    formData.append("mensual", mensual);
    formData.append("anual", anual);

    fetch('../static/php/cookies_Pago.php', {
        method: 'post',
        body: formData
    }).then(function(response) {
        return response.text();
    }).then(function(text) {}).catch(function(err) {
        alert('error');
    });
}

function get_datos() {
    var precio = document.getElementById('precio').value
    var duracion = document.getElementById('duracion').value
    var descripcion = document.getElementById('descripcion').value

    formData = new FormData();
    formData.append("precio", precio);
    formData.append("duracion", duracion);
    formData.append("descripcion", descripcion);

    fetch('../static/php/Pagos_registro.php', {
        method: 'post',
        body: formData
    }).then(function(response) {
        return response.text();
    }).then(function(text) {
        //alert(text);
        //document.innerHTML = './plan_pagos.php';
    }).catch(function(err) {
        //alert('error');
    });
}

function cargarContenido(abrir) {
    var contenedor;
    contenedor = document.getElementById('center');
    var ajax = new XMLHttpRequest()
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            console.log(ajax.responseText);
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send(null);
}

function actualizar_pago_quincenal() {
    var quincenal = document.getElementById('quincenal').value;
    var ajax = new XMLHttpRequest()
    ajax.open("post", "../static/php/editar_quincenal.php", true);
    var cadena = "quincenal=" + quincenal;
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            //alert(ajax.responseText);
            location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}


function actualizar_pago_mensual() {
    var mensual = document.getElementById('mensual').value;

    console.log(mensual)

    var ajax = new XMLHttpRequest()
    ajax.open("post", "../static/php/editar_mensual.php", true);
    var cadena = "mensual=" + mensual;
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            console.log(ajax.responseText)
            location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}


function actualizar_pago_anual() {
    var anual = document.getElementById('anual').value;

    console.log(anual)

    var ajax = new XMLHttpRequest()
    ajax.open("post", "../static/php/editar_anual.php", true);
    var cadena = "anual=" + anual;
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            console.log(ajax.responseText)
            location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}

function actualizar_datos_oferta() {
    var precio = document.getElementById('precio').value;
    var duracion = document.getElementById('duracion').value;
    var descripcion = document.getElementById('descripcion').value;

    console.log(precio)
    console.log(duracion)
    console.log(descripcion)

    var ajax = new XMLHttpRequest()
    ajax.open("post", "../static/php/editar_oferta.php", true);
    var cadena = "precio=" + precio + "&duracion=" + duracion + "&descripcion=" + descripcion;
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            console.log(ajax.responseText)
            location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}
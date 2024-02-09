function cargarContenido(abrir) {
    fetch(abrir, {
        method: 'get'
    }).then(function(response) {
        return response.text();
    }).then(function(text) {
        var correo = document.getElementById('correo').value
        var contrasena = document.getElementById('contrasena').value
        convert_cookie(correo, contrasena);
        document.getElementById('contenido').innerHTML = text;
        //console.log(text);
    }).catch(function(err) {
        alert('error');
    });
}

function get_datos() {
    var nombres = document.getElementById('nombres').value
    var apellidos = document.getElementById('apellidos').value
    var celular = document.getElementById('celular').value
    var peso = document.getElementById('peso').value
    var altura = document.getElementById('altura').value
    var sexo = document.getElementById('sexo').value

    formData = new FormData();
    formData.append("nombres", nombres);
    formData.append("apellidos", apellidos);
    formData.append("celular", celular);
    formData.append("peso", peso);
    formData.append("altura", altura);
    formData.append("sexo", sexo);

    fetch('../static/php/registro.php', {
        method: 'post',
        body: formData
    }).then(function(response) {
        return response.text();
    }).then(function(text) {
        //window.location = "../user_perfil.html";
    }).catch(function(err) {
        //alert('error');
    });
}

function convert_cookie(correo, contrasena) {
    formData = new FormData();
    formData.append("correo", correo);
    formData.append("contrasena", contrasena);

    fetch('../static/php/cookies.php', {
        method: 'post',
        body: formData
    }).then(function(response) {
        return response.text();
    }).then(function(text) {}).catch(function(err) {
        alert('error');
    });
}

//inicio de sesion
function iniciarSesion() {
    var correo = document.getElementById('correo').value
    var contrasena = document.getElementById('contrasena').value

    formData = new FormData();
    formData.append("correo", correo);
    formData.append("contrasena", contrasena);

    fetch('../static/php/iniciar_sesion_cliente.php', {
        method: 'post',
        body: formData
    }).then(function(response) {
        return response.text();
    }).then(function(text) {
        contar_visitas(text)
        window.location="../templates/user_perfil.php"
    }).catch(function(err) {
        //alert('error');
    });
}

function contar_visitas(id) {
    var ajax = new XMLHttpRequest()
    ajax.open("post", "../static/php/insertar_vistas_pagina.php", true);
    var cadena = "id_cliente="+id;
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            //contenedor.innerHTML = ajax.responseText
            //alert(ajax.responseText);
            //location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}   
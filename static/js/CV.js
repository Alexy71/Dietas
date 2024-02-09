function cargarContenido_Inicio(abrir) {
    fetch(abrir, {
        method: 'get'
    }).then(function(response) {
        return response.text();
    }).then(function(text) {
        var perfil_profesional = document.getElementById('perfil_profesional').value
        var correo = document.getElementById('correo').value
        var contrasena = document.getElementById('contrasena').value
        convert_cookie(perfil_profesional, correo, contrasena);
        document.getElementById('contenido').innerHTML = text;
        //console.log(text);
    }).catch(function(err) {
        alert('error');
    });
}

function convert_cookie(perfil_profesional, correo_electronico, contrasena) {
    formData = new FormData();
    formData.append("perfil_profesional", perfil_profesional);
    formData.append("correo", correo_electronico);
    formData.append("contrasena", contrasena);

    fetch('../static/php/cookies_CV.php', {
        method: 'post',
        body: formData
    }).then(function(response) {
        return response.text();
    }).then(function(text) {}).catch(function(err) {
        alert('error');
    });
}

function iniciarSesion() {
    var correo = document.getElementById('correo').value
    var contrasena = document.getElementById('contrasena').value

    formData = new FormData();
    formData.append("correo", correo);
    formData.append("contrasena", contrasena);

    fetch('../static/php/iniciar_sesion_profesional.php', {
        method: 'post',
        body: formData
    }).then(function(response) {
        return response.text();
    }).then(function(text) {
        window.location = "../templates/CV3.php"
    }).catch(function(err) {});
}

function get_datos() {
    var nombre = document.getElementById('nombre').value
    var apellido = document.getElementById('apellido').value
    var universidad = document.getElementById('universidad').value
    var titulo = document.getElementById('titulo').value
    var ci = document.getElementById('ci').value
    var edad = document.getElementById('edad').value

    formData = new FormData();
    formData.append("nombre", nombre);
    formData.append("apellido", apellido);
    formData.append("universidad", universidad);
    formData.append("titulo", titulo);
    formData.append("ci", ci);
    formData.append("edad", edad);

    fetch('../static/php/registro_CV.php', {
        method: 'post',
        body: formData
    }).then(function(response) {
        return response.text();
    }).then(function(text) {
        document.innerHTML = './CV3.php';
    }).catch(function(err) {});
}

function cargarContenido(abrir) {
    var contenedor;
    contenedor = document.getElementById('center');
    var ajax = new XMLHttpRequest()
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send(null);
}

function actualizar_datos_personales() {
    var nombre_completo = document.getElementById('username').value;
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var universidad = document.getElementById('universidad').value;
    var titulo = document.getElementById('titulo').value;
    var ci = document.getElementById('ci').value;
    var edad = document.getElementById('edad').value;

    var ajax = new XMLHttpRequest()
    ajax.open("post", "../static/php/editar_datos_personales_cv.php", true);
    var cadena = "nombre_completo=" + nombre_completo + "&nombre=" + nombre + "&apellido=" + apellido + "&universidad=" + universidad + "&titulo=" + titulo + "&ci=" + ci + "&edad=" + edad +
        "&correo_electronico=";
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            //console.log(ajax.responseText)
            location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}

function actualizar_cv() {
    var perfil_profesional = document.getElementById('perfil_profesional').value;
    var correo_electronico = document.getElementById('correo_electronico').value;
    var contrasena = document.getElementById('contrasena').value;

    var ajax = new XMLHttpRequest()
    ajax.open("post", "../static/php/editar_datos_cv.php", true);
    var cadena = "perfil_profesional=" + perfil_profesional + "&correo_electronico=" + correo_electronico + "&contrasena=" + contrasena;
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}

function registro_tip() {
    var tip = document.getElementById('tip').value;
    var aux_tipo_tip = document.getElementsByName('type_tip')
    var titulo = document.getElementById('titulo').value
    var tipo_tip

    for (let index = 0; index < aux_tipo_tip.length; index++) {
        if (aux_tipo_tip[index].checked)
            tipo_tip = aux_tipo_tip[index].value
    }

    var ajax = new XMLHttpRequest()
    ajax.open("post", "../static/php/insertar_tips.php", true);
    var cadena = "tipo_tip=" + tipo_tip + "&tip=" + tip + "&titulo=" + titulo;
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            alert('registro echo')
            location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}


function registrar_precios() {
    var mes = document.getElementById('mensual').value
    var ano = document.getElementById('anual').value

    var ajax = new XMLHttpRequest()
    ajax.open("post", "../static/php/insertar_precios.php", true);
    var cadena = "mensual=" + mes + "&anual=" + ano;
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            console.log(ajax.responseText)
                //location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}
const persona = {
    nombre: 'Marina',
    apellido: 'Laguna',
    dni: '05938561',
    correo: 'marinalaguna2004@gmail.com',
    pwd: 'admin123',
    fechaNacimiento: ''
}

function acceder(){
    var email = document.querySelector('input[type = "email"]').value
    var password = document.querySelector('input[type = "password"]').value
    var msg = ''
    msg = validarLogin()

    if (msg === ''){
        if (email == persona.correo && password == persona.pwd){
            window.location.href = 'pagina.html'
        }else{
            msg += 'Correo electrónico o contraseña incorrecto.'
        }    
    }else{
        alert(msg)
    }
}

function guardar(){
    var validado = validarDatos()

    if (validado === ''){
        persona.nombre = document.getElementById('nombre').value
        persona.apellido = document.getElementById('apellido1').value 
        persona.apellido2 = document.getElementById('apellido2').value 
        persona.dni = document.getElementById('dni').value
        persona.fechaNacimiento = document.getElementById('fechaNacimiento').value

        alert('Datos guardados correctamente.')
    }else{
        alert(validado)
    }
}

function limpiar(){
    document.getElementById('nombre').value = ''
    document.getElementById('apellido1').value = ''
    document.getElementById('apellido2').value = ''
    document.getElementById('dni').value = ''
    document.getElementById('fechaNacimiento').value = ''
}

function validarLogin(){
    var correo = document.querySelector('input[type="email"]').value
    var contrasena = document.querySelector('input[type="password"]').value
    var msg = validarEmail()

    if (msg === ''){
        if (correo.trim() == '' || contrasena.trim() == ''){
            msg += 'El correo y la contraseña no pueden estar vacíos.'
            return msg;
        }

        if (contrasena.length < 8){
            msg += 'La contraseña debe ser de 8 caracteres como mínimo.'
            return msg;
        }
    }

    return msg;
}

function validarEmail(){
    var email = document.querySelector('input[type="email"]').value
    var msg = ''

    if (!email.includes('@')){
        msg += 'No incluye @'
    }

    if (email.split('@').length > 2) {
        msg += 'No puede tener más de un @';
    }

    if (email.charAt(0) == '@'){
        msg += '\nNo puede empezar por @'
    }

    for (let i = email.length - 3; i < email.length; i++){
        if (email.charAt(i) == '@'){
            msg += '\nNo puede tener @ en las tres últimas letras'
        }
    }

    return msg;
}

function validarDatos(){
    var nombre = document.getElementById('nombre').value
    var apellido1 = document.getElementById('apellido1').value
    var apellido2 = document.getElementById('apellido2').value
    var dni = document.getElementById('dni').value
    var fechaNacimiento = document.getElementById('fechaNacimiento').value
    var msg = ''
    
    if (nombre.trim().length < 3 || nombre.trim().length > 30){
        msg += 'El nombre debe tener entre 3 y 30 caracteres.\n'
    }

    if (apellido1.trim().length < 2 || apellido1.trim().length > 30){
        msg += 'El primer apellido debe tener entre 2 y 30 caracteres.\n'
    }

    if (apellido2.trim().length < 2 || apellido2.trim().length > 30){
        msg += 'El segundo apellido debe tener entre 2 y 30 caracteres.\n'
    }

    if (!/^(\d{2}\/\d{2}\/\d{4})$/.test(fechaNacimiento)){
        msg += 'El formato de la fecha de nacimiento debe ser dd/mm/AAAA.\n'
    }

    if (!/^\d{8}[A-Z]$/.test(dni)){
        msg += 'El DNI no es válido. Debe tener 8 números seguidos de una letra.\n'
    } else {
        var letraDNI = dni.charAt(dni.length-1).toUpperCase();
        var numerosDNI = parseInt(dni.substring(0, dni.length - 1));
        var letraCorrecta = 'TRWAGMYFPDXBNJZSQVHLCKE'.charAt(numerosDNI % 23);

        if (letraDNI !== letraCorrecta){
            msg += 'El DNI introducido no es válido.\n';
        }
    }
    return msg;
}
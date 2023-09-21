const persona = {
    nombre: 'Marina',
    apellido: 'Laguna',
    dni: '05938561',
    correo: 'marinalaguna2004@gmail.com',
    pwd: 'admin123',
    asignaturas: ['Servidor', 'Cliente']
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

function limpiar(){
    document.getElementById('nombre').value = ''
    document.getElementById('apellido1').value = ''
    document.getElementById('apellido2').value = ''
    document.getElementById('dni').value = ''
}

function guardar(){
    var validado = validarDatos()

    if (validado){
        // Guardar los datos en el objeto persona
        persona.nombre = document.getElementById('nombre').value
        persona.apellido = document.getElementById('apellido1').value 
        persona.apellido2 = document.getElementById('apellido2').value 
        persona.dni = document.getElementById('dni').value

        alert('Datos guardados correctamente.')
    }
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
    var msg = ''

    if (nombre.trim() == '' || apellido1.trim() == '' || apellido2.trim() == '' || dni.trim() == ''){
        msg += 'Todos los campos son obligatorios.\n'
    }

    if (!/^\d{8}[A-Z]$/.test(dni)){
        msg += 'El DNI no es válido. Debe tener 8 números seguidos de una letra.'
    }

    if (msg !== ''){
        alert(msg)
        return false;
    }

    return true;
}
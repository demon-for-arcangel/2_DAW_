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

    if (msg = ''){
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
    document.getElementById('apellido').value = ''
}

function guardar(){
    //var validado = 
    if (validado){
        //Guardar los datos en el objeto persona
        persona.nombre = document.getElementById('nombre').value
        persona.apellido = document.getElementById('apellido').value 
        persona.dni = document.getElementById('dni').value
        persona.asignaturas = document.getElementById('asignaturas').value

        alert('Datos guardados correctamente.')
    }
}

function validarLogin(){
    var correo = document.getElementById('correo').value
    var contrasena = document.getElementById('constrasena').value
    var msg = ''
    msg = validarEmail()

    if (msg = ''){
        if (correo.trim() == '' || contrasena.trim() == ''){
            msg += 'El correo y la contraseña no pueden estar vacíos.'
            return false
        }

        if (contrasena.length < 8){
            msg += 'La contraseña debe ser de 8 carácteres como mínimo.'
            return false
        }
    }
    window.location.href = 'pagina.html'
    return false
}

function validarEmail(){
    var email = document.getElementById('user').value
    var msg = ''
    //user@gmail.com
    email.charAt(0)
    var dd = email.split('@')
    //var dd = email.split('@') --> dd = ['u', 's', 'e', 'r', '@', 'g', 'm', 'a', 'i', 'l', '.', 'c', 'o', 'm']
    //el correo debe incluir tan solo un @
    if (!email.includes('@')){
        msg += 'No incluye @'
    }

    //el correo no puede empezar por el @
    if (email.charAt(0) == '@'){
        msg += '\nNo puede empezar por @'
    }

    //el correo no puede tener @ en las tres últimas letras
    for (let i = email.length - 3; i < email.length - 1; i++){
        if (email.charAt(i) == '@'){
            msg += '\nNo puede tener @ en las tres ultimas letras'
        }
    }
}
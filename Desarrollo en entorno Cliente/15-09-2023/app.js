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

    if (email == persona.correo && password == persona.pwd){
        window.location.href = 'pagina.html'
    }else{
        alert('Correo electrónico o contraseña incorrecto.')
    }
}

function guardar(){
    var validado = false
    validado = validar()
}

function limpiar(){
    document.getElementById('nombre').value = ''
    document.getElementById('apellido').value = ''
}
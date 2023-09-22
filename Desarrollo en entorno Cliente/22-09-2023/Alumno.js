/* 
Crear una clase alumno y tutor
Alumno --> Nombre,
Tutor --> nombre, dni (va enlazado en el constructor)
Asignatura --> nombre, nota
*/

class Alumno{
    constructor(nombre, asignatura = []){
        this.nombre = nombre
    }
}

var asignatura = new Asignatura()

class Tutor{
    constructor(nombre, dni){
        this.nombre = nombre 
        this.dni = dni
    }
}

class Asignatura{
    constructor(nombre, nota){
        this.nombre = nombre 
        this.nota = nota
    }
}
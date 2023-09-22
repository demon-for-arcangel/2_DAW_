/* 
clase banco con dos variables nombre de la persona y saldo.
La clase tiene que tener dos métodos unos para ingresar dinero y otro para retirar dinero.
*/
class Banco{
    constructor(nombre, saldo){
        this.nombre = nombre
        this.saldo = saldo
    }

    ingresarDinero = function(cantidad){
        this.saldo += cantidad
    }
    /*
    ingresarDinero (cantidad){
        this.saldo += cantidad
    }
    */

    retirarDinero = function(cantidad){
        this.saldo -= cantidad
    }
}
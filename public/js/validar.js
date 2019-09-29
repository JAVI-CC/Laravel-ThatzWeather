//Función para que solo se pueda introducir numeros en los input de tipo number.
function validar_number(evt) {

    /*Variable que contiene el campo input de tipo number.*/
    var ch = String.fromCharCode(evt.which);

    /*Condición de que si el usuario inserta un caracter que no sea un numero del 0 hasta el 9 no 
    se le dejara introducir-lo en el campo input de tipo number.*/
    if (!(/[0-9]/.test(ch))) {
        evt.preventDefault();
    }

}
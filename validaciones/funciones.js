//Se utiliza para que el campo de texto solo acepte numeros
function SoloNumeros(evt) {
    if (windows.evt) { //asignamos el valor de la tecla a keynum
        keynum = evt.keyCode;  // IE
    }
    else {
        keynum = evt.which; //FF
    }
    // comprobamos si se encuentra en el rango numerico y que teclas no recibira
    if ((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6) {
        return true;
    }
    else {
        return false;
    }
}

//Se utiliza para que el campo de texto solo acepte letras 
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    especiales = [8, 37, 39, 46, 6]; //Es la validacion del keycodes, que teclas recibe en el campo de texto
    techa_especial = false;
    for(var i in especiales){
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }
    if(letras.indexOf(tecla) == -1 && !tecla_especial){
        alert('Tecla no aceptada');
        return false;
    }

}

export function iva(cantidad){
//Export es para poder exportarlo a otros ficheros, es decir utilizar este modulo

    let iva = cantidad*0.21;

    return iva;

}

export function irpf(cantidad){

    let irpf = cantidad*0.15;

    return irpf

}

export function calculo_total (cantidad) {

    let calculo_total=cantidad-irpf(cantidad)+iva(cantidad);

    return calculo_total;

}

// RECORDAR QUE SI NO PONEMOS EL RETURN NO NOS VA A DEVOLVER NADA
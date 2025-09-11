function calculo_iva(cantidad){

    let iva = cantidad*0.21;

    return iva;

}

function calculo_irpf(cantidad){

    let iva = cantidad*0.15;

    return iva;

}

// Si quisieramos exportar lo hariamos de la siguiente manera: 

// export {calculo_iva};
// export {calculo_irpf};

// Si quisieramos exportar ya con un alias establecido lo hariamos de la siguiente manera, la palabra as seguido del nombre del alias y quedaria asi: 

// export {calculo_iva as iva};
// export {calculo_irpf as irpf};

// Esto de la manera abreviada de arriba:

export{

    calculo_iva as iva, 
    calculo_irpf as irpf

};

// OTRA OPCION MUY TOP ES IMPORTAR DE UN CONJUNTO DE ARCHIVOS, EN VEZ DE TENER QUE IR IMPORTANDO UNO POR UNO, ES DECIR, TENGO 3 O 4 ARCHIVOS DE MODULOS, EL 1 EL 2 EL 3 Y EL 4 Y EN VEZ DE 
// IR UTILIZANDO IMPORTS CON ALIAS PARA TODOS LOS ARCHIVO, LOS UNIFICAMOS EN UN SOLO ARCHIVO QUE POR EJEMPLO SE PUEDE LLAMAR TODOS_LOS_MODULOS.JS Y ESTO ES LO QUE HABRIA QUE PONER EN ESE ARCHIVO:

export * from "./1.js";
export * from "./2.js";
export * from "./3.js";
export * from "./4.js";

// OJOOOOO SOLO SE PUEDE IMPORTAR UN MODULO POR ARCHIVO, POR ESO TIENE QUE TENER VARIAS LINEAS NUESTRO ARCHIVO TODOS_LOS_MODULOS.JS
//Prueba de commits 2
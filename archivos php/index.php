
<h1>

    <?= "Mi primera app" ?>

</h1>
<?php

    echo"Holamundo";

    $name = "Miguel";

    $edad = 30;

    $verdadero = true;

    // las variables en php no pueden comenzar con numero ni ponerle otro dolar al final o en medio
    //php es de tipado dinamico (no hace falta decirle que tipo de variable es), debil y escalable ademas las variables pueden cambiar a lo largo del programa
    //Es muy importante saber que php tiene tipado debil porque va a transformar los valores de las variables ejemplo:

    $numero = 30 + "1";
    echo $numero; //Esto va a dar 31 porque va a transformar el string a numero
    echo "holamundo2"; //Prueba

?>

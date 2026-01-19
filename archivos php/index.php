
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

    //Si quisieramos pasar a texto los numeros lo hariamos de la siguiente forma, ya que el + no concatena como en js

    $nuevoNumero= $numero . 1;
    echo $nuevoNumero;

    //Ademas php es gradual, donde podemos especificar los tipos de las variables, esto no puede aplicarse en cualquier sitio

    //METODO VAR_DUMP

    //El metodo var_dump te va a decir el tipo de dato de una variable impreso por pantalla ejemplo: 

    var_dump($name);
    var_dump($edad);
    var_dump($verdadero);

    //Tambien va a poner los errores impresos por pantalla por eso hay que tener cuidado de no imprimir los errores en una pagina web

    //METODO GETTYPE

    //El metodo gettype solo da el tipo de dato que tenemos en una variable y en este metodo tenemos que usar el echo antes para que lo imprima ejemplo: 

    echo gettype($name);

    //Tambien podemos preguntar directamente si una variable es de un tipo en concreto con is_ seguido del tipo ejemplo:

    echo is_string($name); //Esto dara true y por lo tanto imrpimira 1
    echo is_int($name);    //Esto dara false y por lo tanto no imprimira nada, estara vacio
    echo is_bool($name);   //Esto dara false y por lo tanto no imprimira nada, estara vacio

    //TYPECASTING

    //Si quiseramos transformar variables de un tipo en otro lo hariamos con esto ejemplo: 

    echo "<br>";  //Para hacer saltos de linea uamos el br asi
    
    $nuevoNumero = (bool) 44;
    echo $nuevoNumero; //Esto devolvera 1 porque es un booleano de tipo true, si fuese 0 daria false

    echo "<br>";

    //Otra forma de concatenar es con el punto y el = y quedaria asi:

    $output = "Hola $name";
    $output .= ", tienes $edad años";
    echo $output;

    //El punto y coma es IMPORTANTISIMO a la hora de compilar porque elimina todos los saltos de linea, si no lee punto y coma se le hira la pinza
    //Existen dos tipos de constantes, las globales que las podemos utilizar en cualquier parte del codigo y las locales 
    //En las globales no se usa el simbolo del dolar y NO SE PUEDEN SOBREESCRIBIR y no funcionan en tiempo de ejecucion, es decir no se pueden usar en bucles porque estan en tiempo
    //de ejecucion, es decir son estaticas

    const NOMBRE = "Sara";
    echo "<br>";

    //BUCLE IF

    if ($edad > 18){
        echo "<h2>Eres viejo</h2>";
    }
    else{
        echo "<h2>Eres joven</h2>";
    }

    //min 46

?>

<?php include 'includes/header.php';
                              
// While
/* Los bucles while son el tipo más sencillo de bucle en PHP. Se comportan igual que su contrapartida en C */
/* El significado de una sentencia while es simple. Le dice a PHP que ejecute las sentencias anidadas, tanto como la expresión while se evalúe como true. El valor de la expresión es verificado cada vez al inicio del bucle, por lo que incluso si este valor cambia durante la ejecución de las sentencias anidadas, la ejecución no se detendrá hasta el final de la iteración (cada vez que PHP ejecuta las sentencias contenidas en el bucle es una iteración). A veces, si la expresión while se evalúa como false desde el principio, las sentencias anidadas no se ejecutarán ni siquiera una vez. */

$i = 0; // Inicializador

while($i < 10) {

    echo $i . "<br>";

    $i++; // Incremento
}

echo "<br>";

// Do While
/* Los bucles do-while son muy similares a los bucles while, excepto que la expresión verdadera es verificada al final de cada iteración en lugar que al principio. La diferencia principal con los bucles while es que está garantizado que corra la primera iteración de un bucle do-while (la expresión verdadera sólo es verificada al final de la iteración), mientras que no necesariamente va a correr con un bucle while regular (la expresión verdadera es verificada al principio de cada iteración, si se evalúa como false justo desde el comienzo, la ejecución del bucle terminaría inmediatamente). */
$i = 100;

do {
    echo $i . "<br>";

    $i++;
} while($i < 10);



/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 Imprimir FIZZ BUZZ
 */

// For Loop.

/* Los bucles for son los más complejos en PHP. Se comportan como sus homólogos en C */
 for($i = 1; $i < 100; $i++ ):
     if($i % 3 === 0 && $i % 5 === 0):
         echo $i . " - FIZZ BUZZ <br/>";
     elseif($i % 3 === 0):
         echo $i . " - Fizz <br/>";
     elseif($i % 5 === 0 ):
         echo $i . " - Buzz <br/>";
     else:
         echo $i . "<br/>";
     endif;
 endfor;


// For Each
/* El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada */
$clientes = array('Pedro', 'Juan', 'Karen');

foreach( $clientes as $cliente ):
    echo $cliente . '<br/>';
endforeach;

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach( $cliente as $key => $valor ):
    echo $key . " - " . $valor . '<br/>';
endforeach;



include 'includes/footer.php';
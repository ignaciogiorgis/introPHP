<?php include 'includes/header.php';
/* Un operador es algo que toma uno más valores (o expresiones, en la jerga de programación) y produce otro valor (de modo que la construcción en si misma se convierte en una expresión). */

/* Los operadores se pueden agrupar de acuerdo con el número de valores que toman. Los operadores unarios toman sólo un valor, por ejemplo ! (el operador lógico de negación) o ++ (el operador de incremento). Los operadores binarios toman dos valores, como los familiares operadores aritméticos + (suma) y - (resta), y la mayoría de los operadores de PHP entran en esta categoría. Finalmente, hay sólo un operador ternario, ? :, el cual toma tres valores; usualmente a este se le refiere simplemente como "el operador ternario" (aunque podría tal vez llamarse más correctamente como el operador condicional). */

$numero1 = 20;
$numero2 = 10;

// Sumar
echo $numero1 + $numero2;

// Resta
echo $numero1 - $numero2;

echo "<br>";

// Multiplicar
echo $numero1 * $numero2;

// Dividir
echo $numero1 / $numero2;

// Multiplicar cierta cantidad de veces
echo 2 ** 3;


include 'includes/footer.php';
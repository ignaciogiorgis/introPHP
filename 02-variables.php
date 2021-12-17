<?php include 'includes/header.php';

/* En PHP las variables se representan con un signo de dólar seguido por el nombre de la variable. El nombre de la variable es sensible a minúsculas y mayúsculas. */
$nombre = "Juan";

/* No es necesario inicializar variables en PHP, sin embargo, es una muy buena práctica. Las variables no inicializadas tienen un valor predeterminado de acuerdo a su tipo dependiendo del contexto en el que son usadas - las booleanas se asumen como false, los enteros y flotantes como cero, las cadenas (p.ej. usadas en echo) se establecen como una cadena vacía y los arrays se convierten en un array vacío */
$nombre = "Juan 2";

echo $nombre;
var_dump($nombre);
/* define — Define una constante con nombre */

define('constante', "Este es el valor de la constante");
echo constante;

const constante2 = "Hola 2";
echo constante2;

$nombreCliente = "Pedro";
$nombre_cliente = "Pedro";

include 'includes/footer.php';
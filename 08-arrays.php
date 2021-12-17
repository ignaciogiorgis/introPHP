<?php include 'includes/header.php';

/* Un array en PHP es en realidad un mapa ordenado. Un mapa es un tipo de datos que asocia valores con claves. Este tipo se optimiza para varios usos diferentes; se puede emplear como un array, lista (vector), tabla asociativa (tabla hash - una implementación de un mapa), diccionario, colección, pila, cola, y posiblemente más. Ya que los valores de un array pueden ser otros arrays, también son posibles árboles y arrays multidimensionales. */

$carrito = ['Tablet', 'Television', 'Computadora'];

// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
echo $carrito[1];

// Añade un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo Producto...';

// Añadir un elemento nuevo al final...
array_push($carrito, 'Audifonos');

// Añadir al inicio
array_unshift($carrito, 'Smartwatch');



// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";


$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];


include 'includes/footer.php';
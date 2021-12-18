<?php include 'includes/header.php';

$autenticado = true;
$admin = false;
/* El constructor if es una de las características más importantes de muchos lenguajes, incluido PHP. Permite la ejecución condicional de fragmentos de código. PHP dispone de una estructura if que es similar a la de C: */
if($autenticado && $admin ) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesión";
}

// If anidados...
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Regular'
    ]
];

echo "<br>";
/* Las sentencias if pueden anidarse dentro de otra sentencias if infinitamente, lo cual provee completa flexibilidad para la ejecución condicional de diferentes partes del programa. */
if( !empty($cliente) ) {
    echo "El Arreglo de cliente no esta vacio";

    if($cliente['saldo'] > 0) {
        echo "El Cliente tiene saldo disponible";
    } else {
        echo "No hay saldo";
    }
}

echo "<br>";
/* elseif, como su nombre lo sugiere, es una combinación de if y else. Del mismo modo que else, extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como false. Sin embargo, a diferencia de else, esa expresión alternativa sólo se ejecutará si la expresión condicional del elseif se evalúa como true. */
// else if
if($cliente['saldo'] > 0 ) {
    echo "El Cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "El Cliente es Premium";
} else {
    echo "No hay cliente definido o no tiene saldo o no es premium";
}

// Switch.
/* La sentencia switch es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch. */
echo "<br>";

$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        echo 'Emmm...';
        break;
    default:
        echo "Algún lenguaje que no se cual es";
        break;
}


include 'includes/footer.php';
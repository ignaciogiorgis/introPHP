<?php 
declare(strict_types=1);
include 'includes/header.php';
/* Los nombres de las funciones siguen las mismas reglas que las demás etiquetas de PHP. Un nombre de función válido comienza con una letra o guión bajo, seguido de cualquier número de letras, números o guiones bajos. */


function sumar(int $numero1 = 0, array $numero2 ) {
    echo $numero1 + $numero2;
}

sumar(10, []);


include 'includes/footer.php';
<?php include 'includes/header.php';
/* PHP soporta operadores estilo C de pre- y post-incremento y decremento. */
/* Los operadores de incremento/decremento solamente afectan a números y strings. Los arrays, objects y resources no se ven afectados. Decrementar valores null tampoco tiene efecto, pero incrementarlos entonces resulta en 1. */

$numero1 = 30;
echo ++$numero1;

$numero1 += 5;
echo $numero1;

$numero2 = 30;
echo --$numero2;


include 'includes/footer.php';
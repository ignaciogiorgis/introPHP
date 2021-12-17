<!-- Que es php -->
<!-- PHP acrónimo recursivo de PHP: Hypertext Preprocessor es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML. -->



<!-- La sentencia include incluye y evalúa el archivo especificado. -->
<!-- Los archivos son incluidos con base en la ruta de acceso dada o, si ninguna es dada, el include_path especificado. Si el archivo no se encuentra en el include_path, include finalmente verificará en el propio directorio del script que hace el llamado y en el directorio de trabajo actual, antes de fallar. El constructor include emitirá una advertencia si no puede encontrar un archivo, éste es un comportamiento diferente al de require, el cual emitirá un error fatal.. -->
<?php include 'includes/header.php'; ?>

<!-- Cuando PHP analiza un fichero, busca las etiquetas de apertura y cierre, que son <?php ?>, y que indican a PHP dónde empezar y finalizar la interpretación del código. Este mecanismo permite embeber a PHP en todo tipo de documentos, ya que todo lo que esté fuera de las etiquetas de apertura y cierre de PHP será ignorado por el analizador. -->

<?php echo "hola Mundo"; ?>

<br>

<?php echo("Hola Mundo");


print("Hola Mundo");

print "Hola Mundo";

print_r("Hola Mundo");

var_dump("Hola Mundo");



include 'includes/footer.php'; ?>
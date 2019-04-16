<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios de Operadores</title>
</head>
<body>
<h1>Ejercicio 1</h1>
<?php
echo 'Calcula el resultado de 32+3 y 3(2+3). Escribe el procedimiento que empleaste en la sección de discusiones.';
echo '<br>';
echo '<br>';

$suma  = 32+3;
$multi = 3*(2+3);
echo $suma;
echo '<br>';
echo $multi;
echo '<br>';
echo '<br>';
?>
<h1>Ejercicio 2</h1>
<?php   
echo 'Tomando en cuenta que tenemos una variable llamada $valor, escribe en la sección de discusiones ¿Cómo sería un condicional para las siguientes opciones?';
echo '<br>';
$valor = 11;
if ($valor > 5 && $valor < 10 ) {
    echo 'a';
}
echo '<br>';
if ($valor >= 0 && $valor < 20 ) {
    echo 'b';
}
echo '<br>';
if ($valor ==="10") {
    echo 'c';
}
echo '<br>';
if (($valor > 0 && $valor < 5) || ($valor > 10 && $valor < 15) )   {
    echo 'd';
}






?>
    
</body>
</html>
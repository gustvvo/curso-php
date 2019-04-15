<?php
//ejercicio 1
$arreglo = [
    'keyStr1' => 'lado',
    0 => 'ledo',
    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'
];
echo "Ejercicio 1";
echo "<br>";
echo "<br>";
echo "$arreglo[keyStr1], $arreglo[0], $arreglo[keyStr2], $arreglo[1], $arreglo[2]";
echo "<br>";
echo "Decirlo al revés lo dudo.";
echo "<br>";
echo "$arreglo[2], $arreglo[1], $arreglo[keyStr2], $arreglo[0], $arreglo[keyStr1]";
echo "<br>";
echo "¡Qué trabajop me ha costado!";
echo "<br>";
echo "<br>";

//ejercicio2
echo "Ejercicio2";
$america = [
                'Peru' => ['Lima', 'Loreto', 'Cajamarca'],
                'Mexico' => ['Monterrey', 'Queretaro', 'Cancun'],
                'Colombia' => ['Bogota', 'Cartagena', 'Medellin'],
                'Chile' => ['Santiago', 'Iquique','Valparaiso']
            ];

foreach ($america as $pais => $ciudades) {
    echo "<br>El pais $pais tiene como ciudades a ";
    foreach ($ciudades as $valor){
    echo "$valor ";
    }
}

echo "<br>";
echo "<br>";

//ejercicio3
echo "Ejercicio3";
echo "<br>";
echo "<br>";
$valores = [23, 53 , 32, 67, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
$maximo = max($valores);
//echo $maximo;

rsort($valores);
for ($i=0; $i < 3; $i++) { 
    echo  "$valores[$i] <br>";
}
echo "<br>";

sort($valores);
for ($i=0; $i < 3; $i++){
    echo  "$valores[$i] <br>";
}


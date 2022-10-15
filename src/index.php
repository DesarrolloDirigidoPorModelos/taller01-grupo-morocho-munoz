<?php

require('modelo/Cliente.php');
require('modelo/Medidor.php');



echo "<h1> SISTEMA DE VENTA DE MEDIDORES</h1> <br>";

$cliente1 = new Cliente('Paola', 'Morocho', '1104805591', 'paola@correo.com','Plateado');
$cliente2 = new Cliente('Albert', 'Muñoz', '1234567890', 'albert@correo.com', 'Loja');

$medidor = new Medidor('Marca 1', 'Plateado', '300', '12345');
$medidor2 = new Medidor('Marca 2', 'Sauces Norte', '400', '234567');
// echo $medidor->getClave();

$res = $cliente1->asignarMedidor($medidor);
echo "<h3>". $res. "</h3><br>";
$lista1 = $cliente1->getMedidor();

foreach ($lista1 as $clave){
    echo "<table>";
    echo "<th> DATOS DEL MEDIDOR" ."</th>";
    $arr = $clave->hacerArreglo();

    foreach ($arr as $key => $value) {
        # code...
        echo "<tr>";
        echo "<td>".$key."</td>";
    
        echo "<td>". $value."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

$res2 = $cliente2->asignarMedidor($medidor2);
echo "<h3>". $res2. "</h3><br>";
$lista2 = $cliente2->getMedidor();
foreach ($lista2 as $clave){
    echo "<table>";
    echo "<th> DATOS DEL MEDIDOR" ."</th>";
    $arr = $clave->hacerArreglo();

    foreach ($arr as $key => $value) {
        # code...
        echo "<tr>";
        echo "<td>".$key."</td>";
    
        echo "<td>". $value."</td>";
        echo "</tr>";
    }
    echo "</table>";
}




// var_dump($lista);
// foreach ($lista as $key) {
//     # code...
//     echo 'existe'. $key;
// }

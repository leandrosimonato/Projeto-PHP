<?php

$carros =[
    'LST-2393' => [
        'marca' => 'vw',
        'modelo' => 'Golf'
    ],
    'JAR-4512' => [
        'marca' => 'ford',
        'modelo' => 'kombi'
    ],

    'ASD-8913' => [
        'marca' => 'bmw',
        'modelo' => 'z4'
    ],
];

foreach ($carros as $placa => $carro) {
    echo $placa . ': ' . $carro['marca'] . PHP_EOL;
}
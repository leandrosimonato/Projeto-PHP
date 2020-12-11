<?php


$idadeList = [31, 36, 41, 23, 19, 39, 38];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;


$idadeList[] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

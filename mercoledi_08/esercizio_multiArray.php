<?php
$arrayD = [1,3,5,7,9];
$arrayP = [2,4,6,8];

// stampa array
echo "array dispari\n";
foreach ($arrayD as $indice => $valore) {
    echo "indice: ".$indice."\tvalore: ".$valore."\n";
}
echo "\narray pari\n";
foreach ($arrayP as $val) {
    echo "valore: ".$val."\n";
}

// unione array e stampa
$unioneArray = array_merge($arrayP, $arrayD);
echo "\narray unito\n";
foreach ($unioneArray as $val) {
    echo "valore: ".$val."\n";
}

// sort unione array e stampa
sort($unioneArray);
echo "\nArray unito e ordinato:\n";
foreach ($unioneArray as $indice => $valore) {
    echo "indice: ".$indice."\tvalore: ".$valore."\n";
}
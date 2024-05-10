<?php
function saluta($nome){
    echo "Ciao ".$nome."!";
}

function somma($a, $b){
    return $a + $b;
}

function salutaSomma($nome, $a, $b){
    echo "Ciao ".$nome."!";
    $sommaValori = somma($a, $b);
    echo "\nLa somma tra $a e $b fa: $sommaValori";
}

function calcola($a, $b){
    $somma = $a + $b;
    $prodotto = $a * $b;
    return array($somma, $prodotto);
}
function calcolaTutto($a, $b){
    $somma = $a + $b;
    $prodotto = $a * $b;
    $diff = $a - $b;
    if ($b!==0) {
        $quoz = $a / $b;
    }
    else {
        $quoz = 0;
    }
    return array(array($somma, $prodotto), array($diff, $quoz));
}

function salutaDefault($nome = "Antonio"){
    echo "Ciao ".$nome."!";
}

saluta("Peppone");
echo "\n";
echo somma(3,5);

echo "\n";
echo salutaSomma("Pierino", 4,6);

echo "\n";
[$s,$p] = calcola(1,5);
echo "Somma: $s\nProdotto: $p";

echo "\n";
[[$s,$p], [$d,$q]] = calcolaTutto(1,0);
echo "Somma: $s\nProdotto: $p\nDifferenza: $d\nQuoziente: $q";

echo "\n";
salutaDefault();
echo "\n";
salutaDefault("Peppone");
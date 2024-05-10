<?php
function matematica($a=0,$b=1) {
    $somma = $a + $b;
    $differenza = $a - $b;
    $moltiplicazoine = $a * $b;
    $divisione = $a / $b;
    return array($somma, $differenza, $moltiplicazoine, $divisione);    
}

$risultato = matematica(9,3);
$sommaTotale =0;

foreach($risultato as $operazione) {
    $sommaTotale += $operazione;
    echo "\nsingola operazione: $operazione";
}

echo "\nSomma totale: $sommaTotale";
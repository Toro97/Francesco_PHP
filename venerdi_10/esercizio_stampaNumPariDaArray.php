<?php
// Creare una funzione in PHP che accetti una lista di numeri e restituisca un nuovo array che
// contiene solo i numeri pari.
function ritornaSoloNumeriPari($vett = []) {
    $newVett=[];
    $ok=false;
    if (!empty($vett)) {
        foreach ($vett as $el) {
            if ($el%2 == 0) {
                array_push($newVett,$el);
                $ok=true;
            }
        }        
    }
    return array($newVett, $ok);
}



// TEST
$vector=[1,2,3,4,5,6];
//$vector=[];
//$vector=[1,3,5];
[$vetPari, $riuscito]=ritornaSoloNumeriPari($vector);

if ($riuscito)
{
    foreach ($vetPari as $el) {
        echo "\n$el";
    }
}
else{
    echo "Array vuoto oppure contenente solo numeri dispari";
}
<?php
$array=[];

// $eta=16;
$eta=18;

do {
    if (isset($eta))
    {
        $parola = ($eta>=18) ? "maggiorenne" : "minorenne";
        $array[0] = $parola;
    }

} while (empty( $array[0] ));

echo $array[0];


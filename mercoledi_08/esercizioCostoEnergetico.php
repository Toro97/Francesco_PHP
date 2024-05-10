<?php
$costoBase = 0.20;

$consumoKWh = 500;

$tipologiaAbitazione = "residenziale"; // sconto 10%
//$tipologiaAbitazione= "commerciale"; // malus del 15%

$weekend = true; // sconto ulteriore 5%
//$weekend = false;

// residenziale sconto 10% ___ bonus quindi bonusMalus=0.90
// commerciale malus 15% ___ malus quindi bonusMalus=1.15
$bonusMalus = ($tipologiaAbitazione == "residenziale") ? 0.90 : 1.15;

// weekend sconto ulteriore 5%___bonus quindi bonusMalus=bonusMalus-0.05
if ($weekend) {
    $bonusMalus = $bonusMalus - 0.05;
}

echo $costoBase * $consumoKWh * $bonusMalus;
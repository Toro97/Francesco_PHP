<?php
$eta = 21;
$weekend = false;

if ($eta != NULL) {
//    if ($weekend != NULL) {
        if ($eta < 12) {
            echo "Prezzo del biglietto 0€";
        } elseif ($eta >= 12 && $eta <= 17) {
            echo ($weekend) ? "Prezzo del biglietto 3€" : "Prezzo del biglietto 5€";
        } else {
            echo ($weekend) ? "Prezzo del biglietto 8" : "Prezzo del biglietto 10€";
        }
//    }
}
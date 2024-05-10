<?php
function potenza($base = 1, $esponente = 0)
{
    if ($esponente == 0) {
        return 1;
    } 
    else {
        if ($base == 0) {
            return 0;
        } 
        elseif ($base == 1) {
            return 1;
        } 
        else {
            $pot = 1;
            for ($i = 0; $i < $esponente; $i++) {
                $pot *= $base;
            }
            return $pot;
        }
    }
}

echo potenza(2, 10);
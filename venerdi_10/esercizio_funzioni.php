<?php   
// Il fattoriale di un numero intero non negativo n è il prodotto di tutti gli interi
// positivi minori o uguali a n. Per esempio, il fattoriale di 5 è 120 (che è 5 × 4 × 3 × 2 × 1).

// Requisiti

// Scrivi una funzione che prende un numero intero non negativo come input.
// La funzione deve calcolare il fattoriale di quel numero.
// Gestisci il caso in cui il numero sia 0 (il fattoriale di 0 è 1 per definizione).

function fattoriale($n = 0)
{
    if ($n <= 1) {
        return 1;
    }
    else {
        // modo con ricorsività
        //return $n*fattoriale($n -1);

        //  modo con ciclo
        $fatt=2;
        for ($i = 3; $i <= $n; $i++) {
            $fatt = $fatt * $i;
        }
        return $fatt;
    }
}

echo fattoriale(2);
echo "\n";
echo fattoriale(1);
echo "\n";
echo fattoriale(5);
echo "\n";
echo fattoriale(0);
echo "\n";
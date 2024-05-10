<?php
function calcolaMediaAssociativa($array)
{
    if (empty($array)) {
        return 0; // Se l'array è vuoto, restituisce 0 per evitare la divisione per zero
    }

    $somma = 0;
    $conteggio = 0;

    foreach ($array as $chiave => $valore) {
        if (is_numeric($valore)) { // Controlla se il valore è numerico
            $somma += $valore;
            $conteggio++;
        }
    }

    if ($conteggio === 0) {
        return 0; // Se non ci sono valori numerici, restituisce 0
    }

    return $somma / $conteggio; // Calcola la media
}

// Esempio di utilizzo della funzione
$arrayNumeri = [
    'primo' => 10,
    'secondo' => 20,
    'terzo' => 30,
    'testo' => 'ciao', // Questo valore non è numerico e sarà ignorato
    'quarto' => 40
];
$media = calcolaMediaAssociativa($arrayNumeri);
echo "La media è: $media"; // Output: La media è: 25
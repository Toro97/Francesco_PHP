<?php
//  Crea due stringhe e concatenale in base a un controllo su un numero,
// se è pari prima la stringa 1 e poi la 2, se è dispari il contrario. 

$stringa1 = "Francesco ";
$stringa2 = "Torelli ";
$num=3;
if ($num%2==0)
{
    echo $stringa1.$stringa2; // Output: "Ciao, come stai?"
}
else
{
    echo $stringa2.$stringa1;
}
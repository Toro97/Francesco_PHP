<?php
$pupazzo = array("pupazzo di pezza", "giocattolo", 5.46);
$macchinina = array("macchinina HotWheels", "giocattolo", 9.99);
$superLiquidator = array("superLiquidator, pistola ad acqua", "giocattolo", 29.99);

$cartaPKM = array("carta  pokemon", "collezionismo", 546.00);
$cartaYGO = array("carta  yu-gi-oh", "collezionismo", 6.00);

// array contenente tutti gli oggetti venduti
$vendite = array($pupazzo, $macchinina, $superLiquidator, $cartaPKM, $cartaPKM, $cartaYGO);

// array contenente tutte le categorie
$categorie = array();

// passo tutti gli articoli, se c'è la loro categoria ne sommo il prezzo
// altrimenti prima creo la categoria poi sommo il pressp
foreach($vendite as $articolo){
    $categoria=$articolo[1];
    $prezzo=$articolo[2];

    if(!isset($categorie[$categoria])){
        $categorie[$categoria] = 0;
    }
    $categorie[$categoria]+=$prezzo;
}

var_dump($categorie);

echo "Categoria e totale corrispondente";
foreach($categorie as $categoria =>$totale)
{
    echo "\nCategoria $categoria, totale $totale €";
}
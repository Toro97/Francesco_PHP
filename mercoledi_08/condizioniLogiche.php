<?php
$residenza = "torino";
$residenza = "cesena";
//$squadraCuore = "juventus";
//$squadraCuore = "torino";
$squadraCuore = "cesena";

if ($residenza == "torino" AND $squadraCuore == "juventus")
{
    echo "Sei di torino e tifi juventus";
}
else if ($residenza == "torino" AND ( $squadraCuore == "torino" || $squadraCuore == "juventus" ))
{
    echo "sei di torino e tifi una delle due squadre della città";
}
elseif ( $squadraCuore == "torino" || $squadraCuore == "juventus" )
{
    echo "NON sei di torino ma tifi una delle due squadre della città";
}
else
{
    echo "NON sei di torino e NON tifi una delle due squadre della città";
}

?>
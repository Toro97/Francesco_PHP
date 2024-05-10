<?php
$eta=20;
$patente=true;
$patente=false;
$corso=false;
//$corso=true;

if ($eta>18)
{
    if ($patente)
    {
        echo "puoi guidare la macchina";
    }
    else
    {
        if ($corso)
        {
            echo "ti manca poco poi potrai guidare la macchina";
        }
        else
        {
            echo "inizia a studiareeeeee";
        }
    }

}
else
{
    echo "non puoi guidare la macchina";
}


// if ($eta>18 AND $patente)
// {
//     echo "puoi guidare la macchina";
// }
// elseif ($eta>18 AND $corso)
// {
//     echo "ti manca poco poi potrai guidare la macchina";
// }
// elseif ($eta>18 AND !$corso)
// {
//     echo "inizia a studiareeeeee";
// }
// else
// {
//     echo "non puoi guidare la macchina";
// }

?>
<?php
$eta=18;
if ($eta>18)
{
    echo "maggiorenne";
}
elseif ($eta == 18)
{
    echo " appena maggiorenne";
}
else
{
    echo "minorenne";
}

$messaggio = ($eta>=18) ? "sei maggiorenne" : "sei minorenne";
echo $messaggio;

?>
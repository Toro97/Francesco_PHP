<?php
function mediaArray($vect = [])
{
    if(empty($vect)){
        return 0;
    }
    else{
        $sommaVal = 0.0;
        foreach ($vect as $val){
            $sommaVal += $val;
        }
        return $sommaVal/count($vect);                
    }
}

function maxArray($vect = [])
{
    if(empty($vect)){
        return NULL;
    }
    else{
        $max = $vect[0];
        for ( $i = 1; $i < count($vect); $i++ ){
            if ( $vect[$i] > $max ){
                $max = $vect[$i];
            }
        }
        return $max;                
    }
}

echo "test media\n";
echo mediaArray([]);
echo "\n";
echo mediaArray([1,2,3,4]);
echo "\n";
echo mediaArray();


echo "\n";
echo "test max\n";
echo maxArray();
echo "\n";
echo maxArray([1,2,3,7,4]);
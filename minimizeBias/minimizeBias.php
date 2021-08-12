<?php

function minimizeBias($ratings) {

    $temp = [];
    $arrayCount = count($ratings);

    foreach($ratings as $key => $value){

        for($i = 0; $i < $arrayCount; $i++){
            $j = $i;
            if($i == $key){
                continue;
            }

            $temp[$key][$i] = abs($value - $ratings[$j++]);

        }

    }

    $minBias = 0;
    foreach($temp as $tem){
        $minValue = min($tem);
        $minIndex = array_flip($tem)[$minValue];
        unset($temp[$minIndex]);
    }

    foreach($temp as $tem){
        $minBias += min($tem);
    }

    return $minBias;

}
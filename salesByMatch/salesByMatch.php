<?php

function sockMerchant($n, $ar) {
    $uniqueArrayAndCount = array_count_values($ar);

    $pairs = 0;

    foreach ($uniqueArrayAndCount as $sockCount){
        if($sockCount % 2 == 0){
            $pairs += $sockCount / 2;
        }else{
            $difference = $sockCount % 2;

            $pairs += ($sockCount - $difference) / 2;
        }
    }

    echo $pairs;

}

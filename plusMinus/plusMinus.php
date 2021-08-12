<?php

function plusMinus($arr) {
    $positiveArray = 0;
    $negativeArray = 0;
    $zeroArray = 0;

    foreach($arr as $integer){

        if($integer < 0){
            $negativeArray++;
        }elseif($integer > 0){
            $positiveArray++;
        }else{
            $zeroArray++;
        }

    }

    echo number_format($positiveArray / count($arr),5) . "\n";
    echo number_format($negativeArray / count($arr),5) . "\n";
    echo number_format($zeroArray / count($arr),5) . "\n";
}
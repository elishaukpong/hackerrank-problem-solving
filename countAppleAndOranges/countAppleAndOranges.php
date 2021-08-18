<?php

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {

    $orangeCount = 0;
    $appleCount = 0;

    array_map(function($apple) use ($s,$t,$a, &$appleCount){
        $apple += $a;

        if($apple >= $s && $apple <= $t) $appleCount++;
    }, $apples);

    array_map(function($orange) use ($s,$t,$b, &$orangeCount){
        $orange +=$b;

        if($orange >= $s && $orange <= $t) $orangeCount++;
    }, $oranges);


    echo $appleCount . " \n";
    echo $orangeCount . " \n";
}
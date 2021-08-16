<?php


function miniMaxSum($arr) {

    $sumValue = [];

    foreach($arr as $key => $integer)
    {
        $sumValue[] = array_sum(array_filter($arr, function($innerKey) use ($key){
            return $innerKey !== $key;
        },ARRAY_FILTER_USE_KEY));
    }

//      You can also use array_walk, this was for demonstration purpose
//
//    array_walk($arr, function($value, $key, $array) use(&$sumValue){
//
//        $sumValue[] = array_sum(array_filter($array, function($innerKey) use ($key){
//            return $innerKey !== $key;
//        },ARRAY_FILTER_USE_KEY));
//
//    },$arr);

    echo min($sumValue) . " " . max($sumValue);


//      one liner solution by little_foot on hackerrank, I was impressed I had to add it here.
//    echo(array_sum($arr)-max($arr))." ".(array_sum($arr)-min($arr));

}
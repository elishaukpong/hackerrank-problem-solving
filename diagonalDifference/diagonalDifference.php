<?php

function diagonalDifference($arr) {
    //initialize a new array to hold the diagonals, left and right
    $rightD = [];
    $leftD  = [];

    //iterate through the parent array, taking note of it's key
    foreach($arr as $key => $lineArray)
    {
        //iterate through the diagonal lines, take note of the keys
        foreach ($lineArray as $innerKey => $value){
            //if the parent key is equal to inner key, then we have a member of the right diagonal
            //e.g $a[0][0], $a[1][1]...$a[n][m]
            if($key == $innerKey){
                $rightD[] = $value;
            }

            //we are picking values from the end of the array, in steps of one
            //if the inner key is equal to the arrayCount - the inner key, then we have a member of the left diagonal
            //e.g $a[0][count-0], $a[1][count - 1]...$a[n][count - m]
            if($innerKey == ((count($arr) - 1) - $key)){
                $leftD[] = $value;
            }
        }
    }

    return abs(array_sum($rightD) - array_sum($leftD));

}
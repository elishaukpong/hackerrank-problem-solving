<?php

function staircase($n) {
    for($i = 0; $i < $n; $i++){
        $printHashChecker = $i;

        if($i !== $n - 1){
            for($spaceToPrint = ($n - ($i + 1)); $spaceToPrint > 0; $spaceToPrint--){
                echo " ";
            }
        }

        if($printHashChecker != 0){
            for($printHashChecker; $printHashChecker > 0; $printHashChecker--){
                echo "#";
            }
        }

        echo "# \n";
    }
}

staircase(6);


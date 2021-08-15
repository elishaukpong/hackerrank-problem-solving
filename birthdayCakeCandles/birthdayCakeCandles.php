<?php

function birthdayCakeCandles($candles) {
    return array_count_values($candles)[max(array_keys(array_count_values($candles)))];
}
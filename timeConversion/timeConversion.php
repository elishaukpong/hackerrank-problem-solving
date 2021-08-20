<?php

function timeConversion($s) {

    preg_match('/([0-9]{2}):[0-9]{2}:[0-9]{2}([A-Z]{2})/',$s,$values);

    $trimmedValue = trim(trim($s,'AM'),'PM');

    [,$hourValue,$meridiem] = $values;

    if( ($meridiem == 'AM' && $hourValue < 12) || ($meridiem == 'PM' && $hourValue == 12) ){
        return $trimmedValue;
    }

    if( $meridiem == 'AM' && $hourValue == 12){
        return preg_replace("/{$hourValue}/",'00',$trimmedValue,1);
    }

    return preg_replace("/{$hourValue}/",12 + $hourValue,$trimmedValue,1);

}
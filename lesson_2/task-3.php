<?php

$str = "1234567890";
$number = str_split($str);
$phone_number = "(";
echo createPhoneNumber($number, $phone_number);

function createPhoneNumber($number, $phone_number)
{
    for ($i = 0; $i < 10; $i++) {
        if ($i < 2) {
            $phone_number = $phone_number . $number[$i];
        } elseif ($i == 2) {
            $phone_number = $phone_number . $number[$i] . ") ";
        } elseif ($i < 5 && $i > 2) {
            $phone_number = $phone_number . $number[$i];
        } elseif
        ($i == 5) {
            $phone_number = $phone_number . $number[$i] . "-";
        } else {
            $phone_number = $phone_number . $number[$i];
        }
    }
    return $phone_number;
}



<?php

/*Не получилось до конца выполнить поставленою задачу, постоянно оновляеться массив
$arr_letters из-за этого функция check() не выполняет коректно свою задачу, пробовала
и другие решения, к сожалению, не вышло, возможно, сможете указать на проблемную зону,
пожалуйста*/

$string = 'HEllO';
$upgrade_string = strtolower($string);
$number_of_letters = str_split($upgrade_string);
$number_of_repeats = 0;
$arr_letters = array();

for ($i = 0; $i < count($number_of_letters); $i++) {
    $repeats = 0;
    $l = "";
    for ($j = 0; $j < count($number_of_letters); $j++) {
        if ($number_of_letters[$i] == $number_of_letters[$j]) {
            $repeats++;
            $l = $l . $number_of_letters[$i];
        }
    }
    $repeats--;
    if ($repeats > 0 && check($number_of_letters[$i], $arr_letters)) {
        echo $upgrade_string . ' -> ' . $number_of_letters[$i] . ' occurs ' . $repeats + 1 . " times \n";
        $number_of_repeats++;
    } elseif ($i == count($number_of_letters) - 1) {
        if ($number_of_repeats == 0) {
            echo $upgrade_string . ' -> 0 # no characters repeats more than once';
        }
    }
}

function check($letter, $arr_letters)
{
    if (count($arr_letters) == 0) {
        $arr_letters[] = $letter;
        return true;
    } elseif (count($arr_letters) > 0) {
        for ($i = 0; $i < count($arr_letters); $i++) {
            if ($letter == $arr_letters[$i]) {
                return false;
            }
        }
    }
    $arr_letters[] = $letter;
    return true;
}


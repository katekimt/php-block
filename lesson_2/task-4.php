<?php
$list = array(
    array("first_name" => "Noah",
        "last_name" => "M.",
        "country" => "Switzerland",
        "continent" => "Europe",
        "age" => 19,
        "language" => "C"),
    array("first_name" => "Anna",
        "last_name" => "R.",
        "country" => "Liechtenstein",
        "continent" => "Europe",
        "age" => 52,
        "language" => "JavaScript"),
    array("first_name" => "Ramon",
        "last_name" => "R.",
        "country" => "Paraguay",
        "continent" => "Americas",
        "age" => 29,
        "language" => "Ruby"),
    array("first_name" => "George",
        "last_name" => "B.",
        "country" => "England",
        "continent" => "Europe",
        "age" => 81,
        "language" => "C"));


$new_list = array();
$new_list = upgrade_list($list, $new_list);
$language = array();
$language = add_keys($new_list, $language);
var_dump($language);

function upgrade_list($list, $new_list)
{
    for ($i = 0; $i < count($list); $i++) {
        $new_list[] = $list[$i]["language"];
    }
    return $new_list;
}


function add_keys($new_list, $language)
{
    for ($i = 0; $i < count($new_list); $i++) {
        $count = 0;
        for ($j = 0; $j < count($new_list); $j++) {
            if ($new_list[$i] == $new_list[$j]) {
                $count++;
            }
        }
        $language[$new_list[$i]] = $count;
    }
    return $language;
}




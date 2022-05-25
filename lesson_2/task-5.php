<?php

$people = array("Alex", "Jacob");
echo who_likes_it($people);

function who_likes_it($people)
{
    if (count($people) == 0) {
        return "no one likes this";
    } elseif (count($people) == 1) {
        return $people[0] . " likes this";
    } elseif (count($people) == 2) {
        return $people[0] . " and " . $people[1] . " like this";
    } elseif (count($people) == 3) {
        return $people[0] . " " . $people[1] . " and " . $people[2] . " like this";
    } else {
        return $people[0] . " " . $people[1] . " and " . count($people) - 2 . " others like this";
    }
}


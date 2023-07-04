<?php

$articles = array([
    "Heello",
    "jeelo",
    "neeko"
]);

$sorye = "Yasuo";
$geton = "hasagi";

$ionia = [$sorye, $geton];

$values = [
    "message" => "Hi everybody my name is markiplier",
    "count" => 200,
    "pi" => 3.14,
    "status" => true,
    "result" => null
];

# var_dump($ionia);

# -----------------------------------------------------------------------------------------

# multidimensional array
$people = [
    [
        "name" => "Eric",
        "age" => 20,
    ],
    [
        "name" => "Miguel",
        "age" => 10,
    ],
];

$eric_stuff = $people[0];
$eric_age = $people[0]["age"];

#var_dump($eric_stuff);
#var_dump($eric_age);
var_dump($people[1]["age"]);

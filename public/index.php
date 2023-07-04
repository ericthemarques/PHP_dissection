<?php

$people = [
    "Eric",
    "Miguel",
    "Robson",
    "Lívia",
];

#foreach ($people as $people) {
#echo $people, ", ";
#};

# -----------------------------------------------------------------------------------------

$people_two = [
    "Yasuo",
    "Cloud",
    "Mario",
    "Link",
];

foreach ($people as $index => $people) {
    echo $index . ' - ' . $people, ", ";
};

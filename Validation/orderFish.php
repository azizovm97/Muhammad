<?php
function validateStr($fish_name)
{
    if ((int) $fish_name != 0) {
        return "ERROR 422, type of fish name have to be string. ";
    }
    return "Type of fish name is ok. ";
}
function validateInt($fish_count)
{
    if ((int) $fish_count == 0) {
        return "ERROR 422, type of fish number have to be int. ";
    }
    return "Type of fish number is ok. ";
}


function validateMax(string $fish_name, $max_value)
{
    if (strlen($fish_name) >= $max_value) {
        return "There are many characters in the name of the fish!"; 
    }
    return "The number of characters is enough!"; 
}
function validateMin(string $fish_name, $min_value)
{
    if (strlen($fish_name) < $min_value) {
        return "There are few characters in the name of the fish!"; 
    }
    return "The number of characters is enough!"; 
}


function searchInList(string $fish_name, array $fishes_list)
{
    if (!in_array($fish_name, $fishes_list)) {
        return "There is no such fish on the list! "; 
    }
    return "There is such a fish on the list!"; 
}


function orderFish(string $fish_name, string $fish_count)
{
    $fishes_list = [
        "mackerel",
        "trout",
        "tuna",
        "vobla",
        "pikeperch",
        "herring",
        "catfish",
    ];
    $type_validate_str = validateStr($fish_name);
    $type_validate_int = validateInt($fish_count);
    $min_validate      = validateMin($fish_name, 4);
    $max_validate      = validateMax($fish_name, 10);
    $list_search       = searchInList($fish_name, $fishes_list);
    return "$type_validate_str $type_validate_int $min_validate $max_validate $list_search";
}
//Business Logic
$fish_name  = readline("Enter fish name: "); 
$fish_count = readline("Enter number of fish: ");
echo orderFish($fish_name, $fish_count);

<?php
//Задача:"Заказ у рыбака"
//У мостика корабля забросил свою удочку наш рыбак. 
//Он готов поймать одну рыбу для вас, но он требует писать свой заказ правильно. 
//Напишите функцию, которая поверяет заказ для рыбака, 
//в случае ошибки вернуть сообщение (422-неверно отправленные данные N)

//Список рыб у рыбака:
//1. mackerel - скумбрия
//2. trout — форель
//3. tuna — тунец
//4. vobla — вобла
//5. pikeperch — судак
//6. herring — сельдь
//7. catfish — сом


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


function checkingMax(string $fish_name)
{
    $max = 10;
    if (strlen($fish_name) >= $max) {
        return "There are many characters in the name of the fish!"; //В названии рыбы много символов!.
    }
    return "The number of characters is enough!"; //Количество символов достаточно!
}
function checkingMin(string $fish_name)
{
    $min = 2;
    if (strlen($fish_name) < $min) {
        return "There are few characters in the name of the fish!"; //В названии рыбы мало символов!
    }
    return "The number of characters is enough!"; //Количество символов достаточно!
}


function searchInList(string $fish_name, array $fishes_list)
{
    if (!in_array($fish_name, $fishes_list)) {
        return "There is no such fish on the list! "; //В списке не такой рыбы!
    }
    return "There is such a fish on the list!"; //В списке есть такая рыба!
}


function orderFish(string $fish_name, string $fish_count)
{
    //Проверить типы данных
    //Длина команды минимум и максимум
    //Находится для в наборе уже существующих рыб в океане 
    $fishes_list = [
        "mackerel",
        "trout",
        "tuna",
        "vobla",
        "pikeperch",
        "herring",
        "catfish",
    ];
    $type_checking_str = validateStr($fish_name);
    $type_checking_int = validateInt($fish_count);
    $min_checking      = checkingMin($fish_name);
    $max_checking      = checkingMax($fish_name);
    $list_search       = searchInList($fish_name, $fishes_list);
    return "$type_checking_str $type_checking_int $min_checking $max_checking $list_search";
}
//Business Logic
$fish_name  = readline("Enter fish name: "); //Введите название рыбы
$fish_count = readline("Enter number of fish: "); //Введите количество рыбы
echo orderFish($fish_name, $fish_count);

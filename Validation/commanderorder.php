<?php


function validateNumber($order) {
    if(is_string($order)) {
      return "Error you wrote a number"; 
    }
    
}


function validateMin($order, $min_words){
    if(strlen($order) <= $min_words){
        return "You wrote very few command";
    }
}


function validateMax($order, $max_words){
    if(strlen($order) >= $max_words){
        return "You wrote much words";
    }   
    elseif(strlen($order) < 10 & strlen($order) > 1){
        return "Your command is accept!";
    }
}

function commanderOrder($order) {
    $min_words = 1;
    $max_words = 10;
    echo validateNumber($order);
    echo validateMax($order, $max_words);
    echo validateMin($order, $min_words);
};

// Business logic
$order = readline("Give your order, captain! ");
echo commanderOrder($order) ;
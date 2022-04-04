<?php

function width(string ...$words){
    $widths=[];
   
    foreach($words as $word){
        $widths[]=strlen($word);      
    }
    return $widths;
}

$widths= width('hello', 'ciao', 'bonjour', 'fdferferer');

print_r($widths);


// se non avessi l'operatore variadic come poteri fare ?
function width2(array $words){
    $widths=[];
   
    foreach($words as $word){
        $widths[]=strlen($word);      
    }
    return $widths;
}

$widths= width2(['hello', 7, 'bonjour', 'fdferferer']);

print_r($widths);
<?php

// ES 4
$a=24;
$b=12;
$c= $a + $b;

echo 'la variabile c vale: ' . $c . '<br>';



//ES 5

$nome='Roberto';
$cognome='Ruffinengo';

$len_nome=strlen($nome);
$len_cognome=strlen($cognome);

if ($len_nome>$len_cognome){
    echo 'il mio nome è più lungo del cognome<br>';
}elseif($len_nome<$len_cognome){
    echo 'il mio cognome è più lungo del nome<br>';
}else {
    echo 'il mio nome è lungo come il cognome<br>';
}
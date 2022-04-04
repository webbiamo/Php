<?php
// sintassi del foreach quando usiamo un array associativo

$colori_dei_frutti=[
    'mela'=>'rosso',
    'banana'=> 'giallo',
    'pera'=>'verde'
];

// se vogliamo aggiungere un elemento:

$colori_dei_frutti['arancia']='arancione';


// come posso sfogliare l'array ?

foreach($colori_dei_frutti as $colore){
    echo $colore . '<br>'; 

}

foreach($colori_dei_frutti as  $frutto=> $colore){
    echo  'il ' . $frutto . ' ha come colore '. $colore . '<br>'; 
// equivalente    echo  'il ' . $frutto . ' ha come colore '. $colori_dei_frutti[$frutto] . '<br>';

}

// array => estrarre solo le chiavi 

// usiamo array_keys per estrarre tutte le chiavi da un array
// e successivamente con un ciclo prendiamo tutti i valori dell'array usando
// le chiavi
// secondo il principi che se scrivo:
//echo $colori_dei_frutti['mela']    ottengo giallo
$frutto ='mela';

echo $colori_dei_frutti[$frutto] .'<br>';
$frutti = array_keys($colori_dei_frutti);
print_r($frutti);


foreach($frutti as $frutto){
    echo  'il ' . $frutto . ' ha come colore '. $colori_dei_frutti[$frutto] . '<br>'; 
}










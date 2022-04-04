<?php
// un aray di nomi

$nomi=['Paola', 'Marco'];

echo $nomi[0] . '<br>';


// voglio aggiungere un nuovo elemento
$nomi[]='Maria';
echo $nomi[2] . '<br>';

// calcolo quanti elementi ci sono
$num_elementi = count($nomi);
echo $num_elementi . '<br>';

// prendi l'elemento corrente
echo current($nomi) . '<br>';

echo next($nomi) . '<br>';

echo '<pre>';
var_dump($nomi);
echo '</pre>';

// elimino un elemento
unset($nomi[1]);
echo '<pre>';
var_dump($nomi);
echo '</pre>';

//usiamo come indice una variabile
$i = 0; // il secondo elemento

echo $nomi[$i] . '<br>';
$i++;
$i++;  // ora $i vale 2 e quindi punterà al terzo elemento

echo $nomi[$i] . '<br>';



// un array può contenere anche array
$personaA=['Gianni','Bianchi'];
$personaB=['Paola', 'Verdi'];

$persone=[$personaA, $personaB];

echo '<pre>';
print_r($persone);

// voglio stampare il nome della seconda persona
echo 'il nome della seconda persona: '. $persone[1][0];


// come faccio ad aggiungere una altra persona ?
$personaC=['Antonio','Rossi'];

$persone[]=$personaC;

print_r($persone);

// oppure:
$persone[]=['Marta', 'Verdi'];
print_r($persone);


// se volessi correggere  Paola Verdi in Paolo Verdi, come faccio?
$persone[1][0]='Paolo';
print_r($persone);



// possiamo creare array con n dimensioni e con tipi arbitrari
// generando dei mostri

// 
$persone[1][0]=['Paolo',
    ['paolo@gmail.com',
        ['01132323','3451234']
    ]    
];

print_r($persone);



<?php
echo '<pre>';
$personaA=['name'=>'Gianni','surname'=>'Bianchi'] ;

echo $personaA['name'] .'<br>';

$persone[]=$personaA;

// se voglio aggiungere la Paola Verdi:

$persone[]=['name'=>'Paola', 'surname'=>'Verdi'];

// ma se io volessi gestire la mail posso aggiungerla

// aggiungo la di gianni:
$persone[0]['email']='gianni.verdi@gmail.com';

// l'alternativa sarebbe:
$persone[0]=[
    'name'=>$persone[0]['name'],
    'surname'=>$persone[0]['surname'],
    'email'=>'gianni.verdi@gmail.com'
];


// se voglio aggiungere il telefono o meglio i telefoni
$persone[0]['tel']=['0112323','3453434'];


print_r($persone);









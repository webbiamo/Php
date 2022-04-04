<?php

$filename = 'Archivio/elenco.JSON';


//echo "Spedisco la riga ".$_POST['rigaSpedita'];

//aggiorna Spedito da 0 a 1 

$prenotazioni = json_decode(file_get_contents($filename), true); // trasforma JSON in ARRAY


//punta alla rigaSpedita  e mette il valore di spedito a 1

$prenotazioni[$_POST['rigaSpedita']]['Spedito'] = 1;


//riscrive il contenuto aggiornato con il valore cambiato, dentro ad elenco.json

file_put_contents($filename, json_encode($prenotazioni, JSON_FORCE_OBJECT));

//gli diciamo torna indietro:

header('location: elenco.php');

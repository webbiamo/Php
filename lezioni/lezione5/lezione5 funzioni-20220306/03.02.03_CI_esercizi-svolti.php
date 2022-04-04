<?php

/*
dato un array $numalunni che rappresenta  il numero di alunni presenti nelle classi di una scuola.
esso contiene :
$numalunni = [0,18,12,34,23,18,12,12,15];
calcolare il numero massimo di alunni presenti un una classe
calcolare il numero minimo di alunni presenti un una classe
calcolare il numero totale di alunni
calcolare il numero di classi che non hanno alunni
sapendo che il numero ideale di aluni è 20, indicare quante classi non hanno il numero ideale
calcolare il numero medio di alunni senza contare le classi che non hanno alunni, perchè altrimenti la media risulta falsata
*/
echo '<hr>';
$numalunni = [0,18,12,34,23,18,12,12,15];

// max
$non_ideale= $classi_a_zero = $tot = $max = 0;
$min = $numalunni[0] ?? 0 ;
foreach($numalunni as $numalunni_in_classe){
    if ($numalunni_in_classe > $max ) $max = $numalunni_in_classe;
    if ($numalunni_in_classe < $min ) $min = $numalunni_in_classe;
    $tot += $numalunni_in_classe;
    if($numalunni_in_classe == 0 ) $classi_a_zero++;
    if ($numalunni_in_classe <> 20 ) $non_ideale++;
}
printf('il numero massimo di alunni presenti in una classe è %d<br />', $max);
printf('il numero minimo di alunni presenti in una  classe è %d<br />', $min);
printf('il numero totale di alunni presenti nelle classi è %d<br />', $tot);
printf('il numero di classi che non hanno alunni %d<br />', $classi_a_zero);
printf('il numero di classi che non hanno il numero ideale è  %d<br />', $non_ideale);
printf('il numero medio di alunni, senza contate le classi vuote è   %d<br />', $tot/(count($numalunni)- $classi_a_zero));


/*
sia data la base dati di un asilo composto da due sezioni, e per ogni sezione 3 diversi anni (primo anno, secondo anno, terzo anno)
L'array del numero iscritti è organizzato in questo modo:

$iscritti= [
	[21,22,20],
	[22,23,21]
];

quindi gli iscritti al secondo anno delle prima sezione saranno rappresentati da:
$iscritti[0][1]

stampare il numero di iscriti al terzo anno della seconda sezione

calcolare il numero totale di iscritti


Si immagini ora di voler modificare il programma in modo che sia possibile gestire anche una scuola con 4 o più sezioni.
Come si dovrebbe scrivere il programam che calcola il numero totale di iscritti ?

*/
echo '<hr>';
$iscritti = [
    [21, 22, 20 ],
    [22, 23,21 ]
];


printf('il numero di iscritti al terzo anno della seconda sezione è %d<br />', $iscritti[1][2]);

$tot = 0 ;
foreach ($iscritti as $iscr_sezione) {

    $tot = $tot + $iscr_sezione[0] + $iscr_sezione[1] + $iscr_sezione[2];

}

printf('il numero totale di iscritti è %d<br />', $tot);



$tot = 0 ;
foreach ($iscritti as $iscr_sezione) {
    foreach ($iscr_sezione as $iscr_anno) {
        $tot += $iscr_anno;
    }
}

printf('il numero totale di iscritti è %d<br />', $tot);


echo '<hr>';

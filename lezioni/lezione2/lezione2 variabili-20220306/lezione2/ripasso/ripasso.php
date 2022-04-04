<?php

/*definire due variabili di tipo float (double) con due decimali:
costo orario
durata
e calcolarne il costo totale come prodotto del costo orario e delle durata
stampare il risultato a video con echo 
arrotondare il risultato a due decimali
Usare la funzione round
E poi fare una altra versione usando la funzione number_format()*/

/*
$x = 5.24577;
$y = 10.55677;
$z = $x + $y;

echo "la somma di $x e $y vale $z <br>";
echo "la somma dei numeri con tre cifre decimali è $z <br>";
echo "la somma dei numeri arrotondata per eccesso a due cifre decimali è ". round ($z, 2) . "<br>";
echo "la somma dei numeri arrotondata utilizzando la funzione number_format è uguale a ". number_format ($z, 2, ".",",");*/



/*
// 1)
echo 'Hello world!';

*/

//2)
echo "\n";

$a=5;
$b=10;

echo 'la variabile $a vale'  . $a . "\n" ;
echo 'la variabile $b vale'  . $b . "\n";

// 3)
// primo modo non consigliato
echo 'somma di $a e $b ' . ( $a + $b)  . "\n";

// secondo modo 
$risultato = $a + $b;
echo 'somma di $a e $b ' . $risultato  . "\n";


$risultato = $a - $b;
echo 'differenza di $a e $b ' . $risultato  . "\n";

// 4)
 echo  "\n" ;
echo date('d/m/Y')   . "\n";


echo date('Y-m-d')   . "\n";

//5 ) 
$town = 'Torino';
$region= 'Piemonte';

echo $town . ' è la capitale della regione ' . $region  ."\n";

$messaggio =  $town . ' è la capitale della regione ' . $region  ."\n";
echo $messaggio; 

//6 )
define('IVA', 22);
$costo = 40 ;
$costo_ivato = $costo * (100 + IVA)/100;
echo 'Il prodotto costa ' .$costo . ' euro + IVA ' . IVA . '% per un totale di '  . $costo_ivato .   ' euro '
. "\n";


// 7)
echo 'il valore di __DIR__:' . __DIR__     ;
echo "\n";
echo 'il valore di __FILE__  :' . __FILE__     ;
echo "\n";
echo 'il valore di __LINE__ : ' . __LINE__   ;
echo "\n";

// 8) 
$i=12;
echo '$i vale: ' . $i . "\n";
$i++;
echo '$i vale: ' . $i . "\n";

//9 ) 
$area= 900;
$lato= sqrt($area);
echo 'il quadrato ha area '.$area.' e il suo lato calcolato con la radice quadrata vale ' . $lato ;
echo "\n";

//10



$i=1;
echo $i . "\n";
echo gettype($i)  . "\n";
$i=$i . $i;
echo $i  . "\n";
echo gettype($i) . "\n";
$i--;
echo $i  . "\n";
echo gettype($i) . "\n";







?>



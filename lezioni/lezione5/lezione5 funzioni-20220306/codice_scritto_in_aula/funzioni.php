<?php
declare(strict_types=0);


function somma( int $a, int  $b) :int  {

  $c=  $a + $b   ;
 echo ' a: ' . gettype($a) . '  b: ' .  gettype($b) .'  c: '. gettype($c)  .'<br>';
 
   return $c ;
   
}

//$c = somma(20,5);
//echo $c;

function stampa(){
   

echo somma('3', 'gatto');

}


//echo "prova con codice racchiuso in funzione";
//stampa();
//echo "fine";

echo 3  . gettype(3) . '<br>';

echo '3'  . gettype('3') .'<br>';

echo intval('4.6')  . gettype(intval('4.6')) . '<br>';

echo intval('gatto')  . gettype(intval('gatto')) . '<br>';

echo (int)4.9  . gettype((int)4.1) . '<br>';
echo (int)'4.1'  . gettype((int)'4.1') . '<br>';
echo (int)'gatto3'  . gettype((int)'gatto3') . '<br>';
echo (int)'3gatto'  . gettype((int)'3gatto') . '<br>';


echo "usando round";
echo round(4.6);


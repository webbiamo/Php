<?php
$es=3;
// es 3
echo '<hr>es '.$es++.' <br>';
echo 'Hello World! Questa è la lezione 3';
//es 4
echo '<hr>es '.$es++.' <br>';
$a=5;
$b=10;

echo '<br>la variabile $a vale: ' . $a . '<br>';
echo 'la variabile $b vale: ' . $b . '<br>';

// es 5
echo '<hr>es '.$es++.' <br>';
$tot=$a+$b;
echo 'la somma di $a e $b vale: ' . $tot  . '<br>';

$tot=$a-$b;
echo 'la sottrazione di $a e $b vale: ' . $tot  . '<br>';

$tot=$a*$b;
echo 'il prodotto di $a e $b vale: ' . $tot  . '<br>';

$tot=$a/$b;
echo 'la divisione di $a e $b vale: ' . $tot  . '<br>';



// es 6
echo '<hr>es '.$es++.' <br>';
echo date('d/m/Y') . '<br>';
echo date('Y-m-d') . '<br>';

// imposto il timezone
date_default_timezone_set('Europe/Rome');
echo date ('G:i:s') . '<br>';

//7
echo '<hr>es '.$es++.' <br>';
$town='Torino';
$region='Piemonte';

echo $town . ' è il capoluogo della regione ' . $region . '<br>';

//8 
echo '<hr>es '.$es++.' <br>';
define('IVA', 22);
$costo= 40;
$costo_ivato= $costo + $costo*IVA/100;

// in alternativa
$costo_ivato= $costo*(1+IVA/100);

echo 'il prodotto costa ' . $costo . ' euro + IVA ' . IVA . '% per un totale di ' .  $costo_ivato  .'<br>';




// 9
echo '<hr>es '.$es++.' <br>';
echo __DIR__ . '<br>' ;
echo __FILE__ . '<br>' ;
echo __LINE__ . '<br>' ;


// 10 
echo '<hr>es '.$es++.' <br>';
$i=12 ;
echo $i . '<br>';
$i++;
echo $i  . '<br>';










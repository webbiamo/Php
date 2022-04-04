<h1>numeri</h1>
<?php

$a = 1;

echo "la variabile a vale: " . $a;
echo "<br>";
echo ++$a;
echo "<br>";
echo $a++;
echo "<br>";
echo $a;


?>
<h1> float, operazioni </h1>

<?php

$costo_orario = 23.56;
$durata= 41.21;

$costo_totale = $costo_orario * $durata ;

echo $costo_totale; 
echo "<br>";

echo round($costo_totale,2);
echo "<br>";

// in alternativa possiamo anche calcolare il costo arrontato e poi stamparlo
$costo_totale_arrotondato = round($costo_totale, 2);
echo $costo_totale_arrotondato;
echo "<br>";



// esercizi: invece di usare la funzione round()
// usare la funzione number_format() e stampare due decimali

echo number_format($costo_totale, 3,".", ",");  // uso la virgola come separatore





















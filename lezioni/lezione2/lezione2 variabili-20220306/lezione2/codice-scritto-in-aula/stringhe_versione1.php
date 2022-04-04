<h1>stringhe</h1>

<?php

$a = 1;

echo $a;

echo '<br>';

// vediamo i vari modi che ho di scrivere il valore della variabile con un commento
// primo metodo stampo l'etichetta in HTML e poi apro il PHP al bisogno
?>
la variabile $a vale: <?php echo $a ?><br>

<?php // la stessa cosa con la sintassi abbreviata  [BESTCHOICE] ?>
la variabile $a vale: <?= $a ?> <br>

<?php // concatenando le stringhe di etichetta e la variabile   [BESTCHOICE]
echo 'la variabile $a vale: ' . $a . '<br>';

// usando gli apici doppi (e il carattere di escape al bisogno)
echo "la variabile \$a vale: $a <br>";

// usando printf:
echo "PRINTF"."<br>";
printf('la variabile $a vale: %d <br>', $a);


// la funzione strlen
echo strlen('buona giornata')  .'<br>';


echo strpos('la storia della gabbianella', 'storia') . '<br>';

// ho dei codici i cui primi 4 char non significano nulla e voglio estrarre dal 5 char
echo substr('TRIS0345', 4,4) . '<br>';

$code='TRIS03453333';
echo substr($code,4,4);

 /*se non sapessi a priori quante cifre ci sono dopo la sottostringa TRIS, come posso modifica
 la mia funzione ? voglio che funzioni per questi codici e per altri ancora che non so quanto 
 sono lunghi
 TRIS023
 TRIS156756456
 */
echo substr($code,4) . '<br>';

echo strtoupper('questo testo era minuscolo') .'<br>';
echo strtolower('Questo Testo Era un  maiuscolo e minuscolo') . '<br>';










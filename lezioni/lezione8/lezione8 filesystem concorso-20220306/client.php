<?php
$firstcode='catalamina';
$url= 'https://www.itoa.it/engim/grande-concorso.php?';

$primo_url = $url . 'firstcode='. $firstcode;

$pagina=file($primo_url);

echo $pagina[18];

$secondcode=trim($pagina[18]);


$secondapagina=file_get_contents($url. 'firstcode=' . $firstcode . '&secondcode='. $secondcode);

echo $secondapagina;
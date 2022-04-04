<?php
    $stringa = $_GET["text"];

    echo $stringa;
    echo '<br>';
    echo strtolower($stringa);
    echo '<br>';
    echo ucwords($stringa);
    echo '<br>';
    echo strtoupper($stringa);
    echo '<br>';
    echo 'Parametro ricevuto: ' . $stringa;
?>

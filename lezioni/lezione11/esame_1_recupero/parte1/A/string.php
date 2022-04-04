<?php
    $stringa = $_GET["word"];

    echo strtoupper($stringa)."<br>";
    echo strtolower($stringa)."<br>";
    echo ucwords($stringa)."<br>";
    echo "Parametro ricevuto: " . $stringa;
?>

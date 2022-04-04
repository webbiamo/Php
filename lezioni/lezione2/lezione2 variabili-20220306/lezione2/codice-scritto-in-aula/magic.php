<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php
// esploriamo le magic constant
echo "<p>" . __DIR__ . "</p>";  //visualizza il percorso del file eseguito
echo "<p>".__FILE__ . "<br>";   //visualizza il nome del file esguito
echo "<p>".__LINE__ . "<br>";   //visualizza la linea in cui è presente il comando 
?>

</body>
</html>
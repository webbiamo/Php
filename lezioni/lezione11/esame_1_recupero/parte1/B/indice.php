<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Indice parte1/B: </h1>
    <div>
    <?php
    echo '<a href="./myhello.php" target ="_blank">myhello.php</a>';
    echo '<br>';
    echo '<a href="./conta.php" target ="_blank">conta.php</a>';
    echo '<br>';
    echo '<br>';
    //echo stampa.php
    echo 'stampa.php';
    echo '<form method="GET" action="./stampa.php" target="_blank">';
    echo '<input type="textbox" placeholder="parametro text" name="text">';
    echo '<input type="submit" name="Invia">';
    echo '</form>';
    //fine echo stampa.php
    echo '<br>';
    echo '<a href="./modulo.php" target="_blank">modulo.php</a>';
    echo '<br>';
    echo '<a href="./mialista.php" target ="_blank">mialista.php</a>';
    echo '<br>';
    ?>
    </div>
    
</body>
</html>
